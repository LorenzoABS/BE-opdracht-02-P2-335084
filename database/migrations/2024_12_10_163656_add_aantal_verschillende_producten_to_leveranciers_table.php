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
        Schema::table('leveranciers', function (Blueprint $table) {
            $table->integer('aantal_verschillende_producten')->after('mobiel')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leveranciers', function (Blueprint $table) {
            $table->dropColumn('aantal_verschillende_producten');
        });
    }
};
