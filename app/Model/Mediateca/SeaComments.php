<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class SeaComments extends Model
{
    protected $table = 'med_sea_comments';
    
    public function usuario (){
        return $this->belongsTo('App\User', 'usuario_id');
    }
    public function respuestas (){
        return $this->hasMany ('App\Model\Mediateca\SeaComments', 'comment_id')->orderBy ('created_at','DESC');
    }
}
