<?php

namespace App\Red;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $fillable = array('titulo','descripcion','thumbnail','activo','liga');
    protected $guarded = array('id_proyectos','fecha_creacion');
}
