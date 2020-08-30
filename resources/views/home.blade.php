@extends('layouts.plantilla')


@section("cabecera")
INICIO
@endsection


@section('contenido')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">

                
                <!--este if redirecciona al login si no estás logeado-->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif



                <!--FALTA ACOMODAR LAS RUTAS HACIA LOS ARCHIVOS-->
                <ul class="nav flex-column">
                    <li class="nav-item dropdown"><a href="#" class="texto nav-link dropdown-toggle" data-toggle="dropdown">Stock</a>
                        <div class="dropdown-menu">
                            <a href="{{route('categorias.index')}}" class="dropdown-item" >Categorías</a>
                            <a href="proveedores/proveedores.html" class="dropdown-item disabled" >Proveedores</a>
                            <a href="productos/productos.html" class="dropdown-item disabled" >Registro de productos</a>
                        </div>
                    </li>
                    
                    <li class="nav-item"><a href="pedidos/registro de pedidos.html" class="texto nav-link disabled" >Pedidos</a></li>
                    <li class="nav-item"><a href="ingreso/ingreso de mercaderia.html" class="texto nav-link disabled" >Ingreso de mercadería</a></li>
                    <li class="nav-item"><a href="egreso/egreso de mercaderia.html" class="texto nav-link disabled">Egreso de mercadería</a></li>

                    <li class="nav-item dropdown"><a href="#" class="texto nav-link dropdown-toggle" data-toggle="dropdown">Estadísticas</a>
                        <div class="dropdown-menu">
                            <a href="estadisticas/ventas.html" class="dropdown-item disabled">Productos más vendidos</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown"><a href="#" class="texto nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>

@endsection


@section("pie")

@endsection
