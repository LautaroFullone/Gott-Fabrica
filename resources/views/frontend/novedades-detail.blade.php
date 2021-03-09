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

        <div class="grilla-novedades-detail">

            <div class="info">
                <h3 class="titulo">Colección Normandy</h3>
                <h5 class="titulo">Los diseños exclusivos de gott vuelven a ser noticia.</h5>
                <p><u>Prensa</u></p> <br><br>
                <p> Después de varias instancias de restauración, la <u>Villa Normandy</u> que fue declarada Monumento Histórico
                    Arquitectónico Provincial en 1991, reabrió sus puertas al público con una propuesta renovada a cargo
                    del Café de la Loma. Para la ocasión, el equipo de Gott realizó un estudio de los principales rasgos
                    arquitectónicos para la fabricación de una silla que dialogue de forma armónica con el estilo
                    normando propio de los chalets de la época que seguían las tendencias constructivas del norte de
                    Francia. La fuerte impronta de los tirantes de la madera en la fachada del edificio, sirvió de
                    inspiración para el diseño elaborado por Martín Dalponte quien plasmó una lectura contemporánea de
                    las tramas para la colección.<br><br>
                    Al igual que la casa, la <u>Silla Normandy</u> es un espacio pensado para
                    distenderse que está construido con los mejores materiales para garantizar su durabilidad. Cada una
                    de las piezas de la <u>colección</u>: silla, taburete y banqueta están realizadas en madera de Guatambú,
                    con un acabado en poliuretano al agua. Mientras que el trenzado está elaborado con cinta de
                    polipropileno que presenta ventajas inigualables: no se estira, es lavable y reciclable. Ideal para
                    realzar espacios interiores de una vivienda o delimitar zonas en un emprendimiento comercial.
                </p>

                <div class="grilla-fotos">
                    <div>
                        <img src="{{ asset('images\novedades-detail\foto1.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images\novedades-detail\foto2.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images\novedades-detail\foto3.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images\novedades-detail\foto4.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images\novedades-detail\foto5.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images\novedades-detail\foto6.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="texto">
                <h5 class="link titulo "> Novedades</h5>
                <h6 class="gris">Prensa</h6> <br><br>
                <hr>

                <h5 class="titulo">Ultimas Entradas</h5>
                <p> <strong>Gott</strong> forma parte de MUNDO HÄFELE<br>Los diseños exclusivos de GOTT vuelven a ser noticia. Diseño de excelencia Sillas con historia
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


        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
