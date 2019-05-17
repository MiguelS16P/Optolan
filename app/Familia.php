<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    //
    public function articulos()
    {
        return $this->hasMany('App\Articulo','clafam');
    }
}
