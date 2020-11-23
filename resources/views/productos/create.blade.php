@extends ("../layouts.plantilla")

@section("cabecera")
Agregar productos
@endsection


@section("contenido")

<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
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
        <div>
            <label for="proveedor" class="texto">Seleccione un proveedor</label>
            <select name="proveedor" class="form-control">
                @foreach($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                @endforeach
            </select>
        </div>

               <label class="texto" for="codigo">Codigo de barras:</label> 
               <input type="text" name="codigo_barras" class="form-control"> 

                <label class="texto" for="nuevoProducto">Descripcion:</label>
                <input type="text" name="descripcion" class="form-control">

                <label class="texto" for="nuevoProducto">Costo  de compra:</label>
                <input type="number" name="costo_compra" class="form-control">

                <label class="texto" for="nuevoProducto">Precio de venta:</label>
                <input type="number" name="precio_venta" class="form-control">

                <label class="texto" for="nuevoProducto">Existencia:</label>
                <input type="number" name="existencia" class="form-control">

                <label class="texto" for="nuevoProducto">Stock minimo:</label>
                <input type="number" name="stock_minimo" class="form-control">
               

                <input type="submit" name="enviar" value="Enviar" class="boton btn btn-primary" onclick="return confirm('¿Estas seguro?')> 
            </form>
        </div>
    </div>
</div>

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <p class="mensajeError">{{$error}}</p>
    @endforeach
@endif

<br>
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
