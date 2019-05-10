<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familiaAllJSON = '[
            {   "id":"2", 
                "nombre":"CAJA OFIMATICA",
                "img":"FND.jpg",
                "parent": "0",
                "grupo": "falso"
            },
            {
                "id":"1",
                "nombre":"DRAKA",
                "img":"FND.jpg",                                 
                "parent": "0",
                "grupo": "verdadero"
            },
            {   "id":"3",
                "nombre":"ACCESORIOS RACKS",
                "img":"FND.jpg",                                 
                "parent": "0",
                "grupo": "falso"             
            },
            {   "id":"4",
                "nombre":"RACKS IDEAL",
                "img":"FND.jpg",                                 
                "parent": "0",
                "grupo": "falso"               
            },
            {   "id":"5",
                "nombre":"ELECTRONICA DE RED",
                "img":"FND.jpg",                                 
                "parent": "0",
                "grupo": "falso"              
            },
            {   "id":"6",
                "nombre":"RACKS STEELNET",
                "img":"FND.jpg",                                 
                "parent": "0",
                "grupo": "falso"               
            },
            {   "id":"7",
                "nombre":"IDEAL",
                "img":"FND.jpg",                                 
                "parent": "0",
                "grupo": "falso"                
            },
            {   "id":"8",
                "nombre":"DRAKA COBRE",
                "img":"FND.jpg",                                 
                "parent": "1",   
                "grupo": "falso"               
            },
            {   "id":"9",
                "nombre":"DRAKA FIBRA",
                "img":"FND.jpg",                                 
                "parent": "1", 
                "grupo": "falso"                
            }
        ]';

        $familiasAll = json_decode($familiaAllJSON,true);

        return view('familia.index',compact('familiasAll'));
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
