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
        Schema::table('teachers', function (Blueprint $table) {
            // Kategoriya (Staff) bilan bog'lash
            $table->unsignedBigInteger('staff_id')->nullable()->after('id');
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('set null');

            // Guruh bilan bog'lash
            $table->unsignedBigInteger('group_id')->nullable()->after('staff_id');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['staff_id']);
            $table->dropForeign(['group_id']);
            $table->dropColumn(['staff_id', 'group_id']);
        });
    }
};
