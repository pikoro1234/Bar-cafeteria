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
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
</div>
@endsection