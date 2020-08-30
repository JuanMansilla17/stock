@extends("../layouts.plantillaCategorias")

@section("cabecera")

CATEGORÍAS

@endsection


@section("contenido")

<form  method="post" action="/categorias">

<table>
    <tr>
        <td>Nueva Categoría:</td>
        <td>

            <input type="text" name="descripcion">

             {{csrf_field()}}

        </td>
    </tr>

    <tr>
        <td>
            ID:
        </td>
        <td>
            <input type="number" name="user_id">
        </td>
    </tr>




    <tr>
    <td > 

    <input type="submit" name="enviar" value="Enviar" aling="center">

    </td>
        <td>
            <input type="reset" name="borrar" value="Borrar">
        </td>
    </tr>

</table>


</form>
 
@endsection

@section("pie")


@endsection