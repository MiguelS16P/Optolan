<div class="container-fluid py-5">
	<div class="container">
		<!-- Titulo -->
		<div class="row mb-4">
			<div class="col-md-8">
				<p class="subtitle">
					Nuestras categorías mas destacadas
				</p>
				<h2 class="bd-title">
					Nuestros productos
					<small>
						<i class="fas fa-stream c2-optolan"></i>
					</small> 
				</h2>
			</div>
			<div class="col-md-4 d-lg-flex align-familias-end justify-content-end">
				<a href="category.html" class="text-muted text-sm link">               
              		Ver todas las categorías <i class="fas fa-angle-double-right ml-2"></i>
              	</a>
			</div>
		</div>
		
		<!-- Familias -->
		<div class="row"> 
			@foreach ($familias as $familia)
				<div class="col-6 col-sm-6 col-md-3 col-lg-2 pb-3">
					@if ($familia->grupo == 'FALSO')
						<a href="{{$familia->url}}/articulos" class="text-decoration-none">					
					@else
						<a href="{{$familia->url}}/categorias" class="text-decoration-none">		
					@endif
					
						<div class="img-familia">
						<img src="images/familias/{{$familia->imagen}}" class="img-fluid rounded-circle img-thumbnail" alt="">
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
</div>