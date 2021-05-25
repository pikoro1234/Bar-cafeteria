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
            <th scope="col">Nombre</th>
            <!-- <th scope="col">Eliminar</th> -->
            </tr>
        </thead>
        <tbody>    
        @if ($listCategorias)
            @foreach($listCategorias as $cat)
            <tr>        
            <th scope="row">{{$cat->id}}</th>
            <td><a href="{{route('edit-category',$cat->id)}}" class="">{{$cat->nombre}}</a></td>        
            <!-- <td><a href="{{route('delete-product',$cat->id)}}" class="btn btn-outline-secondary">Eliminar</a></td>
            </tr> -->
            @endforeach
        @endif
        </tbody>
    </table>
</div>
@endsection