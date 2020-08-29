@extends("../layouts.plantillaCategorias")

@section("cabecera")


@section("contenido")

<form  method="post" action="/categorias">

    <input type="text" name="descripcion">

    {{csrf_field()}}

    <input type="submit" name="enviar" value="Enviar">
</form>
 