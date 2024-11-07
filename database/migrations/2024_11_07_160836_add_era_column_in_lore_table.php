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
        Schema::table('lore', function (Blueprint $table) {
             $table->string('era')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('lore1', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->timestamps();
        });

        $loreData = DB::table('lore')
            ->select('id', 'text', 'created_at', 'updated_at')
            ->get();

        $loreDataArray = $loreData->map(function ($item) {
            return [
                'id' => $item->id,
                'text' => $item->text,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ];
        });

        DB::table('lore1')->insert($loreDataArray->toArray());

        Schema::dropIfExists('lore');

        Schema::create('lore', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->timestamps();
        });

        $lore1Data = DB::table('lore1')
            ->select('id', 'text', 'created_at', 'updated_at')
            ->get();

        $lore1DataArray = $lore1Data->map(function ($item) {
            return [
                'id' => $item->id,
                'text' => $item->text,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ];
        });

        DB::table('lore')->insert($lore1DataArray->toArray());

        Schema::dropIfExists('lore1');
    }
};
