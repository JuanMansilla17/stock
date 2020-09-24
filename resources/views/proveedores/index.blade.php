@extends("../layouts.plantilla")

@section("cabecera")
LISTA DE PROVEEDORES
@endsection


@section("contenido")
    <div class="container-fluid mt-5">
        <div class="row"> 
            <div class="col-12">
                <div class="scrollable">
                    <table class="table table-striped table-bordered table-hover table-fixed table-dark">
                        <tbody>
                        @foreach($proveedores as $proveedor)
                            <tr>
                                <td><a style="color:white" href="{{route('proveedores.edit', $proveedor->id)}}"> {{$proveedor->razon_social}}</a></td>
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
            <div  class="col-12"> 
            <a href="{{route('proveedores.create')}}"> <input class="boton btn btn-primary" type="button"  name="nuevo" value="Nuevo" ></a>
            </div>
    </div> 


    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <a href="{{route('home')}}" class="float-right">
                    <input type="button" value="Volver al menú" class="boton btn btn-primary"><br><br>
                </a>
            </div>
        </div>
    </div>
 
@endsection

@section("pie")

@endsection
