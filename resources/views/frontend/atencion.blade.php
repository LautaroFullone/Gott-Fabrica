<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous">
    </script>
</head>


<body class="bg-oscuro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="atencion-personalizada">
            <h5 class="titulo">Estamos para ayudarte</h5>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum.
            </p> <br>

            <div class="rango">
                <label for="customRange2" class="form-label"></label>
                <input type="range" class="form-range" min="0" max="4" id="customRange2"><br><br>
            </div>


            <h3>¿Cuál es tu proyecto?</h3>
            <ul>
                <li>Brindar una segunda oportunidad a una silla</li>
                <li>Renovar un rincón de mi hogar</li>
                <li>Equipar mi comercio, negocio y/o emprendimiento</li>
                <li>Co-diseñar el producto para un proyecto dirigido por un profesional</li>
            </ul>

            <hr>

            <a class="btn btn-secondary float-right" href="">Siguiente</a><br><br>
        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
