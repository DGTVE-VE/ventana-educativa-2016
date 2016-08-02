<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class RatingTelesecundaria extends Model
{
    protected $table = 'med_telesecundaria_rating';
    protected $fillable = ['user_id', 'telesecundaria_id', 'rating'];
}
