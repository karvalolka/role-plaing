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
            $table->string('hp')->nullable();
            $table->string('mp/sm')->nullable();
            $table->string('strength')->nullable();
            $table->string('agility')->nullable();
            $table->string('stamina')->nullable();
            $table->string('reception')->nullable();
            $table->string('intelligence')->nullable();
            $table->string('charisma')->nullable();
            $table->string('luck')->nullable();
            $table->string('fortitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chars', function (Blueprint $table) {
            $table->dropColumn('hp');
            $table->dropColumn('mp/sm');
            $table->dropColumn('strength');
            $table->dropColumn('agility');
            $table->dropColumn('stamina');
            $table->dropColumn('reception');
            $table->dropColumn('intelligence');
            $table->dropColumn('charisma');
            $table->dropColumn('luck');
            $table->dropColumn('fortitude');
        });
    }
};
