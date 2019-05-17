<?php

namespace App\Http\Controllers;

use App\Familia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $familiasAll = Familia::where('baja_web','FALSO')
            ->get();

        $nombre_fam = 'Nuestros Productos';

        $familias = Familia::where("claparent","0")
            ->where('baja_web','FALSO')
            ->get();

        return view('familia.index',compact('familias','familiasAll','nombre_fam'));
    }

    public function get_categorias($url_familia)
    {
        // Recojo la url que me envian y 
        // genero un select para conseguir su ID de Familia. 
        $id_fam = Familia::where('url',$url_familia)->value('id');              
        $nombre_fam = Familia::where('url',$url_familia)->value('nomfam');  
        
        $familias = Familia::where('claparent',$id_fam)->get();
    
        $familiasAll = Familia::where('baja_web','FALSO')->get();       
    
        return view('familia.listar-categorias',compact('familiasAll','familias','nombre_fam'));
    }

    
    
    public function crear_url(){

        $articulos = Articulo::select('articulos.*','familias.url as url_familia')       
            ->join('familias','articulos.clafam','=','familias.id')
            ->get();

        
        return view('familia.url',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
