@extends("../layouts.plantillaCategorias")

@section("cabecera")

 EDITAR CATEGORÍAS

@endsection


@section("contenido")

<form  method="post" action="/categorias/{{$categoria->id}}">

<table>
    <tr>
        <td>Nueva Categoría:</td>
        <td>

            <input type="text" name="descripcion" value="{{$categoria->descripcion}}">

             {{csrf_field()}}

             <input type="hidden" name="_method" value="PUT">

        </td>
    </tr>

    <tr>
        <td>
            ID:
        </td>
        <td>
            <input type="number" name="user_id" value="{{$categoria->id}}">
        </td>
    </tr>




    <tr>
    <td > 

    <input type="submit" name="enviar" value="Actualizar" aling="center">

    </td>
        <td>
            <input type="reset" name="borrar" value="Borrar campos">
        </td>
    </tr>

</table>


</form>

<form  method="post" action="/categorias/{{$categoria->id}}">


{{csrf_field()}}

<input type="hidden" name="_method" value="DELETE">

<input type="submit" value="Eliminar registro" >

 </form>
@endsection

@section("pie")


@endsection