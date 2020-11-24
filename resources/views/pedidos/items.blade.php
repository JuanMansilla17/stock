@extends("../layouts.plantilla")

@section("cabecera")
FINALIZAR PEDIDO
@endsection


@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <form action="/pedidos" method="POST">
                    {{csrf_field()}} 
                    <div class="campo">
                        <label class="texto">Proveedor: </label>
                        <input type="text" value="{{App\Proveedor::find($pedido->proveedor_id)->razon_social}}" disabled>
                        <input type="hidden" value="{{$pedido->proveedor_id}}" name="proveedor">
                    </div>
                    <div class="campo">
                        <label class="texto">Fecha: </label>
                        <input type="text" value="{{$pedido->fecha}}" disabled>
                        <input type="hidden" value="{{$pedido->fecha}}" name="fecha">
                    </div>

                    <div class="scrollable">
                        <table class="table table-striped table-bordered table-hover table-fixed table-dark">
                            <thead>
                                <th>CÓDIGO</th>
                                <th>DESCRIPCIÓN</th>
                                <th>COSTO UNITARIO</th>
                                <th>CANTIDAD</th>
                                <th>SUBTOTAL($)</th>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                    <tr>
                                        <td style="color:white">{{$producto->codigo_barras}}</td>
                                        <td style="color:white">{{$producto->descripcion}}</td>
                                        <td style="color:white">{{$producto->costo_compra}}</td>
                                        <td><input class="cantidad" type="number" name="cantidades[]"></td>
                                        <td>
                                            <p name=subtotales_texto[]></p>
                                            <input name="subtotales[]" type="hidden">
                                        </td>
                                    </tr>
                                    <input type="hidden" value="{{$producto->costo_compra}}" name="costos[]">
                                    <input type="hidden" value="{{$producto->id}}" name="productos[]">
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <input type="button" class="boton btn btn-primary" value="CALCULAR TOTAL" onclick="calcularTotal()">

                    <p>
                        <label for="total" class="texto" style="font-size: 50px">Total: $</label>
                        <label id="costo_total_texto" class="texto" style="font-size: 50px"></label>
                        <input type="hidden" id="costo_total" name="costo_total">
                    </p>

                    <input type="hidden" id="guardar" value="GUARDAR" class="boton btn btn-success">
                </form>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('pedidos.create')}}" class="float-right">
                            <input type="button" value="CANCELAR" class="boton btn btn-danger">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section("pie")
<script>
var cantidades = document.getElementsByName('cantidades[]');
for(var i=0; i<cantidades.length; i++){
    cantidades[i].addEventListener('input', ocultar);
}


function calcularTotal(){
    var cantidades = document.getElementsByName('cantidades[]');

    var cantidadesValidas = true;
    for(var i=0; i<cantidades.length; i++){
        if(cantidades[i].value <= 0){
            cantidadesValidas = false;
        }
    }

    if(cantidadesValidas){
        var subtotales = document.getElementsByName('subtotales[]');
        var subtotales_texto = document.getElementsByName('subtotales_texto[]');
        var costos = document.getElementsByName('costos[]');
        var total = 0;
        for(var i=0; i<subtotales_texto.length; i++){
            subtotales_texto[i].innerHTML = costos[i].value * cantidades[i].value;

            subtotales[i].value = costos[i].value * cantidades[i].value;

            total += costos[i].value * cantidades[i].value;
        }

        document.getElementById("costo_total").value = total;
        document.getElementById("costo_total_texto").innerHTML = total;

        document.getElementById("guardar").type = "submit";

    }else{
        alert("Cantidades inválidas");
    }
}

function ocultar(e){
    document.getElementById("guardar").type = "hidden";
}
</script>
@endsection