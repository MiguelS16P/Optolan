<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Articulo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function get_articulos($url_familia){

        $id_fam = Familia::where('url',$url_familia)->value('id'); 
        $nombre_fam = Familia::where('url',$url_familia)->value('nomfam'); 
        
        $articulos = Articulo::where('clafam',$id_fam)
            ->where('baja','FALSO')
            ->paginate();

        $familiasAll = Familia::where('baja_web','FALSO')->get();     

        return view('articulo.listar-articulos',compact('articulos','familiasAll','nombre_fam'));
        
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
