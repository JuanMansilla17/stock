@extends("../layouts.plantilla")

@section("cabecera")
Agregar proveedores
@endsection


@section("contenido")

<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
            <form action="/proveedores" method="POST">
            <div class="row">
                <div class="campo col-sm-12 col-md-6">
                    <label class="texto">Razón social:</label>
                    <input type="text" name="razon_social" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="campo col-sm-12 col-md-4">
                    <label class="texto">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control">
                </div>
                <div class="campo col-sm-12 col-md-6">
                    <label class="texto">Email:</label>
                    <input type="email" name="mail" class="form-control">
                </div>
            </div>
                {{csrf_field()}}
                
                <input type="submit" name="enviar" value="GUARDAR" class="boton btn btn-success"> 
            </form>
        </div>
    </div>
</div>

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <p class="mensajeError">{{$error}}</p>
    @endforeach
@endif

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
