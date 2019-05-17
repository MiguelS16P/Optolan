<div class="container-fluid mt-4">
	<!-- Titulo -->
	<div class="row mb-4">
		<div class="col-md-12 text-center">
			<p class="subtitle">
				Nuestras categorías mas destacadas
			</p>
			<h2 class="bd-title">
				{{$nombre_fam}}
				<small>
					<i class="fas fa-stream c2-optolan"></i>
				</small> 
			</h2>
		</div>
	</div>
	
	<!-- Familias -->
	<div class="row"> 
		@foreach ($familias as $familia)
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 pb-3">
			@if ($familia->grupo == 'VERDADERO')
				<a href="{{asset($familia->url).'/categorias'}}" class="text-decoration-none">
			@else
				<a href="{{asset($familia->url.'/articulos')}}" class="text-decoration-none">		
			@endif

					<div class="img-familia">
					<img src="{{asset('images/familias/'.$familia->imagen)}}" class="img-fluid rounded-circle img-thumbnail" alt="">
					</div>
					<div class="text-familia text-center my-3">
						<h6 class="subtitle">
							{{$familia->nomfam}}						
						</h6>
					</div>	
				</a>				
			</div>
		@endforeach
	</div>
</div>