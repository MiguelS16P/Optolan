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
        
        $familias = Familia::where('baja_web','FALSO')
            ->get();

        //se enviara otra cosa mas
        
        return view('familia.index',compact('familias'));
    }

    

    public function get_categorias($url_familia)
    {
        // Recojo la url que me envian y 
        // genero un select para conseguir su ID de Familia. 
        $familia_actual = Familia::where('url',$url_familia)->first(); 
        
        $familias = Familia::where('claparent',$familia_actual->id)->get();
    
        return view('familia.listar-categorias',compact('familias','familia_actual'));
    }  
    
    public function get_articulos($url_familia){

        $familia_actual = Familia::where('url',$url_familia)->first(); 

        $articulos = Familia::find($familia_actual->id)->articulos()
        ->where('baja','FALSO')
        ->paginate();
        
        return view('familia.listar-articulos',compact('articulos','familia_actual'));
        
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
