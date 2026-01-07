<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/login-registro.css')}}">   
</head>

<body>
    
    <div class="contenedor-principal">

        <div id="contenedor-base" class="contenedor-base">

            <div id="capa-fondo" class="capa-slide"></div>

        </div>

        <div class="contenedor-login">

            <div class="card">

                @yield('form')

            </div>

        </div>

    </div>

    <script src="{{asset('js/login-registro.js')}}"></script>    

</body>

</html>