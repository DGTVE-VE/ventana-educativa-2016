<?php

namespace App\Model\Red;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
     protected $table = 'Proyectos';
    protected $fillable = array('titulo','descripcion','thumbnail','activo','liga');
    protected $guarded = array('id_proyectos');
}
