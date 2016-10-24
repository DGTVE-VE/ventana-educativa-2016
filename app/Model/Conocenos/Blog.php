<?php

namespace App\Model\Conocenos;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'con_blog';
	
    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag', 'red_blog_tags', 'id_blog', 'id_tag');
    }
    
    public function comments (){
        return $this->hasMany('App\Model\Conocenos\Comment', 'id_blog');
    }
}
