<?php

namespace App\Model\Red;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'red_blog_comments';
    
    public function blog (){
        return $this->belongsTo('App\Model\Red\Blog', 'id_blog');
    }
    
    public function colaborador (){
        return $this->belongsTo('App\Model\Red\Colaborador', 'id_colaborador');
    }
    
    public function respuestas (){
        return $this->hasMany ('App\Model\Red\Comment', 'id_comment');
    }
    
    public function comentario (){
        return $this->belongsTo ('App\Model\Red\Comment', 'id_comment');
    }
}
