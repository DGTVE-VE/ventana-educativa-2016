<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable implements CanResetPassword
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function colaborador (){
        return $this->hasOne('App\Model\Red\Colaborador', 'user_id');
    }
    
    public function ratingTelesecundaria ($telesecundaria_id){
        $rating = Model\Mediateca\RatingTelesecundaria::
                where ('user_id', $this->id)
                -> where ('telesecundaria_id', $telesecundaria_id)->first ();
        if ($rating == null){
            return 0;
        }
        return $rating->rating;
    }
    public function ratingTelebachillerato ($telebachillerato_id){
        $rating = Model\Mediateca\RatingTelebachillerato::
                where ('user_id', $this->id)
                -> where ('telebachillerato_id', $telebachillerato_id)->first ();
        if ($rating == null){
            return 0;
        }
        return $rating->rating;
    }
}
