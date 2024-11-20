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
        Schema::dropIfExists('subgrades');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('subgrades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('grade_id')->nullable()->after('id');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
