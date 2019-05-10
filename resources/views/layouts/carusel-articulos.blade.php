<div class="container-fluid bg-gris py-5">
	<div class="container">
		<!--Titulo carusel-->
		<div class="row mb-4 ">
			<div class="col-md-8">
				<p class="subtitle">
					¡Date prisa, que la oferta se termina!
				</p>
				<h2 class="bd-title">
					Productos en oferta 
					<small>
						<i class="fas fa-gift c2-optolan"></i>
					</small> 
				</h2>
			</div>
			<div class="col-md-4 d-lg-flex align-items-end justify-content-end">
				<a href="category.html" class="text-muted text-sm link">               
              		Ver todas las ofertas <i class="fas fa-angle-double-right ml-2"></i>
              	</a>
			</div>
		</div><!--FIN Titulo carusel-->		

		<!--Todos los Item-->
	    <div class="row my-auto">
	        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
	            <div class="carousel-inner w-100" role="listbox">	                
					<!--Pinta Todos los Item-->						
					@php $active = 'active'; @endphp
					@foreach ($ofertas as $key => $value)
						<div class="carousel-item {{$active}}">
							<div class="col-12 col-md-3">
								<a href="#" class="text-decoration-none">
									<div class="card">
										<div class="card-imagen">
											<img src="images/articulos/{{$value['img']}}"  alt="...">
										</div>							 	
										<div class="card-body text-center">
											<h5 class="card-title min-height-card">
												{{$value['nombre']}}
											</h5>
											<button class="btn btn-outline-card pt-0 pb-0">
												Visita este articulo
											</button>
											<hr class="my-2">
											<h6>
												Referencia: <span class="badge badge-ref">{{$value['referencia']}}</span>
											</h6>	
											<div class="pro-price">
												<span class="current-price">{{$value['pvp_real']}} € <small>und.</small> </span> <br>
												<del class="origin-price">{{$value['pvp_desc']}} € <small>und.</small></del>
											</div>					    	
										</div>							  	
									</div>
								</a>								
							</div>
						</div>		
						@php $active = ''; 	@endphp
					@endforeach	<!-- Fin Pinta Todos los Item-->
				</div>

	            <div class="container">
	        		<div class="row">
	          			<div class="col-12 text-right my-2">
			            	<a class="btn btn-outline-find mx-1 prev" href="#recipeCarousel" role="button" data-slide="prev">
				             	<i class="fa fa-lg fa-chevron-left"></i>
				            </a>

				            <a class="btn btn-outline-find mx-1 next" href="#recipeCarousel" role="button" data-slide="next">
				              	<i class="fa fa-lg fa-chevron-right"></i>
				            </a>
			            	
			           	</div>
			        </div>
			    </div>
	        </div>
	    </div><!--FIN Todos los Item-->
	</div>
</div>