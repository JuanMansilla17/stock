@extends("../layouts/plantilla")

@section("cabecera")
INGRESO DE MERCADERÍA
@endsection



@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form action="/ingreso/nuevo_ingreso" method="POST">
                @csrf
                <label class="texto">Código</label> 
                <input type="text" name="codigo_barras" class="form-control">
                <input type="submit" value="Agregar" class="boton btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection



@section("pie")
@endsection