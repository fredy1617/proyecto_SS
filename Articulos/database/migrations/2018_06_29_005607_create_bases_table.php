<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');

            $table->integer('id_autor')->unsigned();
            $table->foreign('id_autor')->references('id')->on('autores');

            $table->integer('año');

            $table->integer('id_revista')->unsigned();
            $table->foreign('id_revista')->references('id')->on('revistas');

            $table->string('tipo');

            $table->integer('id_tema')->unsigned();
            $table->foreign('id_tema')->references('id')->on('temas');

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
        Schema::dropIfExists('bases');
    }
}
