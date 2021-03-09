<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script></head>


<body class="bg-oscuro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-novedades">

            <div class="imagen-1">
                <img src="images\novedades\foto1.jpg" alt="">
                <h5 class="titulo">Gott forma parte de MUNDO HÄFELE</h5>
                <p>Acercate al showroom de Placas San Francisco para comprobar la calidad de nuestros diseños.</p>
                <a href="" class="link italic">Ver mas</a>
            </div>
            <div class="imagen-2">
                <img src="images\novedades\foto2.jpg" alt="">
                <h5 class="titulo">Colección Normandy</h5>
                <p>Los diseños exclusivos de GOTT vuelven a ser noticia.</p>
                <a href="" class="link italic">Ver mas</a>
            </div>
            <div class="imagen-3">
                <img src="images\novedades\foto3.jpg" alt="">
                <h5 class="titulo">Diseño de excelencia</h5>
                <p>La silla Australia es uno de nuestros diseños exclusivos. Resultó tan especial que logró su propia nota en Espacio & Confort.</p>
                <a href="" class="link italic">Ver mas</a>
            </div>
            <div class="imagen-4">
                <img src="images\novedades\foto4.jpg" alt="">
                <h5 class="titulo">Sillas con historia</h5>
                <p>Conversamos con la revista Espacio & Confort sobre las metas de la fábrica.</p>
                <a href="" class="link italic">Ver mas</a>
            </div>

            <div class="texto">
                <h5 class="link titulo "> Novedades</h5>
                <h6 class="gris">Prensa</h6> <br><br>
                <hr>

                <h5 class="titulo">Ultimas Entradas</h5>
                <p> <strong>Gott</strong> forma parte de MUNDO HÄFELE Los diseños exclusivos de GOTT vuelven
                    a ser noticia. Diseño de excelencia Sillas con historia
                </p><br>

                <h5 class="titulo">Seguinos</h5>
                <a href="https://www.facebook.com/gott1974/" class="link">Facebook</a>
                <a href="https://www.instagram.com/sillasgott/" class="link">Instagram</a>
                <a href="https://www.pinterest.com" class="link">Pinterest</a> <br><br>

                <h5 class="titulo">Archivo</h5>
                <a href="" class="gris">2020</a>
                <a href="" class="gris">2019</a>
                <a href="" class="gris">2018</a>
                <a href="" class="gris">2017</a>

            </div>

            <div>
                <i class="fas fa-angle-left"></i>
                  <strong>1</strong> 2 3 4 5 ...
                <i class="fas fa-angle-right"></i>
            </div>

        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
