@extends("../layouts.plantilla")

@section("cabecera")

 EDITAR PROVEEDORES

@endsection



@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
            <form action="/proveedores/{{$proveedor->id}}" method="POST">
                <div>
                    <label class="texto">Razón social:</label>
                    <input type="text" name="razon_social" class="form-control" value="{{$proveedor->razon_social}}">
                </div>
                <div>
                    <label class="texto">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" value="{{$proveedor->telefono}}">
                </div>
                <div>
                    <label class="texto">Mail:</label>
                    <input type="email" name="mail" class="form-control" value="{{$proveedor->mail}}">
                </div>
                
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">

                <input type="submit" name="enviar" value="Actualizar" class="boton btn btn-primary">
            </form>

            <form  method="POST" action="/proveedores/{{$proveedor->id}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Eliminar registro" class="boton btn btn-danger">
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
