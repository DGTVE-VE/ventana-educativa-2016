<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biblioteca extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'biblioteca';

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
    protected $fillable = ['nombre', 'url_tomo', 'url_descripcion', 'pais', 'link_consulta', 'clasifica_id'];
}
