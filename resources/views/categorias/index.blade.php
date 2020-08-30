@extends("../layouts.plantillaCategorias")

@section("cabecera")

MOSTRAR CATEGORÍAS

@endsection


@section("contenido")

<ul>

@foreach($categorias as $categoria)



<li><a href="{{route('categorias.edit', $categoria->id)}}"> {{$categoria->descripcion}}</a></li>


@endforeach

</ul>


<a href="{{route('categorias.create')}}"> <input type="button"  name="nuevo" value="Nuevo" ></a>
 
@endsection

@section("pie")


@endsection