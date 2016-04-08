<?php

namespace App\Model\Red;

use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model {
     protected $table = 'Colaboradores';
    protected $fillable = array('url_foto', 'resena', 'pais','colabora','nombre','puesto','area','dependencia');
    protected $guarded = array('id_colaborador');

}
