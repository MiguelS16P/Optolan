<div class="container-fluid mt-3 pb-5">
    <div class="row">
        <!--Titulo -->
        <div class="col-12 mb-2 text-center pb-3">            
            <h2 class="bd-title">
                {{$articulo->nombre}}
            </h2> 
            <p class="subtitle">                
                artículos al por mayor en Galicia
            </p>  
            <hr>         
        </div>
        <div class="col-4">
            <img src="{{url('/images/articulos/'.$articulo->imagen)}}" alt="{{$articulo->nombre}}" class="border w-100">
        </div>        

        <div class="col-8">

            <p class="subtitle pb-4">                
                Caracteristicas
            </p> 

            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th class="text-uppercase font-weight-normal border-0">Nombre</th>
                        <td class="text-muted border-0">{{$articulo->nombre}}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase font-weight-normal">
                            Referencia
                        </th>
                        <td class="text-muted">
                            <span class="badge badge-ref">
                                {{$articulo->codigo}}
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <th class="text-uppercase font-weight-normal">F. Tecnica</th>
                    @if ($articulo->ficha_tecnica == 'NO DISPONIBLE')
                        <td class="text-muted"> 
                            <i class="far fa-file-pdf size-20 bg-pdf"></i> NO DISPONIBLE               
                        </td>
                    @else
                        <td class="text-muted"> 
                            <a href="{{asset('pdf/articulos/'.$articulo->ficha_tecnica)}}" class="text-decoration-none" target="_black">                                
                                <i class="far fa-file-pdf size-20 bg-pdf"></i> {{$articulo->ficha_tecnica}}      
                            </a>         
                        </td>
                    @endif
                    </tr>
                    <tr class=" border-bottom">
                        <th class="text-uppercase font-weight-normal">Colores</th>
                        <td class="text-muted"> - </td>
                    </tr>
                </tbody>
            </table>

            <p class="subtitle pt-2 pb-3">                
                Descripción
            </p>  
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit officia ipsam sequi 
                similique repellendus explicabo omnis voluptate ipsa numquam vitae optio mollitia, 
                facilis quo itaque quasi non enim quia! Voluptatem!
            </p>
        </div>        
    </div>
</div>