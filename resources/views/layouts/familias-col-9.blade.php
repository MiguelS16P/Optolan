@php $nombre_famlia_actual = 'NUESTROS PRODUCTOS'; @endphp

<div class="container-fluid mt-4">
	<!-- Titulo -->
	<div class="row mb-4">
		<div class="col-md-12 text-center">
			<p class="subtitle">
				Nuestras categorías mas destacadas
			</p>
			<h2 class="bd-title">
				@isset($familia_actual)
					@php $nombre_famlia_actual = $familia_actual->nomfam; @endphp
				@endisset
					{{$nombre_famlia_actual}}
					
				<small>
					<i class="fas fa-stream c2-optolan"></i>
				</small> 
			</h2>
		</div>
	</div>
	
	<!-- Familias -->
	<div class="row"> 
		@foreach ($familias as $familia)
			
			@if ($familia->claparent == 0 && !isset($familia_actual))

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

			@endif

			@isset($familia_actual)
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
			@endisset			
			
		@endforeach
	</div>
</div>