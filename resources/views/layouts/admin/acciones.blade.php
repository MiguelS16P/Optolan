<div class="container-fluid border-bottom py-2">
    
        <ul class="nav nav-pills nav-fill">
            
            <li class="nav-item d-none d-sm-block text-left">                
                <a href="{{url('articulos/create')}}">                     
                    <button type="button" class="btn btn-outline-info">
                            <i class="fas fa-plus"></i> Añadir    
                    </button>      
                </a>  

            @if (isset($articulo))

                <a href="{{url('articulos/'.$articulo->id.'/edit')}}">
                    <button type="button" class="btn btn-outline-warning">
                        <i class="fas fa-pencil-alt"></i> Editar
                    </button>        
                </a> 

            @else

                <a href="#">
                    <button type="button" class="btn btn-outline-warning">
                        <i class="fas fa-pencil-alt"></i> Editar
                    </button>        
                </a>  

            @endif          
                
            </li>

           

            <li class="nav-item d-none d-sm-block">
            <form method="GET" action="/articulos" class="form-inline justify-content-end">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </li>
        </ul>
</div>