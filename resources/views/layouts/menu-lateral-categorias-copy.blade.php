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
            <a class="nav-link " href="#">
                <span class="menu-title">INICIO</span>
                <i class="fas fa-home ml-auto"></i>
            </a>
        </li>
        
        @foreach ($familiasAll as $item_fam)     
            <!-- Varible cerrojo -->
            @php $cerrojo = 'cerrado'; @endphp  

            @if ($item_fam->grupo == 'FALSO' && $item_fam->claparent == 0)
                <!-- Muestra las Familias sin Sub-Categorias --> 
                @if($familia === false)
                    <li class="nav-item border-bottom">
                @elseif ($item_fam->nomfam == $familia->nomfam )
                    <li class="nav-item border-bottom active">
                @else
                    <li class="nav-item border-bottom">
                @endif
                
                        <a class="nav-link" href="{{asset($item_fam->url.'/articulos')}}">
                            <span class="menu-title">
                                {{$item_fam->nomfam}} 
                            </span>
                        </a>
                    </li>
                <!-- FIN Muestra las Familias sin Sub-Categorias -->

            @elseif($item_fam->grupo == 'VERDADERO' && $item_fam->claparent == 0)
                <!-- Muestra las Familias con Sub-Categorias -->
                @if($familia === false)
                    <li class="nav-item border-bottom">
                @elseif($item_fam->nomfam == $familia->nomfam)
                    <li class="nav-item border-bottom active">
                        <a class="nav-link" data-toggle="collapse" href="#{{$item_fam->nomfam}}" aria-expanded="true" aria-controls="{{$item_fam->nomfam}}">
                                <span class="menu-title">
                                        {{$item_fam->nomfam}} 
                                    </span>               
                                    <i class="fa fa-angle-left ml-auto"></i>
                                    <i class="fas fa-list ml-2"></i>
                                </a> 
                                <!-- FIN Muestra las Familias con Sub-Categorias -->
        
                                <!-- Abre el Sub Menu -->
                                <div class="collapse show" id="{{$item_fam->nomfam}}">
                                    <ul class="nav flex-column sub-menu">     
                                        @php
                                            $cerrojo = 'abierto';
                                        @endphp   
                @else
                    <li class="nav-item border-bottom">
                        <a class="nav-link" data-toggle="collapse" href="#{{$item_fam->nomfam}}" aria-expanded="false" aria-controls="{{$item_fam->nomfam}}">
                                <span class="menu-title">
                                        {{$item_fam->nomfam}} 
                                    </span>               
                                    <i class="fa fa-angle-left ml-auto"></i>
                                    <i class="fas fa-list ml-2"></i>
                                </a> 
                                <!-- FIN Muestra las Familias con Sub-Categorias -->
        
                                <!-- Abre el Sub Menu -->
                                <div class="collapse " id="{{$item_fam->nomfam}}">
                                    <ul class="nav flex-column sub-menu">     
                                        @php
                                            $cerrojo = 'abierto';
                                        @endphp   
                @endif
                        
                            
            @endif     
               
            @foreach ($familiasAll as $item_cat) 
                @if ($item_cat->claparent == $item_fam->id && $item_fam->claparent == 0 )   

                                <!-- Muetra nombre de las Sub-categorias -->                     
                                <li class="nav-item active">  
                                    
                                @if($item_cat->grupo == 'VERDADERO')
                                    @if($categoria === false)
                                        <a class="nav-link pl-0" href="{{asset($item_cat->url.'/categorias')}}">
                                    @elseif ($item_cat->nomfam == $categoria->nomfam)
                                        <a class="nav-link pl-0 active" href="{{asset($item_cat->url.'/categorias')}}">
                                    @else
                                        <a class="nav-link pl-0" href="{{asset($item_cat->url.'/categorias')}}">
                                    @endif                            
                                @else
                                    <a class="nav-link pl-0" href="{{asset($item_cat->url.'/articulos')}}">            
                                @endif                                
                                        <i class="fas fa-angle-double-right"></i>    
                                        <span class="pl-3 line-heing-1-5">
                                            {{$item_cat->nomfam}}                                     
                                        </span>
                                    </a>
                                </li>  
                                <!-- FIN Muetra nombre de las Sub-categorias -->         
                @endif 
            @endforeach  
                @if ($cerrojo=='abierto')
                        </ul>
                    </div>
                </li><!-- Cierra el Sub Menu -->
                @endif            
        @endforeach             
    </ul>
</nav>
