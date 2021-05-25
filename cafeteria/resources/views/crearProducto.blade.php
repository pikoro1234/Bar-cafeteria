@extends('dashboard')
@section('containerDinamic')
<h1 class="text-center mt-lg-5 mb-lg-5 mt-3 mb-5">Crear Producto</h1>
@if ( session('mensaje') )
    <div class="alert alert-success text-center text-uppercase w-50 mx-auto py-4 mb-lg-5">{{ session('mensaje') }}</div>
@endif
<div class="container mb-lg-5 mb-4">
    <div class="card mb-lg-5 mb-4">
        <form class="mb-lg-5 mb-4 p-lg-5 p-4" method="POST" action="{{route ('create-product')}}" enctype="multipart/form-data">

            @csrf

            <div class="input-group mb-3">                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imagen" name="imagen" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Subir imagen</label>
                </div>
            </div>
            <br>

            <div class="input-group mb-3">                
                <input type="text" class="form-control" placeholder="Nombre producto" id="nombre" name="nombre" aria-label="Nombre producto" aria-describedby="basic-addon1">
            </div>
            <br>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion producto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="descripcion" name="descripcion"></textarea>
            </div>
            <br>
            
            <div class="input-group mb-3">
                <select class="custom-select" id="estado" name="estado">
                    <option selected>Estado producto</option>
                    <option value="descuento">descuento</option>
                    <option value="promocion">promoción</option>
                    <option value="agotados">agotados</option>
                </select>
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">€</span>
                    <span class="input-group-text">8.2</span>
                </div>
                <input type="text" class="form-control" id="precio" name="precio" aria-label="Amount (to the nearest dollar)">
            </div>
            <br>

            <div class="input-group mb-3">
                <select class="custom-select" id="categoria" name="categoria">
                    <option >Categoria producto</option>
                    @if ($categorias)
                        @foreach($categorias as $cat)
                        <option value="{{$cat['id']}}">{{$cat['nombre']}}</option>                        
                        @endforeach
                    @endif                                        
                </select>
            </div>
            <br>
            
            <div class="input-group mb-3">
                <select class="custom-select" id="distribuidor" name="distribuidor">
                    <option selected>Distribuidor productos</option>                    
                    @if ($distribuidors)
                        @foreach($distribuidors as $dist)
                        <option value="{{$dist['id']}}">{{$dist['nombre']}}</option>                        
                        @endforeach
                    @endif                     
                </select>
            </div>
            <br>

            <button type="submit" class="btn btn-primary mb-lg-5 mb-5 d-block w-100 py-lg-4">Crear producto</button>
            <br>

        </form>
    </div>
</div>
@endsection