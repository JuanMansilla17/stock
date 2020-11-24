@extends ("../layouts.plantilla")

@section("cabecera")
Agregar productos
@endsection


@section("contenido")

<div class="container mt-5">
    <div class="row">
        <div  class="col-12">
            <div  class="campo"> 
                <form action="/productos" method="POST">
                        {{csrf_field()}} 

                    <div>
                        <label for="categoria" class="texto">Seleccione una categoría</label>
                        <select name="categoria" class="form-control">
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="campo">
                        <label for="proveedor" class="texto">Seleccione un proveedor</label>
                        <select name="proveedor" class="form-control">
                            @foreach($proveedores as $proveedor)
                                <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="campo">
                        <label class="texto" for="codigo">Codigo de barras:</label> 
                        <input type="text" name="codigo_barras" class="form-control"> 
                    </div>

                    <div class="campo">
                        <label class="texto" for="nuevoProducto">Descripcion:</label>
                        <input type="text" name="descripcion" class="form-control">
                    </div>

                    <div class="campo">
                        <label class="texto" for="nuevoProducto">Costo  de compra:</label>
                        <input type="number" name="costo_compra" class="form-control">
                    </div>

                    <div class="campo">
                        <label class="texto" for="nuevoProducto">Precio de venta:</label>
                        <input type="number" name="precio_venta" class="form-control">
                    </div>
                        
                    <div class="campo">
                        <label class="texto" for="nuevoProducto">Existencia:</label>
                        <input type="number" name="existencia" class="form-control">
                    </div>

                    <div class="campo">
                        <label class="texto" for="nuevoProducto">Stock minimo:</label>
                        <input type="number" name="stock_minimo" class="form-control">
                    </div>

                    <input type="submit" name="enviar" value="GUARDAR" class="boton btn btn-primary"> 
                </form>
            </div>
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
