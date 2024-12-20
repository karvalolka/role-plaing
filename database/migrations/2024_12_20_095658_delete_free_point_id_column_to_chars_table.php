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
        Schema::table('chars', function (Blueprint $table) {
            $table->dropColumn('free_point_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chars', function (Blueprint $table) {
            $table->foreignId('free_point_id')->constrained()->onDelete('cascade');
        });
    }
};
