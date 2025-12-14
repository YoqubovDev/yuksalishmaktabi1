<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void
    {
        Schema::create('teacher_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('asosiy')->default(0);
            $table->integer('ilmiy');
            $table->integer('kurator');
            $table->integer('tashqi');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('teachers_stats');
    }
};
