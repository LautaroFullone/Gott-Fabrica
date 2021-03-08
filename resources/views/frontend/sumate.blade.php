<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script></head>


<body class="bg-claro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-sumate">

            <div class="sumate-imagen">
                <img src="{{ asset('images/empresarios/foto1.jpg') }}" alt="">

            </div>

            <div class="sumate-texto">

                <h2 class="titulo">Sumate a Gott</h2>

                <div class="parrafo">

                    <p>Somos una fábrica que nace del <u>legado</u> y la pasión por el diseño de piezas
                    que brindan confort y originalidad con un alto nivel de calidad en la
                    manufactura. Cuidamos la atención personalizada de los clientes particulares
                    porque creemos en el valor de la palabra y apostamos al asesoramiento de
                    empresarios y profesionales porque conocemos los desafíos que implica cada
                    nuevo proyecto. Para expandir nuestras posibilidades de producción y acompañar
                    el crecimiento de GOTT, procuramos incorporar personas calificadas en diversas
                    áreas que:
                    </p>

                    <div class="lista-container">
                        <ul>
                            <li>comparten nuestra visión y nuestros valores.</li>
                            <li> comprenden las tendencias del rubro y son creadores de vanguardia.</li>
                            <li> apuestan a la innovación en cada una de las instancias de diseño para mejorar la calidad de vida.</li>
                            <li> disfruten cada nuevo desafío laboral</li>
                        </ul>
                    </div>

                    <p> Trabajamos de manera colaborativa y generamos dinámicas puesta en común del
                        conocimiento que fuimos construyendo a lo largo de estos años de experiencia
                        en la fabricación de sillas con los nuevos integrantes del equipo. Confiamos
                        en los resultados de esta modalidad porque gracias a que un día los maestros
                        carpinteros fueron aprendices en una fábrica, luego se lanzaron a la empresa
                        para iniciar su propio negocio. Hoy GOTT supera las expectativas: se convirtió
                        en la fábrica de sillas con más prestigio de Mar del Plata. Aunque para nosotros
                        siga siendo una aventura que requiere gran vocación de trabajo. Si trabajás en el
                        rubro, <strong>GOTT es el espacio para apostar al desarrollo profesional.</strong> <br><br>
                        En GOTT asumimos un compromiso bioresponsable y seleccionamos especialmente la
                        materia prima de nuestros artículos para garantizar la mayor durabilidad. Es por
                        esto que consideramos a nuestros proveedores como aliados estratégicos para la
                        producción sostenible y sustentable. Si brindas <strong>un servicio o elaborás
                        insumos</strong> vinculados a la fabricación de sillas es posible que te interese
                        formar parte de nuestra red.</p>

                </div>
            </div>

            <div class="sumate-fotos">

                <div class="grilla-fotos">

                    <div class="abajo">
                        <img src="{{ asset('images/sillas/silla1.jpg') }}" alt="">
                    </div>
                    <div class="abajo">
                        <img src="{{ asset('images/sillas/silla2.jpg') }}" alt="">
                    </div >
                    <div>
                        <img src="{{ asset('images/sillas/silla3.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/sillas/silla4.jpg') }}" alt="">
                    </div>

                </div>

            </div>

        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
