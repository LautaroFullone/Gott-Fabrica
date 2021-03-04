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


    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body class="bg-claro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-sumate">

            <div class="sumate-imagen">
                <img src="{{ asset('images/empresarios/foto1.jpg') }}" alt="">

            </div>

            <div class="sumate-texto">

                <h2 class="titulo">Reinvención de sillas</h2>

                <div class="parrafo">

                    <p>Conocemos de primera mano la resistencia de la buena madera y las fortalezas
                       de una silla bien construida aún cuando comienza a presentar marcas de envejecimiento.
                       En GOTT partimos del conocimiento práctico del oficio para realizar una evaluación
                       detallada de tus sillas y creamos soluciones contemporáneas diseñando alternativas
                       para revitalizar las piezas confeccionadas de forma tradicional. <br>

                       En línea con las últimas tendencias de la producción y el consumo responsable, asumimos
                       un compromiso con el upcycling - también conocido como la reutilización creativa de
                       materiales y productos- para brindar una segunda vida a las sillas que en su nueva forma
                       adquieren un valor superior al actual. El término upcycling nace de la combinación de las
                       palabras: upgrade (actualizar) y recycling (reciclar) y es una de las prácticas de la
                       Economía Circular. <br>

                       Para iniciar el proceso de restauración de las sillas a su estado original de fábrica, les
                       pedimos a los clientes nos envíen algunas fotografías para confeccionar un diagnóstico sin
                       cargo. Sugerimos realizar una toma general y registrar los daños que considere más
                       problemáticos. En función de la información, el equipo de GOTT se pondrá en contacto vía
                       whatsapp o de ser necesario, se acordará una visita a la fábrica para un correcto diagnóstico.
                       <br><

                       Al ser especialistas en la fabricación de sillas, contamos con una gama de insumos de calidad
                       premium que nos permite garantizar la puesta en valor integral: solucionar problemas en el
                       tratamiento superficial, reemplazar los tapizados desgarrados o manchados, cambiar algún
                       elemento vencido de la estructura por otro de madera maciza. Brindar una segunda oportunidad
                       a las sillas, sillones y taburetes que han pasado de generación en generación, no sólo es un
                       compromiso con la historia de nuestros clientes sino que es para nosotros una apuesta a un
                       futuro más sustentable.
                    </p>


                </div>
            </div>

            <div class="zona-fotos">
                <div class="reinventate-fotos">

                    <div class="grilla-fotos">

                        <div class="foto-1">
                            <img src="{{ asset('images/sillas/silla5.jpg') }}" alt="">
                        </div>
                        <div class="foto-2 abajo">
                            <img src="{{ asset('images/sillas/silla6.jpg') }}" alt="">
                        </div>
                        <div class="foto-3">
                            <img src="{{ asset('images/sillas/silla7.jpg') }}" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
