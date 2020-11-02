@extends("../layouts.plantilla")

@section("cabecera")
PEDIDOS
@endsection


@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class='col-12'>
            <form action="/pedidos/list" method="GET">
                <label class="texto">Desde:</label>
                <input type="date" name="desde" class="form-control">

                <label class="texto">Hasta:</label> 
                <input type="date" name="hasta" class="form-control">

                <input type="submit" value="Buscar" class="btn btn-primary" style="font-size: 20px;">
            </form>
        </div>
    </div>
</div>


NUEVO PEDIDO

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <a href="{{route('home')}}" class="float-right">
                <input type="button" value="Volver al menú" class="boton btn btn-primary"><br><br>
            </a>
        </div>
    </div>
</div>
@endsection


@section("pie")
@endsection