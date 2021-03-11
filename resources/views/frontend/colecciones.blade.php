<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>


    <script src="https://kit.fontawesome.com/fdbba8c2bf.js" crossorigin="anonymous"></script>
    <script src='js/accordion.js'></script>


    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body class="bg-oscuro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="lista-colecciones">
            <a href="#" class="item titulo">Ariel</a>|
            <a href="#" class="item titulo rojo">Normandy</a>|
            <a href="#" class="item titulo">Nino</a>|
            <a href="#" class="item titulo">Pampa</a>|
            <a href="#" class="item titulo">Queens</a>|
            <a href="#" class="item titulo">Pedro</a>|
            <a href="#" class="item titulo">Tortoni</a>
        </div>



        <div class="grilla-colecciones">

            <div class="imagen">
                <img src="{{ asset('images\novedades-detail\coleccion.jpg') }}" alt="">
                {{-- <div class="cartel">Hola</div>--}}
            </div>

            <div class="descripcion">
                <h5 class="titulo">Descripcion</h5>
                <p>A partir del pedido de un cliente para el Café de la Loma - <u>Villa Normandy</u>,
                   surgió este diseño único que conjuga la técnica de ensamble espigado de GOTT con
                   la aplicación de un trenzado inspirado en el tradicional edificio. Además de la
                   referencia visual, la línea parte de una lectura del momento histórico de la
                   ciudad que representa la Villa Normandy, en el que el balneario era elegido como
                   lugar de pertenencia y construcción de identidad de la aristocracia argentina de
                   principios de siglo XX. <br><br>
                   El diseño se define por sus formas simples y contemporáneas con algunos elementos
                   destacados del estilo arquitectónico neormando, propio de los chalets de la época
                   que seguían las tendencias constructivas del norte de Francia.<br><br>
                   <strong>C'est l'été, c'est la mer, c'est la Normandy</strong>
                </p>
            </div>

            <div class="especificaciones">
                <h5 class="titulo">Especificaciones</h5>
                <p>
                    <strong>Diseño: </strong>a cargo de Martín Dalponte.<br>
                    <strong>Componentes de la colección: </strong>silla, taburete y banqueta.<br>
                    <strong>Uso: </strong>ideal para la decoración de interiores. Es una de las líneas más requeridas
                                          por el sector gastronómico.<br>
                    <strong>Madera: </strong>Guatambú<br>
                    <strong>Terminación: </strong>Poliuretano al agua. 100% ecofriendly<br>
                    <strong>Trenzado: </strong>cinta de polipropileno. Este material tiene la ventaja de que no se estira.
                                               Es lavable y reciclable.<br>
                    <strong>Ensamble: </strong>espigado y encolado a presión.
                </p>
            </div>

            <div class="familia">
                <h5 class="titulo">Familia de productos</h5>
            </div>

            <div class="productos">
                <div>
                    <img src="images\sillas\silla4.jpg" alt="">
                    <a class="italic link" href="#">Ver Producto en Tienda</a>
                </div>
                <div>
                    <img src="images\sillas\silla1.jpg" alt="">
                    <a class="italic link" href="#">Ver Producto en Tienda</a>
                </div>
                <div>
                    <img src="images\sillas\silla2.jpg" alt="">
                    <a class="italic link" href="#">Ver Producto en Tienda</a>
                </div>
            </div>

            <div class="cartel-1">
                <h5 class="titulo">Los diseños exclusivos de gott vuevlen a ser noticia.</h5>
                <p>
                    Después de varias instancias de restauración, la Villa Normandy que fue declarada
                    Monumento Histórico Arquitectónico Provincial en 1991, reabrió sus puertas al
                    público con una propuesta renovada a cargo del Café de la Loma. Para la ocasión,
                    el equipo de GOTT realizó un estudio de los principales rasgos arquitectónicos...
                </p>
                <a class="italic link" href="#">Ver mas</a>

            </div>
        </div>

    </div>

    @include('layoutsWeb.footer')
</body>

