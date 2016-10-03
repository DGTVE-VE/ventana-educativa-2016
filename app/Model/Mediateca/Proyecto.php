<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'red_proyectos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'banner', 'descripción', 'thumbnail', 'activo', 'liga', 'created_at', 'updated_at'];
}
