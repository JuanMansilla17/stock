@extends("../layouts.plantilla")

@section("cabecera")
Buscar productos
@endsection


@section("contenido")

<section>
<div class="container mt-5">
    <div class="row">
        <div  class="col-12"> 
            <form action="/productos/list" method="GET">

                <div class="row">
                    <div class="col-sm-12 col-md-6 campo ">
                        <label for="categoria" class="texto">Seleccione una categoría</label>
                        <select name="categoria" class="form-control">
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 campo">
                        <label for="proveedor" class="texto">Seleccione un proveedor</label>
                        <select name="proveedor" class="form-control">
                            @foreach($proveedores as $proveedor)
                                <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <input type="submit" value="BUSCAR" class="boton btn btn-primary">
                </div>
            </form>

            <a href="{{route('productos.create')}}"> <input class="boton btn btn-primary" type="button"  name="nuevo" value="NUEVO" ></a>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('home')}}" class="float-right">
                            <input type="button" value="Volver al menú" class="boton btn btn-primary"><br><br>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection



@section("pie")
@endsection
