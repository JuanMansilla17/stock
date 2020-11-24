@extends("../layouts.plantilla")

@section("cabecera")
PEDIDOS
@endsection


@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class='col-12'>
            <form action="/pedidos/list" method="GET">
                <div class="row">
                    <div class="campo col-sm-12 col-md-4 campo">
                        <label class="texto">Desde:</label>
                        <input type="date" name="desde" class="form-control">
                    </div>
                    
                    <div class="campo col-sm-12 col-md-4 campo">
                        <label class="texto">Hasta:</label> 
                        <input type="date" name="hasta" class="form-control">
                    </div>
                </div>
                
                <input type="submit" value="BUSCAR" class="btn btn-primary boton">
            </form>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
        <a href="{{route('pedidos.create')}}"> <input class="boton btn btn-primary" type="button"  name="nuevo" value="NUEVO PEDIDO" ></a>
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