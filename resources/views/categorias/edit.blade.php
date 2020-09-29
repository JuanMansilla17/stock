@extends("../layouts.plantilla")

@section("cabecera")

 EDITAR CATEGORÍAS

@endsection



@section("contenido")

<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
            <form action="/categorias/{{$categoria->id}}" method="POST">
                <label class="texto" for="nuevaCategoria">Categoría:</label>
                <input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">

                <input type="submit" name="enviar" value="Actualizar" class="boton btn btn-primary">
            </form>

            <form  method="post" action="/categorias/{{$categoria->id}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                @if($hijos == 0)
                    <input type="submit" value="Eliminar registro" class="boton btn btn-danger">
                @else
                    <input type="submit" disabled="true" value="Eliminar registro" class="boton btn btn-danger">
                    <p class="texto">Esta categoría no puede ser eliminada porque tiene productos asociados.</p>
                @endif
                
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
                <a href="{{route('categorias.index')}}" class="float-right">
                    <input type="button" value="Volver" class="boton btn btn-primary"><br><br>
                </a>
            </div>
        </div>
    </div>
@endsection

@section("pie")

@endsection