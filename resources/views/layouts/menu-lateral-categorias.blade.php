
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="images/face1.jpg" alt="profile">
                    <span class="login-status online"></span> <!--change to offline or busy as needed-->              
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Agente Comercial</span>
                    <span class="text-secondary text-small">Optolan Technology</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>

        <li class="nav-item border-bottom">
            <a class="nav-link" href="#">
                <span class="menu-title">INICIO</span>
                <i class="fas fa-home ml-auto"></i>
            </a>
        </li>
        
        @foreach ($familiasAll as $item=>$fam)     
            <!-- Varible cerrojo -->
            @php $cerrojo = 'cerrado'; @endphp  

            @if ($fam['grupo'] == 'falso' && $fam['parent'] == 0)
                <!-- Muestra las Familias sin Sub-Categorias -->
                <li class="nav-item border-bottom">
                    <a class="nav-link" href="#">
                        <span class="menu-title">
                            {{$fam['nombre']}} 
                        </span>
                    </a>
                </li>
                <!-- FIN Muestra las Familias sin Sub-Categorias -->

            @elseif($fam['grupo'] == 'verdadero')
                <!-- Muestra las Familias con Sub-Categorias -->
                <li class="nav-item border-bottom">
                    <a class="nav-link" data-toggle="collapse" href="#{{$fam['nombre']}}" aria-expanded="false" aria-controls="{{$fam['nombre']}}">
                        <span class="menu-title">
                            {{$fam['nombre']}}
                        </span>               
                        <i class="fa fa-angle-left ml-auto"></i>
                        <i class="fas fa-list ml-2"></i>
                    </a> 
                    <!-- FIN Muestra las Familias con Sub-Categorias -->

                    <!-- Abre el Sub Menu -->
                    <div class="collapse " id="{{$fam['nombre']}}">
                        <ul class="nav flex-column sub-menu">     
                            @php
                                $cerrojo = 'abierto';
                            @endphp   
            @endif     
               
            @foreach ($familiasAll as $item=>$cat) 
                @if ($cat['parent'] == $fam['id'])   

                            <!-- Muetra nombre de las Sub-categorias -->                     
                            <li class="nav-item">                                
                                <a class="nav-link pl-0" href="#">
                                    <i class="fas fa-angle-double-right"></i>    
                                    <span class="pl-3">
                                            {{$cat['nombre']}}
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
        
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>                
                </div>
                
            </span>
        </li>
    </ul>
</nav>
