<?php

namespace App\Model\Red;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    //
    protected $table = "red_colaboradores";
    
    public function user (){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function comments(){
        return $this->hasMany('App\Model\Red\Comment', 'id_colaborador');
    }
}
