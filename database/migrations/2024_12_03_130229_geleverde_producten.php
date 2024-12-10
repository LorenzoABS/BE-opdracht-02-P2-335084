<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// class CreateGeleverdeProductenTable extends Migration
return new class extends Migration
{
    public function up()
    {

        Schema::create('geleverde_producten', function (Blueprint $table) {
            $table->id(); // Product ID
            $table->unsignedInteger('leverancier_id'); // Foreign key naar leverancier
            $table->string('naam_product'); // Naam van het product
            $table->integer('aantal_in_magazijn'); // Aantal in magazijn
            $table->string('verpakkingsgrootte'); // Verpakkingsgrootte (bijv. '5kg')
            $table->date('laatste_levering'); // Laatste levering (datum)
            $table->boolean('nieuwe_levering')->default(false); // Nieuwe levering (checkbox)
            $table->timestamps(); // Timestamps voor created_at en updated_at

            // Relatie naar leverancier
            $table->foreign('leverancier_id')->references('id')->on('leveranciers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('geleverde_producten');
    }
};
