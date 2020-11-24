@extends ("../layouts.plantilla")

@section("cabecera")
EDITAR PRODUCTO
@endsection


@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
            <form action="/productos/{{$Producto->id}}" method="POST">

                <div class="row">
                    {{csrf_field()}}
                    <div class="col-12 col-md-6 campo">
                        <label for="categoria" class="texto">Seleccione una categoría:</label>
                        <select name="categoria" class="form-control">
                            @foreach($categorias as $categoria)
                                @if($categoria->id == $Producto->categoria_id)
                                    <option value="{{$categoria->id}}" selected>{{$categoria->descripcion}}</option>
                                @else
                                    <option value="{{$categoria->id}}">{{$categoria->descripcion}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-6 campo">
                        <label for="proveedor" class="texto">Seleccione un proveedor:</label>
                        <select name="proveedor" class="form-control">
                            @foreach($proveedores as $proveedor)
                                @if($proveedor->id == $Producto->proveedor_id)
                                    <option value="{{$proveedor->id}}" selected>{{$proveedor->razon_social}}</option>
                                @else
                                    <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="campo col-12 col-md-6">
                        <label class="texto" for="nuevoProducto">Descripcion:</label>
                        <input type="text" name="descripcion" value="{{$Producto->descripcion}}" class="form-control">
                    </div>

                    <div class="campo col-12 col-md-3">
                        <label class="texto" for="codigo">Codigo de barras:</label> 
                        <input type="text"name="codigo_barras"value="{{$Producto->codigo_barras}}" class="form-control"> 
                    </div>
                </div>

                <div class="row">
                    <div class="campo col-6 col-lg-3">
                        <label class="texto" for="nuevoProducto">Costo  de compra:</label>
                        <input type="number" name="costo_compra" value="{{$Producto->costo_compra}}" class="form-control">
                    </div>
                    
                    <div class="campo col-6 col-lg-3">
                        <label class="texto" for="nuevoProducto">Precio de venta:</label>
                        <input type="number" name="precio_venta" value="{{$Producto->precio_venta}}"class="form-control">
                    </div>

                    <div class="campo col-6 col-lg-3">
                        <label class="texto" for="nuevoProducto">Existencia:</label>
                        <input type="number" name="existencia"  value="{{$Producto->existencia}}"class="form-control">
                    </div>
                    
                    <div class="campo col-6 col-lg-3">
                        <label class="texto" for="nuevoProducto">Stock minimo:</label>
                        <input type="number" name="stock_minimo" value="{{$Producto->stock_minimo}}" class="form-control">
                    </div>
                </div>
                
                <input type="hidden" name="_method" value="PUT">

                <input type="submit" name="enviar" value="ACTUALIZAR" class="boton btn btn-success">
            </form>

            <form   method="post" action="/productos/{{$Producto->id}}">
                {{csrf_field()}} 
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="boton btn btn-danger" name="eliminar registro" value="ELIMINAR">
            </form>
        </div>
    </div>
</div>




@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <p class="mensajeError">{{$error}}</p>
    @endforeach
@endif


    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <a href="{{route('productos.index')}}" class="float-right">
                    <input type="button" value="Volver" class="boton btn btn-primary">
                </a>
            </div>
        </div>
    </div>
 
@endsection

@section("pie")


@endsection
