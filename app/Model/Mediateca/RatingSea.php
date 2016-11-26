<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class RatingSea extends Model
{
    protected $table = 'med_sea_rating';
    protected $fillable = ['user_id', 'telesecundaria_id', 'rating'];
}
