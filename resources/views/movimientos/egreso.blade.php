@extends("../layouts/plantilla")

@section("cabecera")
Egreso de mercadería
@endsection



@section("contenido")
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form action="/egreso/nuevo_egreso" method="POST">
                <div class="row">
                    @csrf
                    <div class="campo col-sm-12 col-md-4 campo">
                        <label class="texto">Código</label> 
                        <input type="text" name="codigo_barras" class="form-control">
                    </div>
                    <div class="campo col-sm-12 col-md-4 campo">
                        <label class="texto">Cantidad</label> 
                        <input type="number" name="cantidad" class="form-control">
                    </div>
                </div>
                <input type="submit" value="AGREGAR" class="boton btn btn-primary">
            </form>

            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <p class="mensajeError">{{$error}}</p>
                @endforeach
            @endif
        </div>
    </div>
</div>


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
