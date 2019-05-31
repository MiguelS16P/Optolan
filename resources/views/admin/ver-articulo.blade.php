@extends('layouts.app')

@section('menu-lateral')
    @include('layouts.admin.menu-lateral')
@endsection

@section('acciones')
    @include('layouts.admin.acciones')    
@endsection

@section('cuerpo')
    @include('layouts.articulo.ver-articulo')
@endsection