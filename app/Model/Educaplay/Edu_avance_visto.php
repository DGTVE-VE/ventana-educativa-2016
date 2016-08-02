<?php

namespace App\Model\Educaplay;

use Illuminate\Database\Eloquent\Model;

class Edu_avance_visto extends Model
{
     protected $table = 'edu_avance_visto';
	 protected $fillable = ['user_id', 'video_id', 'minuto'];
}
