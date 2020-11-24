@extends('layouts.plantilla')

@section("cabecera")
Crear usuario
@endsection


@section("contenido")
<div class="container mt-5">
        
    <form action="{{ route('register') }}" method="POST">

        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-12 campo img-border">
                <label for="razon_social" class="texto">{{ __('Razón social') }}</label>
                <div class="">
                    <input id="razon_social" type="text" class="form-control @error('razon_social') is-invalid @enderror" name="razon_social" value="{{ old('razon_social') }}" required autocomplete="razon_social" autofocus>

                    @error('razon_social')
                        <span class="invalid-feedback" role="alert">
                            <strong class="mensajeError">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-4 campo">
                <label for="cuit" class="texto">{{ __('Cuit') }}</label>
                <div class="">
                    <input id="cuit" type="text" class="form-control @error('cuit') is-invalid @enderror" name="cuit" value="{{ old('cuit') }}" required autocomplete="cuit" autofocus>

                    @error('cuit')
                        <span class="invalid-feedback" role="alert">
                            <strong class="mensajeError">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-sm-12 col-md-4 campo">
                <label for="telefono" class="texto">{{ __('Número de teléfono') }}</label>
                <div class="">
                    <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong class="mensajeError">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-sm-12 col-md-4 campo">
                <label for="domicilio" class="texto">{{ __('Domicilio') }}</label>
                <div class="">
                    <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>

                    @error('domicilio')
                        <span class="invalid-feedback" role="alert">
                            <strong class="mensajeError">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>        
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 campo">
                <label for="name" class="texto">{{ __('Nombre') }}</label>
                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong class="mensajeError">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            

            <div class="col-sm-12 col-md-6 campo">
                <label for="email" class="texto">{{ __('Correo electrónico') }}</label>
                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="mensajeError">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-4 campo">
                <label for="password" class="texto">{{ __('Contraseña') }}</label>
                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong class="mensajeError">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="col-sm-12 col-md-4 campo">
                <label for="password-confirm" class="texto">{{ __('Confirmar Contraseña') }}</label>
                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success boton">
            {{ __('REGISTRARSE') }}
        </button>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <a href="/" class="float-right">
                        <input type="button" value="Volver" class="boton btn btn-primary"><br><br>
                    </a>
                </div>
            </div>
        </div>
        
                            
    </form>

</div>
@endsection


@section("pie")

@endsection
