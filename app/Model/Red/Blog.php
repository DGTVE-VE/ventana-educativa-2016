<?php

namespace App\Model\Red;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'red_blog';
    
    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag', 'red_blog_tags', 'id_blog', 'id_tag');
    }
    
    public function comments (){
        return $this->hasMany('App\Model\Red\Comment', 'id_blog');
    }
}
