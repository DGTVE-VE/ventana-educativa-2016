<?php

namespace App\Model\Mediateca;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'red_publicaciones';

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
    protected $fillable = ['imagen', 'titulo', 'autor', 'categoria', 'url_descarga', 'pais', 'created_at', 'updated_at'];
}
