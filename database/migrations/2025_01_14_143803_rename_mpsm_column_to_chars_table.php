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
            $table->renameColumn('mp/sm', 'mpSm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chars', function (Blueprint $table) {
            $table->renameColumn('mpSm', 'mp/sm');
        });
    }
};
