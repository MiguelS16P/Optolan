<?php

namespace App\Http\Controllers;

use App\User;
use App\Articulo;
use App\Familia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

//para ver que usuraio esta logueado
use Illuminate\Support\Facades\Auth;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index(Request $request)
    {
        

        if ($this->type_user()=='admin') {
            $articulos = Articulo::buscar($request->get('buscar'))->where ('baja','FALSO')->orderBy('codigo')->paginate(13);          

            $cad_buscada =$request->get('buscar');
            return view('admin.list-articulos',compact('articulos','cad_buscada'));           
        }

        return redirect('/');       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'en progresooo ...';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //esta funcion es para crear
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
                
        if ($this->type_user()=='admin') {
            
            $articulo = Articulo::find($id);                
            return view('admin.ver-articulo',compact('articulo')); 
        }
        
        $articulo = Articulo::find($id);            
        $familia_actual = $articulo->familia;    
        $ofertas = Articulo:: where("oferta","1")
            ->get();            
        
        return view('articulo.ver',compact('articulo','familia_actual','ofertas'));

        //return $articulo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($this->type_user()=='admin') {
            
            $articulo = Articulo::find($id);     
            
            $familias = Familia::where('grupo','FALSO')->orderBy('nomfam')->get();

            return view('admin.edit_articulo',compact('articulo','familias')); 
        }

        return redirect('/');
        
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
        $articulo = Articulo::findOrFail($id);     

        $entrada_update = $request->all();  

        if($archivo_img = $request->file('imagen')){

            $nombre_img = $archivo_img->getClientOriginalName();
            $archivo_img->move('images/articulos',$nombre_img);
            $entrada_update['imagen'] = $nombre_img;           
        }

        if($archivo_pdf = $request->file('ficha_tecnica')){

            //$nombre_pdf = $archivo_pdf->getClientOriginalName();
            $nombre_pdf = $articulo->codigo.'.pdf';
            $archivo_pdf->move('pdf/articulos',$nombre_pdf);
            $entrada_update['ficha_tecnica'] = $nombre_pdf;
        }

        $articulo->update($entrada_update);       
        return redirect("/articulos/".$articulo->id);
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

    private function type_user(){
        
        $user = Auth::user();
        $check = Auth::check();

        if ($check) {
            if ($user->esAdmin()) {
                return $user->role->nombre;
            }
        }else {
            return redirect('/');
        }     

    } 
}
