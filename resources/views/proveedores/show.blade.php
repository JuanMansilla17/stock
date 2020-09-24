@extends("../layouts.plantillaProveedores")

@section("cabecera")

EDITAR

@endsection


@section("contenido")

<h1> {{$proveedor->razon_social}}</h1>
<h1> {{$proveedor->telefono}}</h1>
<h1> {{$proveedor->email}}</h1>


@endsection

@section("pie")


@endsection
