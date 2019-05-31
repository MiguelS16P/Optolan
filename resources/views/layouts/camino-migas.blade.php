<nav aria-label="breadcrumb">
    <ol class="breadcrumb  bg-gris">

        <li class="breadcrumb-item">
            <a href="{{url('/')}}" class="text-decoration-none link-camino-migas">
                INICIO
            </a>
        </li>        

    @if (isset($familia_actual))

        <li class="breadcrumb-item">
            <a href="{{url('/nuestros-productos')}}" class="text-decoration-none link-camino-migas">
                FAMILIAS
            </a>
        </li> 

        @if ($familia_actual->claparent != 0 )
            
            @php $padre = App\Familia::get_padre($familia_actual->claparent);  @endphp

            @if ($padre->claparent != 0 )

                @php $padre2 = App\Familia::get_padre($padre->claparent);  @endphp

                    <li class="breadcrumb-item active" aria-current="page">   
                    @if ($padre2->grupo == 'VERDADERO')
                        <a href="{{url($padre2->url.'\categorias')}}" class="text-decoration-none link-camino-migas">
                    @else
                        <a href="{{url($padre2->url.'\articulos')}}" class="text-decoration-none link-camino-migas">
                    @endif                        
                            {{$padre2->nomfam}}
                        </a>
                    </li>
            @endif

            <li class="breadcrumb-item active" aria-current="page"> 
                @if ($padre->grupo == 'VERDADERO')
                <a href="{{url($padre->url.'\categorias')}}" class="text-decoration-none link-camino-migas">
                @else
                <a href="{{url($padre->url.'\articulos')}}" class="text-decoration-none link-camino-migas">
                @endif                          
                    {{$padre->nomfam}}
                </a>
            </li>

        @endif 

        
        @if (isset($articulo))
        
            <li class="breadcrumb-item active" aria-current="page">   
                <a href="{{url($familia_actual->url.'\articulos')}}" class="text-decoration-none link-camino-migas">
                    {{$familia_actual->nomfam}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">   
                {{$articulo->nombre}}
            </li>
        @else
            <li class="breadcrumb-item active" aria-current="page">   
                {{$familia_actual->nomfam}}
            </li>
        @endif
        
    @else

        <li class="breadcrumb-item">
            FAMILIAS
        </li>

    @endif 

    </ol>
</nav>