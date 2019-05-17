<div class="container-fluid mt-3">
    <div class="row">
        <!--Titulo -->
        <div class="col-12 mb-2 text-center">            
            <h2 class="bd-title">
                {{$nombre_fam}}
                <small>
                    <i class="fas fa-shopping-cart c2-optolan"></i>
                </small> 
            </h2> 
            <p class="subtitle">
                Nuestras artículos mas destacadas
            </p>           
        </div>
        <!-- Fin Titulo -->
        <div class="col-12">
            {!!$articulos->links()!!}
        </div>
        
    @foreach ($articulos as $articulo)
        <!-- Muestra los articulos -->
        <div class="col-12 col-md-4 mb-3 ">
            <a href="#" class="text-decoration-none">
                <div class="card">
                    <div class="card-imagen">
                        <img src="{{asset('images/articulos/'.$articulo->imagen)}}"  alt="...">
                    </div>							 	
                    <div class="card-body text-center">
                        <h5 class="card-title min-height-card">
                            {{$articulo->nombre}}
                        </h5>
                        <button class="btn btn-outline-card pt-0 pb-0">
                            Visita este articulo
                        </button>
                        <hr class="my-3">
                        <h6>
                            Referencia: <span class="badge badge-ref">{{$articulo->codigo}}</span>
                        </h6>		  	
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <div class="col-12">
                                <i class="far fa-file-pdf bg-pdf"></i>
                                <small class="py-1">
                                    Ficha Tecnica
                                </small> 
                            </div>
                        </div>                        
                    </div>
                </div>
            </a>								
        </div>
        <!-- Fin Muestra los articulos -->
    @endforeach
    </div>
    
    
    
</div>
