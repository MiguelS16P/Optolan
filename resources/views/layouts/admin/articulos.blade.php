<div class="container-fluid mt-3">
        <div class="row">
            <!--Titulo -->
            <div class="col-12 mb-2 text-center">            
                <h2 class="bd-title">
                    Total {{$articulos->total()}} Ariculos    
                    <small>
                        <i class="fas fa-shopping-cart c2-optolan"></i>
                    </small> 
                </h2> 
                <p class="subtitle">
                    Articulos no dados de baja
                </p>           
            </div>
             <div class="col-12">
                <table class="table table-striped">                  
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codigo</th>                     
                            <th scope="col">Nombre</th>
                            <th scope="col">Información</th>
                            <th scope="col">Familia</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                        <th scope="row">{{$articulo->id}}</th>
                            <td>{{$articulo->codigo}}</td>  
                            <td>                                
                                {{$articulo->nombre}}                                
                            </td>                          
                            <td>
                                <i class="far fa-file-image bg-img size-20"></i>
                            @if ($articulo->imagen == 'PND.jpg')
                                <i class="fas fa-times cross mr-3"></i>
                            @else
                                <i class="fas fa-check check mr-3"></i>
                            @endif
                                

                                <i class="far fa-file-pdf size-20 bg-pdf"></i>
                            @if ($articulo->ficha_tecnica == 'NO DISPONIBLE')
                                <i class="fas fa-times cross mr-3"></i>
                            @else
                                <i class="fas fa-check check mr-3"></i>
                            @endif                               
                            </td>

                            <td>{{$articulo->familia->nomfam}}</td>
                            
                            <td class="text-center">
                                <a href="{{url('articulos/'.$articulo->id)}}" title="Ver Articulo">                                        
                                    <i class="far fa-eye size-20 mr-3 color-ver"></i>
                                </a>
                                <a href="{{url('articulos/'.$articulo->id.'/edit')}}" title="Editar Articulo">                                
                                    <i class="fas fa-pencil-alt size-20 mr-3 color-edit"></i>
                                </a>
                                <a href="#" title="Borrar Articulo">   
                                    <i class="fas fa-trash-alt size-20 mr-3 color-borrar"></i>
                                </a>
                                <a href="#" title="Baja Articulo">   
                                    <i class="fas fa-ban size-20 mr-3 color-baja"></i>
                                </a>                                    
                                <a href="#" title="Agrupar Articulo">   
                                    <i class="fas fa-project-diagram size-20 color-agrupar"></i>
                                </a>                                
                            </td>
                        </tr>                        
                    @endforeach    
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                {{$articulos->appends("buscar",$cad_buscada)->links() }}
            </div>
        </div>
</div>

