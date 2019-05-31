<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    //
    public function articulos(){
        return $this->hasMany('App\Articulo');
    }

    public static function get_cat($id){
        $datos= Familia::where('claparent',$id)->get();
        return $datos;
    }

    public static function get_familias_padre(){
        $datos = Familia::where('claparent',0)->where('baja_web','FALSO')->get();
        return $datos;
    }

    public static function get_padre($id){
        $datos = Familia::where('id',$id)->where('baja_web','FALSO')->first();
        return $datos;
    }

   
}



