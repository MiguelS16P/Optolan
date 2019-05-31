<div class="container-fluid borde-inferior">
	<div class="container">
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item mr-auto d-none d-sm-block">
		    	<a class="nav-link disabled">
		    		 <i class="fas fa-phone"></i> 981 13 86 83   
		    	</a>
		  	</li>  
		  	<li class="nav-item d-none d-sm-block">
		    	<a class="nav-link disabled">
		    		<i class="fas fa-envelope"></i> info@optolan.es
		    	</a>
		  	</li>
		  	<li class="nav-item d-none d-sm-block">		  		
		    	<a class="redes-sociales" href="#">
		    		<i class="fab fa-linkedin"></i>
		    	</a>	    	
		    	<a class="redes-sociales" href="#">
		    		<i class="fab fa-youtube"></i>
		    	</a>	
		    	<a class="redes-sociales" href="#">
		    		<i class="fab fa-instagram"></i>
		    	</a>	
		    	<a class="redes-sociales" href="#">
		    		<i class="fab fa-facebook-square"></i>
		    	</a>
			  </li>

			  <li class="navbar navbar-expand-md navbar-light navbar-laravel p-0">
					<ul class="navbar-nav ml-auto">					  
						  <!-- Authentication Links -->
						  @guest
							  <li class="nav-item">
								  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							  </li>
							  @if (Route::has('register'))
									<li class="nav-item">
									  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
								  	</li>
							  @endif
						  @else
							  	<li class="nav-item dropdown">
								  	<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										<i class="fas fa-user-circle"></i>
										Hola, {{ Auth::user()->name }} <span class="caret"></span>
								  	</a>
	  
								  	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									  	<a class="dropdown-item" href="{{ route('logout') }}"
										 	onclick="event.preventDefault();
											   document.getElementById('logout-form').submit();">
										  	{{ __('Cerrar sesión') }}
									  	</a>
	  
									  	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
									  	</form>
								  	</div>
							  	</li>
						  @endguest
					  
					</ul>
				</li>


















			
			<li class="nav-item mr-auto d-block d-sm-none">
		    	<a class="nav-link disabled">
		    		<button type="button" class="btn btn-success btn-sm">
		    			<i class="fas fa-phone"></i> Llamanos
		    		</button>
		    	</a>
		  	</li>  

		  	<li class="nav-item mr-auto d-block d-sm-none">
		    	<a class="nav-link disabled">
		    		<button type="button" class="btn btn-info btn-sm">
		    			<i class="fas fa-envelope"></i> Escribenos
		    		</button>
		    	</a>
			  </li>  
			  
			  
		</ul>
	</div>	
</div>

