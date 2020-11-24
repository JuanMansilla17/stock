@extends("../layouts.plantilla")

@section("cabecera")
SELECCIONAR PRODUCTOS
@endsection


@section("contenido")
<div class="container mt-2">
        <div class="row">
            <div class="col">
                <form action="/pedidos/items" method="GET">
                    <div class="scrollable">
                        <table class="table table-striped table-bordered table-hover table-fixed table-dark">
                            <thead>
                                <th>SELECCIONAR</th>
                                <th>CÓDIGO</th>
                                <th>DESCRIPCIÓN</th>
                                <th>COSTO DE COMPRA</th>
                                <th>PRECIO DE VENTA</th>
                                <th>EXISTENCIA</th>
                                <th>STOCK MÍNIMO</th>
                                <th>PROVEEDOR</th>
                            </thead>
                            <tbody>
                                
                                @foreach($productos as $producto)
                                    <tr>
                                        <td><input type="checkbox" value="{{$producto->id}}" name="productos[]"></td>
                                        <td style="color:white">{{$producto->codigo_barras}}</td>
                                        <td style="color:white">{{$producto->descripcion}}</td>
                                        <td style="color:white">{{$producto->costo_compra}}</td>
                                        <td style="color:white">{{$producto->precio_venta}}</td>
                                        <td style="color:white">{{$producto->existencia}}</td>
                                        <td style="color:white">{{$producto->stock_minimo}}</td>
                                        <td style="color:white">{{App\Proveedor::find($producto->proveedor_id)->razon_social}}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <input type="hidden" value="{{$pedido->proveedor_id}}" name="proveedor">
                        <input type="hidden" value="{{$pedido->fecha}}" name="fecha">
                    </div>

                    <div>
                        <input type="submit" class="boton btn btn-primary" value="FINALIZAR SELECCIÓN">
                    </div>

                    @if($productos->count()==0)
                        <p class="mensajeError">Este proveedor no tiene ningún producto asociado</p>
                    @endif

                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <p class="mensajeError">{{$error}}</p>
                        @endforeach
                    @endif

                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('pedidos.create')}}" class="float-right">
                                    <input type="button" value="Paso anterior" class="boton btn btn-primary">
                                </a>
                            </div>
                        </div>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
@endsection


@section("pie")
@endsection