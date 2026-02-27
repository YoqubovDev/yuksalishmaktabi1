<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();         // Manzil
            $table->string('phone')->nullable();           // Telefon
            $table->string('fax')->nullable();             // Fax
            $table->string('email')->nullable();           // Email
            $table->string('work_time')->nullable();       // Ish vaqti
            $table->string('lunch_time')->nullable();      // Tushlik vaqti
            $table->string('bus')->nullable();             // Avtobus
            $table->string('marshrut')->nullable();        // Marshrut
            $table->string('stop')->nullable();            // Bekat
            $table->string('telegram')->nullable();        // Telegram link
            $table->string('facebook')->nullable();        // Facebook link
            $table->string('youtube')->nullable();         // YouTube link
            $table->string('instagram')->nullable();       // Instagram link
            $table->string('map_link')->nullable();        // Google Maps link
            $table->decimal('rating', 2, 1)->nullable();   // Reyting (4.8 kabi)
            $table->integer('reviews_count')->default(0);  // Baholar soni (122 ta)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};