@extends('dashboard')
@section('containerDinamic')
<div class="imagen-banner d-flex justify-content-center align-items-center" style="background-image:  url('{{ asset('storage/desayuno.jpg') }}');">
    <h1 class=" text-center">Bar Cafeteria</h1>
</div>  
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-12">1</div>
        <div class="col-lg-4 col-12">2</div>
        <div class="col-lg-4 col-12">3</div>
        <div class="col-lg-4 col-12">4</div>
        <div class="col-lg-4 col-12">5</div>
        <div class="col-lg-4 col-12">6</div>
    </div>
</div>
@endsection