<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('exam_stats', function (Blueprint $table) {
            $table->renameColumn('cefr', 'olympiad_winners');
            $table->renameColumn('universitet', 'maktab_tayyorlov');
            $table->renameColumn('ielts', 'iqtidorli_bolalar');
            $table->renameColumn('sat', 'jami_yutuqlar');
        });

        Schema::rename('exam_stats', 'achievement_stats');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('achievement_stats', 'exam_stats');
        
        Schema::table('exam_stats', function (Blueprint $table) {
            $table->renameColumn('olympiad_winners', 'cefr');
            $table->renameColumn('maktab_tayyorlov', 'universitet');
            $table->renameColumn('iqtidorli_bolalar', 'ielts');
            $table->renameColumn('jami_yutuqlar', 'sat');
        });
    }
};
