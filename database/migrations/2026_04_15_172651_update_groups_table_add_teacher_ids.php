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
        Schema::table('groups', function (Blueprint $table) {
            $table->foreignId('teacher_id')->nullable()->constrained('home_sliders')->onDelete('set null');
            $table->foreignId('assistant_id')->nullable()->constrained('home_sliders')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropForeign(['assistant_id']);
            $table->dropColumn(['teacher_id', 'assistant_id']);
        });
    }
};
