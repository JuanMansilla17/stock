@extends("../layouts.plantilla")


@section("cabecera")
REGISTRO DE PEDIDOS
@endsection



@section("contenido")
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <div class="scrollable">
                <table class="table table-striped table-bordered table-hover table-fixed table-dark">
                    <thead> 
                        <th>FECHA</th>
                        <th>PROVEEDOR</th>
                        <th>PRODUCTOS</th>
                        <th>COSTO TOTAL</th>
                        <th>ESTADO</th>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                            <form action="/pedidos/{{$pedido->id}}" method="POST">
                                <tr>
                                    {{csrf_field()}} 
                                    <td style="color:white">{{$pedido->fecha}}</td>
                                    <td style="color:white">{{App\Proveedor::find($pedido->proveedor_id)->razon_social}}</td>
                                    <td>
                                        @foreach($pedido_items as $pedido_item)
                                            @if($pedido_item->pedido_id == $pedido->id)
                                                <ul>
                                                    <li>{{App\Producto::find($pedido_item->producto_id)->descripcion}}</li>
                                                </ul>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td style="color:white">{{$pedido->costo_total}}</td>
                                    @if($pedido->estado == "solicitado")
                                        <input type="hidden" name="_method" value="PUT">
                                        <td style="color:white">
                                            {{$pedido->estado}}<br>
                                            <input type="submit" class="boton btn btn-success" value="CONFIRMAR RECEPCIÓN" >
                                        </td>
                                    @else
                                        <td style="color:white">{{$pedido->estado}}</td>
                                    @endif
                                </tr>
                            </form>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            @if($pedidos->count()==0)
                <p class="mensajeError">No hay ningún pedido registrado entre las fechas indicadas</p>
            @endif
            

            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('pedidos.index')}}" class="float-right">
                            <input type="button" value="Volver" class="boton btn btn-primary">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("pie")
@endsection