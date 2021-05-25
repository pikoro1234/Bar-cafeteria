@extends('dashboard')
@section('containerDinamic')
<h1 class="text-center mt-lg-5 mb-lg-5 mt-3 mb-5">Crear Categoria</h1>
@if ( session('mensaje') )
    <div class="alert alert-success text-center text-uppercase w-50 mx-auto py-4 mb-lg-5">{{ session('mensaje') }}</div>
@endif
<div class="container mb-lg-5 mb-4">
    <div class="card mb-lg-5 mb-4">
        <form class="mb-lg-5 mb-4 p-lg-5 p-4" method="POST" action="{{route ('create-category')}}">

            @csrf      

            <div class="input-group mb-3">                
                <input type="text" class="form-control" placeholder="Nombre categoria" id="nombreCategoria" name="nombreCategoria" aria-label="Nombre producto" aria-describedby="basic-addon1">
            </div>
            <br>

            <button type="submit" class="btn btn-primary mb-lg-5 mb-5 d-block w-100 py-lg-4">Crear categoria</button>
            <br>

        </form>
    </div>
</div>
@endsection