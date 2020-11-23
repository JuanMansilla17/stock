@extends("../layouts.plantilla")

@section("cabecera")

Agregar proveedores

@endsection


@section("contenido")

<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
            <form action="/proveedores" method="POST">
                <label class="texto" for="nuevoProveedor">Nueva Proveedor:</label>
                <input type="text" name="razon_social" class="form-control">
                <input type="text" name="telefono" class="form-control">
                <input type="text" name="email" class="form-control">
                {{csrf_field()}}

                <input type="submit" name="enviar" value="Enviar" class="boton btn btn-primary"> 
            </form>
        </div>
    </div>
</div>

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <p class="mensajeError">{{$error}}</p>
    @endforeach
@endif

<br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <a href="{{route('proveedores.index')}}" class="float-right">
                    <input type="button" value="Volver" class="boton btn btn-primary"><br><br>
                </a>
            </div>
        </div>
    </div>
 
@endsection

@section("pie")


@endsection
