<div class="container-fluid mt-3 pb-5">
    <form method="POST" action="/articulos/{{$articulo->id}}" enctype="multipart/form-data">
        <div class="row">
            <!--Titulo -->
            <div class="col-12 mb-2 text-center pb-3">            
                <h2 class="bd-title">
                    {{$articulo->nombre}}
                </h2> 
                <p class="subtitle">                
                    artículos al por mayor en Galicia
                </p>  
                <hr>         
            </div>                         
            
            <div class="col-4 align-items-center">
                <img src="{{url('/images/articulos/'.$articulo->imagen)}}" alt="{{$articulo->imagen}}" class="border w-100">
                <div class="form-group mt-2">                    
                    <input type="file" class="form-control-file" id="imagen" name="imagen">
                </div>
            </div>        
            
            <input type="hidden" name="_method" value="PUT">
            @csrf

            <div class="col-8">    
                <p class="subtitle pb-4">                
                    Caracteristicas
                </p> 
    
                <table class="table table-striped">
                    <tbody>

                        <tr>
                            <th class="text-uppercase font-weight-normal border-0">
                                <label for="nombre">Nombre</label>
                            </th>
                            <td class="text-muted border-0">                                
                                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" value="{{$articulo->nombre}}">
                            </td>
                        </tr>

                        <tr>
                            <th class="text-uppercase font-weight-normal">
                                Referencia
                            </th>
                            <td class="text-muted">
                                <span class="badge badge-ref">
                                    {{$articulo->codigo}}
                                </span>
                            </td>    
                        </tr>

                        <tr>
                            <th class="text-uppercase font-weight-normal">
                                <label for="pdf">F. Tecnica</label>
                            </th>
                            <td class="text-muted">    
                                <p class="mb-2">
                                    <i class="far fa-file-pdf size-20 bg-pdf"></i> {{$articulo->ficha_tecnica}} 
                                </p>                             
                                <input type="file" class="form-control-file" id="ficha_tecnica" name="ficha_tecnica">                                          
                            </td>                        
                        </tr>

                        <tr>
                            <th class="text-uppercase font-weight-normal">
                                Colores
                            </th>
                            <td class="text-muted">
                                - 
                            </td>
                        </tr>

                        <tr>
                            <th class="text-uppercase font-weight-normal">
                                <label for="Baja">Baja</label>
                            </th>                           
                            <td class="text-uppercase font-weight-normal">                                                                
                                <select class="form-control" id="baja" name="baja">
                                    <option hidden value="{{$articulo->baja}}">{{$articulo->baja}}</option>
                                    <option value="VERDADERO" >VERDADERO</option>
                                    <option value="FALSO">FALSO</option>                                    
                                </select>
                            </td>                            
                        </tr>

                        <tr>
                            <th class="text-uppercase font-weight-normal">
                                <label for="PrecioOferta">Precio oferta</label>
                            </th>
                            <td>  
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">€</span>
                                    </div>
                                    <input type="text" class="form-control" value="{{$articulo->pvpoferta}}" name="pvpoferta">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>                                
                            </td>
                        </tr>

                        <tr>                            
                            <th class="text-uppercase font-weight-normal">
                                <label for="EnOferta">En oferta</label>
                            </th>
                            <td>                           
                                <select class="form-control" id="EnOferta" name="oferta">
                                    <option hidden value="{{$articulo->oferta}}">{{$articulo->oferta}}</option>
                                    <option value="1">VERDADERO</option>
                                    <option value="0">FALSO</option>                                    
                                </select>
                            </td>                            
                        </tr>

                        <tr class="border-bottom">
                            <th class="text-uppercase font-weight-normal">
                                <label for="PrecioOferta">
                                    Familia
                                    <br>
                                    <small>( {{$articulo->familia->nomfam}} )</small>
                                </label>                                               
                            </th>
                            <td>                                  
                                <select class="custom-select" size="5" name="familia_id">                                    
                                    <option value="{{$articulo->familia->id}}" selected>
                                        {{$articulo->familia->nomfam}}
                                    </option>

                                @foreach ($familias as $familia)
                                    <option value="{{$familia->id}} ">
                                        {{$familia->nomfam}}    
                                    </option>                                                                 
                                @endforeach                                  
                                    
                                </select>                               
                            </td>                            
                        </tr>

                    </tbody>
                </table>
    
                <p class="subtitle pt-2 pb-3">                
                    Descripción
                </p>  
                <p>
                    <textarea class="form-control" id="descripcion" rows="5" name="descripcion">{{$articulo->descripcion}}</textarea>
                </p>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>        
        </div>

    </form>
</div>