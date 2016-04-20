<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class Telesecundaria extends Model
{
      protected $table = 'Telesecundaria';
      
      public function comments (){
          return $this->hasMany('App\Model\Mediateca\TelesecundariaComments', 'telesecundaria_id');
      }
}
