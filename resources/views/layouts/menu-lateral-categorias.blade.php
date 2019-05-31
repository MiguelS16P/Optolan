
<nav class="sidebar sidebar-offcanvas mt-3" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset("images/face1.jpg")}}" alt="profile">
                    <span class="login-status online"></span> <!--change to offline or busy as needed-->              
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2 w-space-nowrap">Agente Comercial</span>
                    <span class="text-secondary text-small w-space-nowrap">Optolan Technology</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>

        <li class="nav-item border-bottom">
            <a class="nav-link " href="{{url('/')}}">
                <span class="menu-title">INICIO</span>
                <i class="fas fa-home ml-auto"></i>
            </a>
        </li>

    <!--EL MARGEN CAMBIA-->
    <!-- URL de Categorias-->
    @isset($familias)
        @foreach ($familias as $familia)
        @php $active = ''; @endphp   
        @if ($familia->claparent == 0 && $familia->grupo == 'FALSO')
            @isset($familia_actual)
                @if ($familia->id == $familia_actual->id)
                    @php
                        $active = 'active';
                    @endphp      
                @endif
            @endisset
                        
            <li class="nav-item border-bottom {{$active}}">
                <a class="nav-link " href="{{url($familia->url.'/articulos')}}">
                    <span class="menu-title">
                        {{$familia->nomfam}}
                    </span>                
                </a>
            </li>

        @elseif($familia->claparent == 0 && $familia->grupo == 'VERDADERO')

            <li class="nav-item border-bottom {{$active}}">
                <a class="nav-link" data-toggle="collapse" href="#{{$familia->nomfam}}" aria-expanded="false" aria-controls="{{$familia->nomfam}}">
                    <span class="menu-title">
                        {{$familia->nomfam}}
                    </span> 
                    <i class="fa fa-angle-left ml-auto"></i>
                    <i class="fas fa-list ml-2"></i>               
                </a>

                <!-- Mostrar Categorias-->
                @php $categorias = App\Familia::get_cat($familia->id); @endphp

                <div class="collapse" id="{{$familia->nomfam}}">
                    <ul class="nav flex-column sub-menu">
                        @foreach ($categorias as $categoria)
                            <li class="nav-item">
                            @if ($categoria->grupo == 'VERDADERO')
                                <a class="nav-link p-0 pl-0 pb-2 pt-2" href="{{url($categoria->url.'/categorias')}}">
                            @else
                                <a class="nav-link p-0 pl-0 pb-2 pt-2" href="{{url($categoria->url.'/articulos')}}">
                            @endif
                                
                                    <i class="fas fa-angle-double-right"></i>    
                                    <span class="pl-3 line-heing-1-5">
                                        {{$categoria->nomfam}}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

        @endif       

        @endforeach
    @endisset
   
    <!-- url de articulos-->
    @isset($familia_actual)
        @if ($familia_actual->grupo== 'VERDADERO')
            <li class="nav-item border-bottom active">
                <a class="nav-link" data-toggle="collapse" href="#{{$familia_actual->nomfam}}" aria-expanded="false" aria-controls="{{$familia_actual->nomfam}}">
                    <span class="menu-title">
                        {{$familia_actual->nomfam}}
                    </span> 
                    <i class="fas fa-angle-down ml-auto"></i>
                    <i class="fas fa-list ml-2"></i>               
                </a>
                <div class="collapse show" id="{{$familia_actual->nomfam}}">
                    <ul class="nav flex-column sub-menu">
                        @foreach ($familias as $familia)
                            <li class="nav-item">
                                @if ($familia->grupo == 'VERDADERO')
                                <a class="nav-link p-0 pl-0 pb-2 pt-2" href="{{url($familia->url.'/categorias')}}">
                                @else
                                <a class="nav-link p-0 pl-0 pb-2 pt-2" href="{{url($familia->url.'/articulos')}}">
                                @endif

                                    <i class="fas fa-angle-double-right"></i>    
                                    <span class="pl-3 line-heing-1-5">
                                        {{$familia->nomfam}}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>   
        
        @else
            <li class="nav-item border-bottom active">
                <a class="nav-link" href="{{url($familia_actual->url.'/articulos')}}">
                    <span class="menu-title">{{$familia_actual->nomfam}}</span>
                </a>
            </li>

        @endif
         
        @php            
            $familias_padre = App\Familia::get_familias_padre();
        @endphp

        @foreach ($familias_padre as $familia_padre)
            @if ($familia_padre->id != $familia_actual->id)
                <li class="nav-item border-bottom">
                @if ($familia_padre->grupo == 'VERDADERO')
                    <a class="nav-link" href="{{url($familia_padre->url.'/categorias')}}">
                @else
                    <a class="nav-link" href="{{url($familia_padre->url.'/articulos')}}">
                @endif                    
                        <span class="menu-title">
                            {{$familia_padre->nomfam}}
                            
                        </span>
                    </a>
                </li>
            @endif                
        @endforeach

          
    @endisset




    </ul>
</nav>
    
