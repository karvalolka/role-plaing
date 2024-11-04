<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('subraces', function (Blueprint $table) {
            $table->unsignedBigInteger('race_id')->nullable()->after('id');
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::create('subraces_temp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $subraces = DB::table('subraces')->select('id', 'name', 'created_at', 'updated_at')->get();

        foreach ($subraces as $subrace) {
            DB::table('subraces_temp')->insert([
                'id' => $subrace->id,
                'name' => $subrace->name,
                'created_at' => $subrace->created_at,
                'updated_at' => $subrace->updated_at,
            ]);
        }

        Schema::dropIfExists('subraces');

        Schema::rename('subraces_temp', 'subraces');
    }

};
