<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use ZipArchive;
use App\Jobs\SendBackupToTelegram;
use Exception;

class BackupProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Compress regular project files and database into a single backup ZIP and send to Telegram';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting backup process...');
        Log::info('Backup started: ' . now());

        $timestamp = now()->format('Y-m-d_H-i');
        $backupDir = storage_path('app/backups');
        $tempDir = storage_path('app/backups/temp_' . $timestamp);
        $zipFilePath = storage_path("app/backups/backup_{$timestamp}.zip");

        try {
            // 1. Ensure backup directory exists
            if (!File::exists($backupDir)) {
                File::makeDirectory($backupDir, 0755, true);
            }

            // 2. Create temp directory for database dump
            File::makeDirectory($tempDir, 0755, true);

            // 3. Database Dump
            $dbFile = $tempDir . '/database.sql';
            $this->dumpDatabase($dbFile);
            $this->info('Database dumped successfully.');

            // 4. Compress project files and db dump
            $this->createZip($zipFilePath, $dbFile);
            $this->info('Backup ZIP created: ' . basename($zipFilePath));

            // 5. Cleanup temp directory
            File::deleteDirectory($tempDir);

            // 6. Delete old backups (keep only last X)
            $this->cleanupOldBackups($backupDir);

            // 7. Dispatch Job to Send to Telegram
            SendBackupToTelegram::dispatch($zipFilePath);
            $this->info('Backup dispatched to Telegram queue.');

            Log::info('Backup completed successfully: ' . $zipFilePath);
            return 0;

        } catch (Exception $e) {
            $this->error('Backup failed: ' . $e->getMessage());
            Log::error('Backup failed: ' . $e->getMessage());
            
            if (File::exists($tempDir)) {
                File::deleteDirectory($tempDir);
            }
            
            return 1;
        }
    }

    /**
     * Export MySQL Database using mysqldump
     */
    protected function dumpDatabase($path)
    {
        $host = config('database.connections.mysql.host');
        $user = config('database.connections.mysql.username');
        $pass = config('database.connections.mysql.password');
        $name = config('database.connections.mysql.database');

        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s > %s',
            escapeshellarg($user),
            escapeshellarg($pass),
            escapeshellarg($host),
            escapeshellarg($name),
            escapeshellarg($path)
        );

        $output = [];
        $resultCode = null;
        exec($command, $output, $resultCode);

        if ($resultCode !== 0) {
            throw new Exception('Database dump failed with exit code ' . $resultCode);
        }
    }

    /**
     * Create ZIP archive excluding sensitive folders
     */
    protected function createZip($zipPath, $dbFile)
    {
        $zip = new ZipArchive();
        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            throw new Exception('Could not create ZIP archive');
        }

        $basePath = base_path();
        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($basePath),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        // Exclude patterns
        $exclude = [
            'node_modules',
            'vendor',
            '.git',
            'storage/app/backups',
            'storage/framework',
            'storage/logs'
        ];

        foreach ($files as $name => $file) {
            if (!$file->isDir()) {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($basePath) + 1);

                $shouldExclude = false;
                foreach ($exclude as $pattern) {
                    if (str_contains($relativePath, $pattern)) {
                        $shouldExclude = true;
                        break;
                    }
                }

                if (!$shouldExclude) {
                    $zip->addFile($filePath, $relativePath);
                }
            }
        }

        // Add the database dump separately
        if (File::exists($dbFile)) {
            $zip->addFile($dbFile, 'database_dump.sql');
        }

        $zip->close();
    }

    /**
     * Keep only last X backups
     */
    protected function cleanupOldBackups($dir)
    {
        $keepCount = env('BACKUP_KEEP_COUNT', 3);
        $files = File::glob($dir . '/*.zip');

        if (count($files) > $keepCount) {
            // Sort by modification time (oldest first)
            usort($files, function ($a, $b) {
                return filemtime($a) - filemtime($b);
            });

            $toDelete = count($files) - $keepCount;
            for ($i = 0; $i < $toDelete; $i++) {
                File::delete($files[$i]);
                $this->info('Deleted old backup: ' . basename($files[$i]));
            }
        }
    }
}
