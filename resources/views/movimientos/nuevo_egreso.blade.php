@extends("../layouts.plantilla")


@section("cabecera")
NUEVO EGRESO
@endsection



@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form action="/egreso/actualizar_egreso" method="POST">
                @csrf
                <div>
                    <label class="texto">Código de barras: </label>
                    <label class="texto">{{$producto->first()->codigo_barras}}</label>
                </div>
                <div>
                    <label class="texto">Descripción: </label>
                    <label class="texto">{{$producto->first()->descripcion}}</label>
                </div>
                <div>
                    <label class="texto">Cantidad Ingresada: {{$cantidad}}</label>
                    <input type="hidden" name="cantidad" value="{{$cantidad}}">
                </div>
                <div>
                    <input type="hidden" name="id" value="{{$producto->first()->id}}">
                </div>
                <div>
                    <input type="submit" class="boton btn btn-primary" value="ACTUALIZAR">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <a href="/egreso" class="float-right">
                <input type="button" value="Volver" class="boton btn btn-primary"><br><br>
            </a>
        </div>
    </div>
</div>
@endsection




@section("pie")
@endsection