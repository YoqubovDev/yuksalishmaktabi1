<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // student name or achievement title
            $table->string('badge')->nullable(); // e.g. "Oltin medal", "IELTS 8.5"
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable(); // e.g. "Matematika", "IELTS"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};