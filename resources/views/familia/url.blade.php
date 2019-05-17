@extends('template.navegacion')

@section('cuerpo')
    
    <div class="container">
        @foreach ($articulos as $item)  
            
            <p>                
                {{$item->nombre}} - {{$item->url_familia}}
            </p>

        @endforeach


    </div>
    
@endsection