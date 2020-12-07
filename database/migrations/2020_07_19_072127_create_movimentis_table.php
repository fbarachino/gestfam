<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentis', function (Blueprint $table) {
            $table->id();
            $table->date('movimenti_data');
            $table->bigInteger('movimenti_contoid')->unsigned();
            $table->foreign('movimenti_contoid')->on('contos')->references('id');
            $table->bigInteger('movimenti_categoriaid')->unsigned();
            $table->foreign('movimenti_categoriaid')->on('categorias')->references('id');
            $table->longText('movimenti_causale');
            $table->decimal('movimenti_importocredito', 10, 2);
            $table->decimal('movimenti_importodebito', 10, 2);
            $table->bigInteger('movimenti_userid')->unsigned();
            $table->foreign('movimenti_userid')->on('users')->references('id');
            $table->string('movimenti_ricevute')->nullable();
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
        Schema::dropIfExists('movimentis');
    }
}
