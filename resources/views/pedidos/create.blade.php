@extends("../layouts.plantilla")

@section("cabecera")
NUEVO PEDIDO
@endsection


@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <form action="/pedidos/select" method="GET">
                    <label class="texto">Fecha:</label>
                    <input type="date" name="fecha" class="form-control">

                    <label class="texto" for="proveedor">Proveedor:</label>
                    <select name="proveedor" id="proveedor" class="form-control">
                        @foreach($proveedores as $proveedor)
                            <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                        @endforeach
                    </select>
                    
                    <input type="submit" value="Seleccionar productos" class="boton btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section("pie")
@endsection