<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');                      // Video sarlavhasi
            $table->string('url', 2048);                  // YouTube URL (uzun bo'lishi mumkin)
            $table->date('published_at')->nullable();     // Sana
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->timestamps();                         // created_at va updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
}