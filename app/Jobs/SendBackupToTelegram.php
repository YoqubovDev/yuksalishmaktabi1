<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class SendBackupToTelegram implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 3;

    /**
     * The number of seconds to wait before retrying the job.
     *
     * @var int
     */
    public $backoff = 60;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if (!File::exists($this->filePath)) {
            Log::error("Backup file not found for Telegram transfer: {$this->filePath}");
            return;
        }

        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        if (!$botToken || !$chatId) {
            Log::error("Telegram credentials missing in .env");
            return;
        }

        $fileSize = File::size($this->filePath);
        $fileSizeMB = round($fileSize / (1024 * 1024), 2);

        // Telegram Bot API limit is 50MB for sendDocument
        if ($fileSizeMB > 50) {
            $this->notifyLargeFile($botToken, $chatId, $fileSizeMB);
            Log::warning("Backup file is too large for Telegram API (50MB+): {$fileSizeMB}MB");
            return;
        }

        $response = Http::timeout(300)
            ->attach('document', file_get_contents($this->filePath), basename($this->filePath))
            ->post("https://api.telegram.org/bot{$botToken}/sendDocument", [
                'chat_id' => $chatId,
                'caption' => "✅ Avtomatik Backup: " . basename($this->filePath) . " ({$fileSizeMB} MB)",
            ]);

        if ($response->failed()) {
            Log::error("Telegram send failed: " . $response->body());
            throw new \Exception("Telegram send failed");
        }

        Log::info("Backup successfully sent to Telegram: " . basename($this->filePath));
    }

    /**
     * Notify if file is too large
     */
    protected function notifyLargeFile($token, $chatId, $size)
    {
        Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text' => "⚠️ *DIQQAT!* Backup fayli juda katta ({$size} MB). Telegram orqali yuborish imkonsiz (Limit: 50MB). Fayl serverda saqlanib qoldi.",
            'parse_mode' => 'Markdown'
        ]);
    }
}
