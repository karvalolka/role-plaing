<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('abilities');

        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('abilities');

        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('condition')->unsigned();
            $table->text('description');
            $table->enum('class_race', ['class', 'race', 'other']);
            $table->timestamps();
        });
    }
};
