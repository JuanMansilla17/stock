@extends('layouts.plantilla')

@section("cabecera")
CREAR USUARIO
@endsection


@section("contenido")
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('register') }}" method="POST">

                    @csrf
                    <label for="razon_social" class="texto">{{ __('Razón social') }}</label>
                    <div class="col-md-6">
                        <input id="razon_social" type="text" class="form-control @error('razon_social') is-invalid @enderror" name="razon_social" value="{{ old('razon_social') }}" required autocomplete="razon_social" autofocus>

                        @error('razon_social')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="cuit" class="texto">{{ __('Cuit') }}</label>
                    <div class="col-md-6">
                        <input id="cuit" type="text" class="form-control @error('cuit') is-invalid @enderror" name="cuit" value="{{ old('cuit') }}" required autocomplete="cuit" autofocus>

                        @error('cuit')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="telefono" class="texto">{{ __('Número de teléfono') }}</label>
                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="domicilio" class="texto">{{ __('Domicilio') }}</label>
                    <div class="col-md-6">
                        <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>

                        @error('domicilio')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="name" class="texto">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="email" class="texto">{{ __('Correo electrónico') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="password" class="texto">{{ __('Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="mensajeError">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="password-confirm" class="texto">{{ __('Confirmar Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>


                    <button type="submit" class="btn btn-primary">
                        {{ __('Registrarse') }}
                    </button>
                                        
                </form>
            </div>
        </div>
    </div>
@endsection


@section("pie")

@endsection