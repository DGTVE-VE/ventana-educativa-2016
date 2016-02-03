<?php

namespace App\Red;

use Illuminate\Database\Eloquent\Model;

class Redusuarios extends Model
{
     protected $fillable = array('nombre','correo','pais','localidad','sexo','nacimiento','ocupacion','grado_estudios','id_contenido');
    protected $guarded = array('id_redusuario','fecha_activacion');
}
