<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    
    protected $fillable = array('tag');
    
    public function blogs()
    {
        return $this->belongsToMany('App\Model\Red\Blog', 'red_blog_tags', 'id_tag', 'id_blog');
    }
}
