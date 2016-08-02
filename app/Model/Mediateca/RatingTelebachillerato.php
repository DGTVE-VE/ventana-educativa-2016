<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class RatingTelebachillerato extends Model
{
    protected $table = 'med_telebachillerato_rating';
    protected $fillable = ['user_id', 'telebachillerato_id', 'rating'];
}
