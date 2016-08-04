<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotecas', function(Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->string('url_tomo');
            $table->string('url_descripcion');
            $table->string('pais');
            $table->string('link_consulta');
            $table->integer('clasifica_id');
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
        Schema::drop('bibliotecas');
    }
}
