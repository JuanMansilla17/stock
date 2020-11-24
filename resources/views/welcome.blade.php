@extends("layouts.plantilla")


@section("cabecera")
Sistema de control de stock
@endsection


@section("contenido")
    @if (Route::has('login'))
        <div class="container mt-5">
            @auth
                <div class="row mt-5">
                    <div class="col-12 text-center h-50">
                        <a class="iniciar" href="{{ url('/home') }}">Menu</a>
                    </div>
                </div>
            @else

                <div class="row mt-5">
                    <div class="col-12 text-center h-50">
                        <a class="iniciar" href="{{ route('login') }}">Iniciar sesión</a>
                    </div>
                </div>

                @if (Route::has('register'))
                    <div class="row mt-5">
                        <div class="col-12 text-center ">
                            <a class="iniciar" href="{{ route('register') }}">Crear usuario</a>
                        </div>
                    </div>
                @endif
            @endauth                
        </div>
    @endif
@endsection


@section("pie")

@endsection
