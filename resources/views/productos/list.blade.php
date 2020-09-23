@extends("../layouts.plantilla")

@section("cabecera")
REGISTRO DE PRODUCTOS
@endsection

@section ("contenido")
<div class="container-fluid mt-5">
        <div class="row"> 
            <div class="col-12">
                <div class="scrollable">
                    <table class="table table-striped table-bordered table-hover table-fixed table-dark">
                        <tbody>
                        @foreach($productosBuscados as $producto)
                            <tr>
                                <td>{{$producto->descripcion}}</td>
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