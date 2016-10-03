<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function(Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('titulo');
            $table->string('autor');
            $table->string('categoria');
            $table->string('url_descarga');
            $table->string('pais');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
        Schema::drop('publicaciones');
    }
}
