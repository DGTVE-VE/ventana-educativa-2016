<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class TelesecundariaComments extends Model
{
    protected $table = 'med_telesecundaria_comments';
    
    public function usuario (){
        return $this->belongsTo('App\User', 'usuario_id');
    }
    public function respuestas (){
        return $this->hasMany ('App\Model\Mediateca\TelesecundariaComments', 'comment_id');
    }
}
