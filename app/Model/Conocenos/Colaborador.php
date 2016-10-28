<?php

namespace App\Model\Conocenos;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'con_colaboradores';

    public function user (){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function comments(){
        return $this->hasMany('App\Model\Conocenos\Comment', 'id_colaborador');
    }


}
