<?php

namespace App\Model\Educaplay;

use Illuminate\Database\Eloquent\Model;

class Edu_comments extends Model
{
    protected $table = 'edu_comments';
	protected $fillable = ['video_id', 'serie_id', 'usuario_id', 'comment_id', 'comment'];
    public function usuario (){
        return $this->belongsTo('App\User', 'usuario_id');
    }
    public function respuestas (){
        return $this->hasMany ('App\Model\Educaplay\Edu_comments', 'comment_id')->orderBy ('created_at','DESC');
    }
}
