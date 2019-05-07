@extends("layouts.inicio")

@section("cabecera")
	@include("layouts/carusel-inicio")

@endsection

@section("cuerpo")
	@include("layouts/carusel-articulos")
	@include("layouts/familias")
	@include("layouts/newsletter")
	@include("layouts/carusel-certificados")
	
@endsection