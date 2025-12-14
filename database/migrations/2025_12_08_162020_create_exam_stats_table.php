<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void
    {
        Schema::create('exam_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('cefr');
            $table->integer('universitet');
            $table->integer('ielts');
            $table->integer('sat');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('exam_stats');
    }
};
