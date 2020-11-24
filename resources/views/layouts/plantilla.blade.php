<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">

        function unselect() {
            document.querySelectorAll('[name=Tipo]').forEach((x) => x.checked = false);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script> 
    <style>
        .iniciar{
            font-size: 3vw;
            color: white;
            font-weight: bold;
        }

        body{
            background-color: hsla(219, 83%, 45%, 0.575);
        }

        .titulo{
            color: white;
            font-size: 40px;
            text-transform: uppercase;
        }

        .texto{
            font-weight: bold;
            color: white;
            font-size: 20px;
        }

        .mensajeError{
            font-weight: bold;
            color: red;
            font-size: 20px;
        }

        .scrollable{
            height: 400px;
            overflow: scroll;
        }

        .boton{
            font-size: 20px;
            margin: 30px;
        }

        .campo{
            margin-top: 20px;
            margin-bottom: 10px
        }
    
    </style>
</head>
<body>

    <div class="cabecera">
        <header class="container-fluid bg-primary">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="titulo">@yield("cabecera")</h1>
                </div>
            </div>
        </header>
    </div>
    
    

    <div class="contenido">
        @yield("contenido")
    </div>

    <div class="pie">
        @yield("pie")

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </div>
    
</body>
</html>
