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
    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body class="bg-claro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-boutique-1">

            <div class="imagen">
                <img src="{{ asset('images/empresarios/foto1.jpg') }}" alt="">
            </div>

            <div class="texto-1">
                <h3 class="titulo">Fábrica boutique</h3>

                <p>GOTT nació del encuentro de maestros ebanistas que compartían la pasión
                    por su oficio y la exploración de nuevas formas de brindar una solución
                    a cada pedido o trabajo de los clientes que visitaban el taller. Desde
                    un primer momento, el espacio de producción fue a la vez espacio de
                    conversación y creación en colaboración entre los materiales y en contacto
                    con las maderas. Hoy revivimos esa experiencia en nuestra fábrica boutique
                    que permite a los clientes conocer la historia detrás de cada pieza que
                    sumamos a <u>nuestra tienda</u>.</p>
            </div>
            <div class="texto-2">
                <p>En esta nueva etapa de trabajo, nos especializamos
                    en la fabricación de sillas y mobiliario exclusivo con una gestión
                    profesional del diseño para ofrecer el mejor servicio del mercado. Más allá
                    del concepto general detrás de cada colección, el equipo está abocado a la
                    selección de los materiales y al seguimiento de la producción que en una
                    escala reducida permite dedicar más atención a los detalles que luego ofrecen
                    una inmejorable primera impresión. Brindamos atención personalizada para
                    renovar o reinventar las sillas de tu hogar o a emprendedores que están
                    diseñando una experiencia confortable para sus clientes, recibiéndolos en
                    el espacio donde todos los días llevamos a la práctica ideas y proyectos.</p>
            </div>
        </div>

        <div class="grilla-boutique-2">

            <div class="foto-1">

            </div>

            <div class="foto-2">

            </div>

            <div class="foto-3">

            </div>

            <div class="foto-4">

            </div>

            <div class="foto-5">

            </div>

            <div class="foto-6">

            </div>

            <div class="foto-7">

            </div>

            <div class="foto-8">

            </div>

            <div class="widget">
                <h4 class="titulo">
                    Queremos conocer tus metas <br> y seguir en contacto
                </h4>
                <br>
               <a class="btn btn-gott">Contactar</a>

            </div>
        </div>




    </div>

    @include('layoutsWeb.footer')
</body>
