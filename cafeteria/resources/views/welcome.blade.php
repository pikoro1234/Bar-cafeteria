<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
        <!-- bootstrap css-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light pb-lg-3 pb-3">
            <a class="navbar-brand d-lg-none d-block mt-3 mt-lg-0 ml-3 ml-lg-0 mb-3 mb-lg-0" href="{{ url('/') }}">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="row w-100">
                    <div class="col-lg-6 col-12 d-lg-flex d-block order-lg-1 order-2">
                        <a class="navbar-brand d-lg-block d-none mx-lg-4 my-lg-2" href="{{ url('/') }}">LOGO</a>                       
                    </div>
                    <div class="col-lg-6 col-12 d-lg-flex d-block order-lg-2 order-1 justify-content-lg-end">                                    
                        <div class="relative d-flex justify-content-center justify-content-lg-end mt-lg-3 mb-lg-0 mb-3 ml-4 ml-lg-0">
                            @if (Route::has('login'))
                                <div class="px-6">
                                    @auth
                                        <a href="{{ url('/principal') }}" class="text-sm text-gray-700 underline text-uppercase">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>                  
                    </div>                    
                    <div class="col-12 order-lg-3 order-3">
                        <div class="row">                       
                            <div class="col-lg-3 col-12">
                                <form method="GET" action="{{route ('welcome') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect02" name="categoriaHome">
                                            <option >Filtrar categorias</option>
                                            @if ($categorias)
                                                @foreach($categorias as $cat)
                                                    <option value="{{$cat['id']}}">{{$cat['nombre']}}</option>                                                                                                           
                                                @endforeach
                                            @endif                                            
                                        </select>                                    
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-success my-2 my-sm-0 px-lg-4 mx-lg-4" type="submit">Filtar categorias</button>
                                    </div>
                                </form>                                
                            </div>
                            
                            <div class="col-lg-3 col-12">
                                <form action="" class="form">                            
                                    <div class="input-group mb-3">
                                        <input type="number" name="desde" id="desde" min="1" max="3000" class="form-control mr-lg-2 mr-2" placeholder="desde" aria-label="Username" aria-describedby="basic-addon1">

                                        <input type="number"  name="hasta" id="hasta" max="3000" min="1" class="form-control ml-lg-2 ml-2" placeholder="hasta" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>                                    

                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-success my-2 my-sm-0 px-lg-4 mx-lg-4" type="submit">Filtar precios</button>
                                    </div>
                                </form>                                
                            </div>

                            <div class="col-lg-3 col-12">
                                <!-- <form action="" class="form">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" name="precio" aria-label="Default select example">
                                            <option value="">Ordenar por Precio</option>
                                            <option value="barato">barato - caro</option>
                                            <option value="caro">caro - barato</option>
                                        </select>                                  
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-success my-2 my-sm-0 px-lg-4 mx-lg-4" type="submit">Ordenar precio</button>
                                    </div>
                                </form>  -->                                
                                <form action="" class="form">
                                    <div class="input-group mb-3">                        
                                        <select class="custom-select" name="fecha" aria-label="Default select example">
                                            <option value="">Ordenar por Fecha</option>
                                            <option value="descendente">nuevo - antiguo</option>
                                            <option value="ascendente">antiguo - nuevo</option>
                                        </select>                                 
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-success my-2 my-sm-0 px-lg-4 mx-lg-4" type="submit">Ordenar fecha</button>
                                    </div>
                                </form>                            
                            </div>

                            <div class="col-lg-3 col-12">
                                <form class="form-inline my-2 my-lg-0 d-lg-flex d-block">
                                    <div class="input-group mb-3 w-100">
                                        <input class="form-control px-lg-4 d-block w-100" type="search" placeholder="Buscar" aria-label="Search" name="prodBuscar">
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-success my-2 my-sm-0 px-lg-4 mx-lg-4" type="submit">Buscar producto</button>
                                    </div>                                                                        
                                </form> 
                            </div>

                        </div>
                    </div> 
                </div>                           
            </div>
        </nav>  

        <div class="imagen-banner d-flex justify-content-center align-items-center" style="background-image:  url('{{ asset('storage/desayuno.jpg') }}');">
            <h1 class=" text-center">Bar Cafeteria</h1>
        </div> 
        <br><br><br>

        <div class="container mt-lg-5 mt-5 pt-lg-5 pt-5 mb-lg-5 mb-5 pb-lg-5 pb-5">
            <div class="row">
                <?php if( isset($_GET['categoriaHome']) || (isset($_GET['desde']) && isset($_GET['hasta'])) || isset($_GET['fecha']) || isset($_GET['prodBuscar'])  ){?>                    
                        @foreach($productosA as $product)
                            <div class="col-lg-4 col-12 mb-lg-5 mb-5">
                                <div class="card" style="width: 20rem;">
                                    @if($product->estado == 'descuento')
                                        <span class="badge badge-success badge-flotante">{{$product->estado}}</span>
                                    @elseif($product->estado == 'promocion')
                                        <span class="badge badge-secondary badge-flotante">{{$product->estado}}</span>
                                    @elseif($product->estado == 'agotados')
                                        <span class="badge badge-danger badge-flotante">{{$product->estado}}</span>
                                    @endif
                                    <img src="{{ asset('uploads/') }}/{{$product->foto}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold text-uppercase">{{$product->nombre}}</h5>
                                        <p class="card-text">{{$product->descripcion}}</p>
                                        <p class="card-text"><span class="font-weight-bold">Precio: </span> {{$product->precio}}</p>
                                        @if ($categorias)
                                            @foreach($categorias as $cat)
                                                @if ($cat['id'] == $product->categoria_id)
                                                    <p class="card-text"><span class="font-weight-bold">Categoria: </span> {{$cat['nombre']}}</p>
                                                @endif 
                                            @endforeach
                                        @endif 
                                        <p class="card-text"><span class="font-weight-bold">Fecha: </span><small class="text-muted">{{$product->created_at}}</small></p>
                                        @if (Route::has('login'))
                                        <div class="px-6">
                                            @auth
                                                <a href="{{route('edit-product',$product->id)}}" class="btn btn-primary">Editar</a>
                                            @else
                                            <a href="#" class="btn btn-primary">Ver mas...</a>
                                            @endauth
                                        </div>
                                        @endif
                                        
                                    </div>
                                </div> 
                            </div>                               
                        @endforeach                   
                <?php }else{ ?>
                        @foreach($productos as $product)
                        <div class="col-lg-4 col-12 mb-lg-5 mb-5">
                            <div class="card" style="width: 20rem;">
                                @if($product['estado'] == 'descuento')
                                    <span class="badge badge-success badge-flotante">{{$product['estado']}}</span>
                                @elseif($product['estado'] == 'promocion')
                                    <span class="badge badge-secondary badge-flotante">{{$product['estado']}}</span>
                                @elseif($product['estado'] == 'agotados')
                                    <span class="badge badge-danger badge-flotante">{{$product['estado']}}</span>
                                @endif
                                <img src="{{ asset('uploads/') }}/{{$product['foto']}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-uppercase">{{$product['nombre']}}</h5>
                                    <p class="card-text">{{$product['descripcion']}}</p>
                                    <p class="card-text"><span class="font-weight-bold">Precio: </span> {{$product['precio']}}</p>
                                    @if ($categorias)
                                        @foreach($categorias as $cat)
                                            @if ($cat['id'] == $product['categoria_id'])
                                                <p class="card-text"><span class="font-weight-bold">Categoria: </span> {{$cat['nombre']}}</p>
                                            @endif 
                                        @endforeach
                                    @endif 
                                    <p class="card-text"><span class="font-weight-bold">Fecha: </span><small class="text-muted">{{$product['created_at']}}</small></p>
                                    @if (Route::has('login'))
                                    <div class="px-6">
                                        @auth
                                            <a href="{{route('edit-product',$product['id'])}}" class="btn btn-primary">Editar</a>
                                        @else
                                        <a href="#" class="btn btn-primary">Ver mas...</a>
                                        @endauth
                                    </div>
                                    @endif
                                    
                                </div>
                            </div> 
                        </div>                               
                        @endforeach   

                         <!-- paginacion -->
                        <div class="container d-flex justify-content-center mt-lg-5 mt-5 pt-lg-5">{{ $productos->links() }}</div>

                    <?php }?>   
            </div>                    
        </div>


        <p class="text-center bg-dark text-white py-3">este es el footer</p>
         <!-- bootstrap js and jQuery-->
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>