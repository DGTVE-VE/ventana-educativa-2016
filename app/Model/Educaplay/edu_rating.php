<?php

namespace App\Model\Educaplay;

use Illuminate\Database\Eloquent\Model;

class Edu_rating extends Model
{
	protected $table = 'edu_rating';
	protected $fillable = ['user_id', 'video_id', 'rating'];
}
