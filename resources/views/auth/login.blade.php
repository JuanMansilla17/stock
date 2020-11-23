@extends('layouts.plantilla')


@section("cabecera")
Iniciar sesión
@endsection


@section("contenido")
<div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <label for="email" class="texto">{{ __('Correo electrónico') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="password" class="texto">{{ __('Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Ingresar') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link texto" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection



@section("pie")

@endsection
