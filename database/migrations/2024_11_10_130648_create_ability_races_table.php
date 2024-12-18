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
        Schema::create('ability_races', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ability_id')->constrained()->onDelete('cascade');
            $table->foreignId('race_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ability_races');

        Schema::create('type_ability_races', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_ability_id')->constrained()->onDelete('cascade');
            $table->foreignId('races_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
};
