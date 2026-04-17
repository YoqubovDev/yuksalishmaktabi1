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
        // Ortiqcha jadvallarni o'chirib tashlash
        Schema::dropIfExists('videos');
        Schema::dropIfExists('courses');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Qaytarish shart emas, chunki foydalanuvchi buni o'chirib tashlashni so'radi
    }
};
