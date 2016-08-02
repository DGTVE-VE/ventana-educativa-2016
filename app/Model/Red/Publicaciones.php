<?php

namespace App\Model\Red;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    protected $table = 'red_publicaciones';
    protected $fillable = array('imagen','titulo','autor','categoria','url_descarga','pais');
}
