<nav class="sidebar sidebar-offcanvas mt-3 w-100" id="sidebar">
        <ul class="nav">                
            <li class="nav-item border-bottom">
                <a class="nav-link " href="#">
                    <span class="menu-title">INICIO</span>
                    <i class="fas fa-home ml-auto"></i>
                </a>
            </li>
            
            <li class="nav-item border-bottom">
                <a class="nav-link collapsed" data-toggle="collapse" href="#IDEAL" aria-expanded="false" aria-controls="IDEAL">
                    <span class="menu-title">
                        ARTICULOS 
                    </span>               
                    <i class="fa fa-angle-left ml-auto"></i>
                    <i class="fas fa-list ml-2"></i>
                </a> 

                <div class="collapse" id="IDEAL" style="">
                    <ul class="nav flex-column sub-menu">                        
                        <li class="nav-item">                                  
                            <a class="nav-link pl-0" href="{{url('/articulos')}}">
                                <i class="fas fa-angle-double-right"></i>                           
                                <span class="pl-3">
                                    Listar                                        
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>

</nav>