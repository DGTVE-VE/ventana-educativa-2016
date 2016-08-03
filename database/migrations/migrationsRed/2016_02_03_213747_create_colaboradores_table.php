<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->increments('id_colaborador');
            $table->string('url_foto',100);            
            $table->string('resena',250);
            $table->string('pais',50);                                    
            $table->string('colabora',50); 
            $table->string('nombre',60);
            $table->string('puesto',60);
            $table->string('area',100);
            $table->string('dependencia',100);
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
        Schema::drop('colaboradores');
    }
}
