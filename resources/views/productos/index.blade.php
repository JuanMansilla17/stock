@extends("../layouts.plantilla")

@section("cabecera")
BUSCAR PRODUCTOS
@endsection


@section("contenido")

<section>
    <form action="/productos/list" method="GET">

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


        <!--<div>
            <label for="pocaDisponibilidad" class="radio-inline texto">
                <input type="radio" name="pocaDisponibilidad" id="pocaDisponibilidad">
                Mostrar productos con poca disponibilidad
            </label><br>
            <button id="unselect" onclick="unselect()">Desseleccionar opción</button>
        </div>-->
        <div>
            <input type="submit" value="Buscar" class="boton btn btn-primary">
        </div>
    </form>
</section>

@endsection



@section("pie")
@endsection