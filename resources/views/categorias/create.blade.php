@extends("../layouts.plantilla")

@section("cabecera")

AGREGAR CATEGORÍA

@endsection


@section("contenido")

<div class="container mt-5">

    <div class="row">
        <div  class="col-12"> 
            <form action="/categorias" method="POST">
                <label class="texto" for="nuevaCategoria">Nueva Categoría:</label>
                <input type="text" name="descripcion" class="form-control">
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

 
@endsection

@section("pie")


@endsection