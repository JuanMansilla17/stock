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

                    <div class="row">
                        <div class="campo col-sm-12 col-md-6 campo">
                            <label class="texto" for="proveedor">Proveedor:</label>
                            <select name="proveedor" id="proveedor" class="form-control">
                                @foreach($proveedores as $proveedor)
                                    <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="campo col-sm-12 col-md-4 campo">
                            <label class="texto">Fecha:</label>
                            <input type="date" name="fecha" class="form-control">
                        </div>
                    </div>
                    
                    <input type="submit" value="SELECCIONAR PRODUCTOS" class="boton btn btn-primary">
                </form>
            </div>

            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <p class="mensajeError">{{$error}}</p>
                @endforeach
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