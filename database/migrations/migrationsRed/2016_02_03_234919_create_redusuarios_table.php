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
            $table->string('nombre',150);
            $table->string('correo',150);
            $table->string('pais',50);
            $table->string('localidad',50);
            $table->string('sexo',10);
            $table->date('nacimiento');
            $table->string('ocupacion',100);
            $table->string('grado_estudios',50);
            $table->int('id_contenido',5);
            $table->date('fecha_activacion');
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
