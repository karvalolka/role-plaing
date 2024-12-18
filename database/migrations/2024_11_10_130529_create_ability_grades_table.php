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
        Schema::create('ability_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ability_id')->constrained()->onDelete('cascade');
            $table->foreignId('grade_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ability_grades');

        Schema::create('type_ability_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_ability_id')->constrained()->onDelete('cascade');
            $table->foreignId('grades_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
};
