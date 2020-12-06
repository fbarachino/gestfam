<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubricas', function (Blueprint $table) {
            $table->id();
            $table->string('Cognome');
            $table->string('Nome');
            $table->string('Email')->nullable();
            $table->string('Cellulare')->nullable();
            $table->string('TelFisso')->nullable();
            $table->string('TelLavoro')->nullable();
            $table->longText('indirizzo');
            $table->string('cap');
            $table->string('citta');
            $table->string('nazione');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id');
            $table->integer('shared')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubricas');
    }
}
