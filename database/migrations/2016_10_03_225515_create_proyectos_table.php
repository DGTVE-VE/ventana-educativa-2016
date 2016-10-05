<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('banner');
            $table->text('descripcion');
            $table->string('thumbnail');
            $table->tinyInteger('activo');
            $table->string('liga');
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
        Schema::drop('proyectos');
    }
}
