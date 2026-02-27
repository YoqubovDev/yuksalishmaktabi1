<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about_statics', function (Blueprint $table) {
            $table->id();
            $table->integer('students_count');
            $table->integer('qualified_teachers');
            $table->string('graduation_rate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_statics');
    }
};
