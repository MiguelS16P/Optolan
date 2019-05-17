<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Articulo;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        
        $familias = Familia::where("claparent","0")
            ->where('baja_web','FALSO')
            ->get();       
        
        $ofertas = Articulo:: where("oferta","1")
            ->get();
        
        
        
        return view('inicio.index',compact('familias','ofertas'));
    }     
}
