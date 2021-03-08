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

    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous">
    </script>

</head>

<!--<body class="contenido">
    @include('layoutsWeb.header')
    <h3 class="titulo">¡Hemos Terminado!</h3>
    <p class="contenido-parrafo">
        Gracias, pronto un asesor de ventas se contactará. Si te surge alguna otra duda o consulta no dudes en
        contactarte con nosotros, estamos para ayudarte.
    </p>

    @include('layoutsWeb.footer')
</body>-->

<body class="bg-oscuro">
    @include('layoutsWeb.header')

    <div class="contenedor contenedor-terminos">

        <div class="texto-confirmacion">

            <h3 class="titulo">¡Hemos Terminado!</h3>
            <p>Gracias, pronto un asesor de ventas se contactará.<br>
                Si te surge alguna otra duda o consulta no dudes en
                contactarte <br>con nosotros, estamos para ayudarte.</p>

        </div>

    </div>
    @include('layoutsWeb.footer')
</body>
