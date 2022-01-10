<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('destinazione');
            $table->string('descrizione');
            $table->string('durata');
            $table->date('data-inizio');
            $table->date('data-fine');
            $table->string('prezzo');
            $table->string('numero-persone');
            $table->string('alloggio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
