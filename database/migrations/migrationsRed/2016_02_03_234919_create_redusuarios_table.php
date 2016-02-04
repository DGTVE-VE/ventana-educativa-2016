<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedusuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redusuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre',100);
            $table->string('correo',40);
            $table->string('pais',20);
            $table->string('localidad',50);
            $table->string('sexo',15);
            $table->date('nacimiento');
            $table->string('ocupacion',25);
            $table->string('grado_estudios',25);            
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
        Schema::drop('redusuarios');
    }
}
