<?php

namespace App\Model\Conocenos;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='con_blog_comments';
	
    public function blog (){
        return $this->belongsTo('App\Model\Conocenos\Blog', 'id_blog');
    }
    
    public function colaborador (){
        return $this->belongsTo('App\Model\Conocenos\Colaborador', 'id_colaborador');
    }
    
    public function respuestas (){
        return $this->hasMany ('App\Model\Conocenos\Comment', 'id_comment');
    }
    
    public function comentario (){
        return $this->belongsTo ('App\Model\Conocenos\Comment', 'id_comment');
    }
}
