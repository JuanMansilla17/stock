<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    .cabecera{

        background-color: blue;
        text-align:center;
        font-size: 50px;
        margin-botton:100px;
    }
    .contenido form{
        
        width:300px;
        margin:0 auto;
    }



    </style>


</head>
<body>
    
    <div class="cabecera">

    @yield("cabecera")

    </div>

    <div class="contenido">

    @yield("contenido")



    </div>

    <div class="pie">

    @yield("pie")

    </div>



</body>
</html>