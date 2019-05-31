@extends('template.perfil')

@section('menu-lateral')
        @include('layouts.menu-lateral-categorias')
@endsection

@section('cuerpo')
    @include('layouts.articulo.ver-articulo')   
    
@endsection

@section('oferta')
    @include("layouts.carusel-articulos")
    
@endsection