@extends("../layouts.plantilla")

@section("cabecera")
Lista de categorías
@endsection


@section("contenido")
    <div class="container-fluid mt-5">
        <div class="row"> 
            <div class="col-12">
                <div class="scrollable">
                    <table class="table table-striped table-bordered table-hover table-fixed table-dark">
                        <tbody>
                        @foreach($categorias as $categoria)
                            <tr>
                                <td><a style="color:white" href="{{route('categorias.edit', $categoria->id)}}"> {{$categoria->descripcion}}</a></td>
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
            <a href="{{route('categorias.create')}}"> <input class="boton btn btn-primary" type="button"  name="nuevo" value="Nuevo" ></a>
            </div>
    </div> 


    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <a href="{{route('home')}}" class="float-right">
                    <input type="button" value="Volver al menú" class="boton btn btn-primary" "><br><br>
                </a>
            </div>
        </div>
    </div>
 
@endsection

@section("pie")

@endsection
