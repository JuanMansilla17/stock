@extends("../layouts/plantilla")

@section("cabecera")
EGRESO DE MERCADERÍA
@endsection



@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form action="/egreso/nuevo_egreso" method="POST">
                @csrf
                <label class="texto">Código</label> 
                <input type="text" name="codigo_barras" class="form-control">
                <input type="submit" value="Agregar" class="boton btn btn-primary">
            </form>
        </div>
    </div>
</div>


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