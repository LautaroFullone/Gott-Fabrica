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
    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
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

        <div class="grilla-contract">

            <div class="sumate-imagen">
                <img src="{{ asset('images/empresarios/foto1.jpg') }}" alt="">

            </div>

            <div class="sumate-texto">

                <h2 class="titulo">Contract</h2>

                <div class="parrafo">

                    <p>La distinción es un valor que perseguimos en cada nueva colección porque sabemos
                       que cada línea, patrón, terminación que utilizamos expresa el posicionamiento de
                       la marca más allá de la fábrica. Este estudio pormenorizado del rubro y la formación
                       permanente de los profesionales que integran el equipo de GOTT, nos permite en la
                       actualidad brindar un canal de ventas exclusivos para acompañar las necesidades
                       específicas de las empresas que entienden la elección de equipamiento de calidad
                       como un factor determinante de la experiencia global de los clientes. <br><br>
                       A la hora de crear, rediseñar o revitalizar un ambiente, sabemos que son muchas las
                       variables a tener en cuenta: garantizar la circulación de las personas, dar una
                       sensación de amplitud y maximizar la capacidad de ocupación respondiendo a los
                       requerimientos específicos del sector. A partir de nuestra trayectoria de contract
                       para emprendimientos gastronómicos, hoteles y/o emprendimientos inmobiliarios,
                       tenemos en consideración tanto las expectativas y necesidades del emprendimiento como
                       las principales características arquitectónicas del negocio para elaborar respuestas
                       eficientes e innovadoras del uso colectivo del espacio.<br><br>
                       Por otro lado, la calidad constructiva de nuestros productos fue pensada para garantizar
                       la durabilidad bajo condiciones de uso reiterado y permanente. Trabajamos en la
                       fabricación de las sillas con piezas enteras de madera natural que no han sufrido
                       alteraciones físicas ni químicas porque otorgan los mejores resultados a largo plazo:
                       son resistentes, brindan la posibilidad de ser restauradas (servicio post venta) y
                       presentan un alto grado de resistencia mecánica. Mientras que los diseños hechos a medida
                       culminan en sillas originales con un alto nivel de calidad en su manufactura supervisada
                       en cada instancia de su producción.
                    </p>


                </div>
            </div>

            <div class="zona-fotos">
                <div class="reinventate-fotos">

                    <div class="grilla-fotos">

                        <div class="foto-1">

                        </div>
                        <div class="foto-2">

                        </div>
                        <div class="foto-3">

                        </div>

                    </div>

                </div>
            </div>

            <div class="widget">
                <div class="titulo">
                    Queremos conocer tus metas <br> y seguir en contacto
               </div>
               <div class="boton">
                contactar
            </div>

            </div>



            </div>
        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
