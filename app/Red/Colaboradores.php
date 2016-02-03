<?php

namespace App\Red;

use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model {

    protected $fillable = array('url_foto', 'resena', 'pais','colabora');
    protected $guarded = array('id_colaborador', 'password');

}
