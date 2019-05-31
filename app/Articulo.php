<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    public function familia()
    {
        return $this->belongsTo('App\Familia');
    }

    protected $fillable=["nombre","descripcion","familia_id","baja","pvpoferta","oferta","imagen","ficha_tecnica"];

    public function scopeBuscar($articulos, $buscar){

        if($buscar != ""){

            $articulos->where("codigo","LIKE","%$buscar%")->orWhere("nombre","LIKE","%$buscar%");
        }

        
    }


}
