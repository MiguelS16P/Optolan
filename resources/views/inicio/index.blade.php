@extends("template.home")
	@section('title','mi tituloooo')
	
@section("cabecera")

@endsection

@section("cuerpo")
	@include("layouts.carusel-inicio")
	@include("layouts.carusel-articulos")
	@include("layouts.familias")
		
	@include("layouts.newsletter")
    @include("layouts.carusel-certificados")    
   
	
@endsection

@section("pie")
@endsection