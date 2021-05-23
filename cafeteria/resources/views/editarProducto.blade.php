@extends('dashboard')
@section('containerDinamic')
<h1 class="text-center mt-lg-5 mb-lg-5 mt-3 mb-5">Editar Producto</h1>
@if ( session('mensaje') )
    <div class="alert alert-success text-center text-uppercase w-50 mx-auto py-4 mb-lg-5">{{ session('mensaje') }}</div>
@endif

<div class="container mb-lg-5 mb-4">
    <div class="card mb-lg-5 mb-4">
        <form class="mb-lg-5 mb-4 p-lg-5 p-4" method="POST" action="{{route ('create-product')}}">

            @csrf

            <div class="input-group mb-3">                
                <input type="text" class="form-control" placeholder="Nombre producto" id="nombre" name="nombre" aria-label="Nombre producto" aria-describedby="basic-addon1" value="{{$datosProductos->nombre}}">
            </div>
            <br>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion producto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="descripcion" name="descripcion">{{$datosProductos->descripcion}}</textarea>
            </div>
            <br>
            
            <div class="input-group mb-3">
                <select class="custom-select" id="estado" name="estado">
                    @if(strcmp($datosProductos->estado,'descuento'))
                        <option value="{{$datosProductos->estado}}" selected>{{$datosProductos->estado}}</option>                        
                        <option value="promocion">promoción</option>
                        <option value="agotados">agotados</option> 

                    @elseif(strcmp($datosProductos->estado,'promocion')) 
                        <option value="{{$datosProductos->estado}}" selected>{{$datosProductos->estado}}</option>
                        <option value="descuentro">descuentro</option>                        
                        <option value="agotados">agotados</option>

                    @elseif(strcmp($datosProductos->estado,'agotados')) 
                        <option value="{{$datosProductos->estado}}" selected>{{$datosProductos->estado}}</option>
                        <option value="descuentro">descuentro</option>
                        <option value="promocion">promoción</option>
                    @endif                                                                                                                     
                </select>
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">€</span>
                    <span class="input-group-text">8.2</span>
                </div>
                <input type="text" class="form-control" id="precio" name="precio" aria-label="Amount (to the nearest dollar)" value="{{$datosProductos->precio}}">
            </div>
            <br>
            
            <div class="input-group mb-3">
                <select class="custom-select" id="categoria" name="categoria">
                @if ($categorias)
                    @foreach($categorias as $cat)
                        @if ($datosProductos->categoria_id == $cat['id'])
                            <option value="{{$cat['id']}}" selected>{{$cat['nombre']}}</option>
                        @else
                            <option value="{{$cat['id']}}">{{$cat['nombre']}}</option>
                        @endif                
                    @endforeach
                @endif                                                                               
                </select>
            </div>
            <br>
                        
            <div class="input-group mb-3">
                <select class="custom-select" id="distribuidor" name="distribuidor">
                    <@if ($distribuidores)
                        @foreach($distribuidores as $dist)
                            @if ($datosProductos->distribuidor_id == $dist['id'])
                                <option value="{{$dist['id']}}" selected>{{$dist['nombre']}}</option>
                            @else
                                <option value="{{$dist['id']}}">{{$dist['nombre']}}</option>
                            @endif                
                        @endforeach
                    @endif                                          
                </select>
            </div>
            <br>

            <button type="submit" class="btn btn-primary mb-lg-5 mb-5 d-block w-100 py-lg-4">Submit</button>
            <br>

        </form>
    </div>
</div>
@endsection