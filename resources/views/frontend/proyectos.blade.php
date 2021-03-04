<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>


    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='js/accordion.js'></script>


    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body >
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-proyectos">

            <div class="proyectos-texto">
                <h2 class="titulo">Proyectos</h2>

                <p class="parrafo">Gott es la fábrica de sillas de Mar del Plata. Los productos de la marca
                   ya son parte de los hogares y la vida de la ciudad. Es por esto que trabajamos
                   tanto casos particulares que requieren la renovación de sillas con historia
                   como emprendedores que buscan acondicionar el espacio para recibir a sus
                   clientes. <br><br>
                   En los últimos años, atravesamos una conversión de la fábrica que habían fundado
                   Oscar Roberto Gonçalves, Juan Carlos Torchelli y Roberto Alfredo Taylor a un
                   sistema de producción que nos permitió llegar mucho más lejos y ser parte de
                   proyectos de acondicionamiento de espacios de gran escala en distintos puntos
                   del país.<p>
            </div>

            <div class="proyectos-imagen">
                <img src="{{ asset('images/empresarios/mapa1.jpg') }}" alt="">
            </div>

        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
