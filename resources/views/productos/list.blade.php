@extends("../layouts.plantilla")

@section("cabecera")
REGISTRO DE PRODUCTOS
@endsection

@section ("contenido")
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <div class="scrollable">
                    <table class="table table-striped table-bordered table-hover table-fixed table-dark">
                        <thead> 
                            <th>CÓDIGO</th>
                            <th>DESCRIPCIÓN</th>
                            <th>COSTO DE COMPRA</th>
                            <th>PRECIO DE VENTA</th>
                            <th>EXISTENCIA</th>
                            <th>STOCK MÍNIMO</th>
                            <th>PROVEEDOR</th>
                        </thead>
                        <tbody>
                            @foreach($productosBuscados as $producto)
                                <tr>
                                    <td><a style="color:white" href="{{route('productos.edit', $producto->id)}}">{{$producto->codigo_barras}}</a></td>
                                    <td><a style="color:white" href="{{route('productos.edit', $producto->id)}}">{{$producto->descripcion}}</a></td>
                                    <td><a style="color:white" href="{{route('productos.edit', $producto->id)}}">{{$producto->costo_compra}}</a></td>
                                    <td><a style="color:white" href="{{route('productos.edit', $producto->id)}}">{{$producto->precio_venta}}</a></td>
                                    <td><a style="color:white" href="{{route('productos.edit', $producto->id)}}">{{$producto->existencia}}</a></td>
                                    <td><a style="color:white" href="{{route('productos.edit', $producto->id)}}">{{$producto->stock_minimo}}</a></td>
                                    <td><a style="color:white" href="{{route('productos.edit', $producto->id)}}">{{App\Proveedor::find($producto->proveedor_id)->razon_social}}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <a href="{{route('productos.index')}}" class="float-right">
                    <input type="button" value="Volver" class="boton btn btn-primary"><br><br>
                </a>
            </div>
        </div>
    </div>

    
@endsection



@section("pie")
@endsection