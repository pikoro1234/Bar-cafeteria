@extends('dashboard')
@section('containerDinamic')
<h1 class="text-center mt-lg-5 mb-lg-5 mt-3 mb-5">Crear Producto</h1>
<div class="container mb-lg-5 mb-4">
    <div class="card mb-lg-5 mb-4">
        <form class="mb-lg-5 mb-4 p-lg-5 p-4">

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
                    <option value="descuentro">descuentro</option>
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
                    <option selected>Categoria producto</option>
                    <option value="panes">panes</option>
                    <option value="sandwich">sandwich</option>
                    <option value="desayunos">desayunos</option>
                    <option value="almuerzos">almuerzos</option>
                    <option value="dulces">dulces</option>
                    <option value="postres">postres</option>
                </select>
            </div>
            <br>

            <div class="input-group mb-3">
                <select class="custom-select" id="distribuidor" name="distribuidor">
                    <option selected>Distribuidor productos</option>
                    <option value="1">mercado 1</option>
                    <option value="2">mercado 2</option>
                    <option value="3">mercado 3</option>
                    <option value="4">mercado 4</option>
                    <option value="5">mercado 5</option>
                </select>
            </div>
            <br>

            <button type="submit" class="btn btn-primary mb-lg-5 mb-5 d-block w-100 py-lg-4">Submit</button>
            <br>

        </form>
    </div>
</div>
@endsection