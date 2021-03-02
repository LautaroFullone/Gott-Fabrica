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
    <link rel="stylesheet" href="{{ URL::asset('css/estilo.css') }}">
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>

<body class="contenido">
    @include('/layoutsWeb/header')
        <h1 class="contenido-titulo">Pagina no encontrada</h1>
        <p class="contenido-parrafo">
            Ups! El contenido que estás buscando no existe o no está disponible en este momento, por favor asegúrate de haber ingresado correctamente los parámetros de búsqueda.
        </p>
    @include('/layoutsWeb/footer')
</body>
