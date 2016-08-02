<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class TelebachilleratoComments extends Model
{
    protected $table = 'med_telebachillerato_comments';
    
    public function usuario (){
        return $this->belongsTo('App\User', 'usuario_id');
    }
    public function respuestas (){
        return $this->hasMany ('App\Model\Mediateca\TelebachilleratoComments', 'comment_id')->orderBy ('created_at','DESC');
    }
}
