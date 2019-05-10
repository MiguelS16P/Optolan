<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        
        $familiaJSON = '[
                            {   "id":"1", 
                                "nombre":"DRAKA",
                                "img":"FND.jpg",
                                "parent": "0"
                            },
                            {
                                "id":"2",
                                "nombre":"CAJA OFIMATICA",
                                "img":"FND.jpg",                                 
                                "parent": "0"
                            },
                            {   "id":"3",
                                "nombre":"ACCESORIOS RACKS",
                                "img":"FND.jpg",                                 
                                "parent": "0"                
                            },
                            {   "id":"4",
                                "nombre":"RACKS IDEAL",
                                "img":"FND.jpg",                                 
                                "parent": "0"                
                            },
                            {   "id":"5",
                                "nombre":"ELECTRONICA DE RED",
                                "img":"FND.jpg",                                 
                                "parent": "0"                
                            },
                            {   "id":"6",
                                "nombre":"RACKS STEELNET",
                                "img":"FND.jpg",                                 
                                "parent": "0"                
                            },
                            {   "id":"7",
                                "nombre":"IDEAL",
                                "img":"FND.jpg",                                 
                                "parent": "0"                
                            }
                        ]';

        $ofertasJSON = '[
                            {
                                "id" : "1",
                                "nombre" : "Módulo H RJ45 FTP Cat. 6A 180º 250 Mhz 1 Gbit Tipo 3M",
                                "img" : "PND.jpg",
                                "referencia" : "CNH6ARS",
                                "pvp_real" : "3.05",
                                "pvp_desc" : "2.98"
                            },
                            {
                                "id" : "1",
                                "nombre" : "Latiguillo Cat.6 UTP LSZH 1m gris IDEAL",
                                "img" : "PND.jpg",
                                "referencia" : "E8104GR.1",
                                "pvp_real" : "0.95",
                                "pvp_desc" : "0.65"
                            },
                            {
                                "id" : "1",
                                "nombre" : "Regleta 19 1U 6 schukos con interruptor blanca sobre chapa",
                                "img" : "PND.jpg",
                                "referencia" : "B6TI19E",
                                "pvp_real" : "5.5",
                                "pvp_desc" : "3.98"
                            },
                            {
                                "id" : "1",
                                "nombre" : "Panel UTP Cat. 6 24 puertos 19 1/2U LSA 250 Mhz 5 Gbit",
                                "img" : "PND.jpg",
                                "referencia" : "PA24U605",
                                "pvp_real" : "35.05",
                                "pvp_desc" : "19.70"
                            },
                            {
                                "id" : "1",
                                "nombre" : "Módulo H RJ45 UTP Cat. 6 180º 250 Mhz 1 Gbit Tipo 3M",
                                "img" : "PND.jpg",
                                "referencia" : "CNH6R1",
                                "pvp_real" : "2.05",
                                "pvp_desc" : "1.35"
                            }
                            
                        ]';

        // Convert JSON string to Array
        $familias = json_decode($familiaJSON, true);
        $ofertas = json_decode($ofertasJSON, true);
        
        
        return view('inicio.index',compact('familias','ofertas'));
    }     
}
