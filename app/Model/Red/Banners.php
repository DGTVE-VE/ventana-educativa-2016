<?php

namespace App\Model\Red;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    
    protected $fillable = array('url_archivo', 'activo');
    protected $guarded = array('id_banner');
}
