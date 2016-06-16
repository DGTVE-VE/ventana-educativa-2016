<?php

namespace App\Model\Educaplay;

use Illuminate\Database\Eloquent\Model;

class Edu_comments extends Model
{
    protected $table = 'edu_comments';
	protected $fillable = ['video_id', 'serie_id', 'usuario_id', 'comment_id', 'comment'];
}
