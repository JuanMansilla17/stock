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
                                    <td>{{$producto->codigo_barras}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>{{$producto->costo_compra}}</td>
                                    <td>{{$producto->precio_venta}}</td>
                                    <td>{{$producto->existencia}}</td>
                                    <td>{{$producto->stock_minimo}}</td>
                                    <td>{{App\Proveedor::find($producto->proveedor_id)->razon_social}}</td>
                                    <td><a href="#">
                                            <input type="button" value="Modificar/Eliminar" class="boton btn btn-primary disabled"><br><br>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
@endsection



@section("pie")
@endsection