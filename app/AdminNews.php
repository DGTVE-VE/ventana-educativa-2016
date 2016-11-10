<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminNews extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'news_admin';

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
    protected $fillable = ['titulo', 'url_imagen', 'url_pdf', 'url', 'is_active'];
}
