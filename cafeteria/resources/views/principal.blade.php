@extends('dashboard')
@section('containerDinamic')
<h1 class="text-center mt-lg-5 mb-lg-5 mt-3 mb-5">Mis Productos</h1>
@if ( session('mensaje') )
    <div class="alert alert-success text-center text-uppercase w-50 mx-auto py-4 mb-lg-5">{{ session('mensaje') }}</div>
@endif
<div class="container">    
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoria</th>
            <th scope="col">Distribuidor</th>
            <th scope="col">Eliminar    </th>
            </tr>
        </thead>
        <tbody>    
        @if ($productos)
            @foreach($productos as $product)
            <tr>        
            <th scope="row">{{$product['id']}}</th>
            <td><a href="{{route('edit-product',$product['id'])}}"><img src="{{ asset('uploads/') }}/{{$product['foto']}}" class="img-listado" alt="..."></a></td>        
            <td class="font-bold">{{$product['nombre']}}</td>
            <td>{{$product['estado']}}</td>
            <td>{{$product['precio']}}</td>
            <td>{{$product['categoria_id']}}</td>
            <td>{{$product['distribuidor_id']}}</td>
            <td><a href="{{route('delete-product',$product['id'])}}" class="btn btn-outline-secondary">Eliminar</a></td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
@endsection