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
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous">
    </script>
</head>


<body class="bg-claro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-disenos-1">

            <div class="imagen">
                <img src="{{ asset('images/empresarios/foto1.jpg') }}" alt="">
            </div>

            <div class="texto">

                <h3 class="titulo">Diseños Co-Creados</h3>

                <div class="parrafo">

                    <p>La gran experiencia de los <u>maestros carpinteros especializados</u> en
                        la fabricación de sillas, se complementa con una gestión profesional del
                        diseño para ofrecer el mejor servicio de proyectos a medida del mercado.
                        Brindamos una atención personalizada especialmente cuando se trata de
                        acompañar la concreción de proyectos impulsados por arquitectos,
                        decoradores y diseñadores. Desde la renovación de GOTT, apreciamos mucho
                        trabajar con diseñadores desde el concepto original, pasando por el
                        desarrollo y la fabricación del producto final. En estos casos, brindamos
                        un servicio de gestión y diseño de piezas exclusivas partiendo de los
                        requerimientos estéticos y funcionales de cada propuesta. Contamos para
                        la fabricación de las sillas con una red de proveedores premium de madera
                        maciza y otros materiales de primera calidad.
                    </p>

                </div>
            </div>

            <div class="foto">

            </div>
        </div>

        <h3 class="titulo">¿Cuáles son las etapas de la co-creación?</h3>

        <div class="grilla-disenos-2">

            <div class="imagen-1">

            </div>

            <div class="imagen-2">

            </div>

            <div class="imagen-3">

            </div>

            <div class="texto-1">
                <h5 class="titulo">Concepto</h5>
                <p class="parrafo">
                    Iniciamos el proceso de articulación con el análisis creativo
                    de cada proyecto en comunicación directa con el proyectista.
                    Particularmente se busca interpretar y respetar las ideas
                    conceptuales originales de cada propuesta. <br>
                    En esta etapa, serealiza el modelado 3D de la silla a fin de
                    previsualizar eldiseño y evaluar tanto la estética como la
                    viabilidad productiva.
                </p>
            </div>

            <div class="texto-2">
                <h5 class="titulo">Desarrollo</h5>

                <p class="parrafo">
                    Crear nuevos modelos plantea grandes desafíos: trabajamos en
                    estrecha colaboración con los proyectistas que nos contratan
                    para estudiar cada aspecto constructivo. Especialmente nos
                    enfocamos en la resolución de los detalles para asegurar una
                    correcta materialización del producto, respetando los
                    requerimientos estéticos y funcionales establecidos en la
                    etapa conceptual. <br>
                    En esta etapa, se realizan los planos y se construye el primer
                    prototipo que sirve de base para la puesta en producción.
                </p>

            </div>

            <div class="texto-3">
                <h5 class="titulo">Producción</h5>

                <p class="parrafo">
                    El éxito de las decisiones que se toman en esta etapa, se
                    basa en la experiencia acumulada desde 1974. Contamos con
                    el asesoramiento exclusivo de nuestro maestro ebanista y
                    el equipo de carpinteros especializados que estudian la
                    materialización de cada propuesta. <br>
                    La puesta en producción implica la resolución de aspectos
                    técnicos específicos para asegurar una calidad óptima del
                    producto terminado. Los diseños co-creados culminan en
                    sillas originales con un alto nivel de calidad en su
                    manufactura.
                </p>

            </div>

        </div>

        <div class="grilla-disenos-3 bg-oscuro">
            <div class="info">
                <p class="italic">Caso destacado</p>

                <h5 class="titulo">Proyecto Silla Uno (2020)</h5>

                <p>En esta oportunidad, partimos del estudio en conjunto con el maestro ebanista de la mejor manera de
                    materializar el producto, respetando los requerimientos estéticos y funcionales de la diseñadora. El
                    material seleccionado fue el Guatambú, una madera que por sus cualidades ofrece las mejores
                    prestaciones en la construcción de este tipo de silla. Mientras que el asiento y el respaldo fueron
                    realizados en cuero. El resultado logrado fue altamente satisfactorio para la diseñadora y sus
                    clientes.<br><br>
                </p>

                <a href="" class="link italic">Continuar leyendo otras notas sobre otros proyectos.</a>

            </div>
            <div style="background-color:gray" class="imagen">

            </div>
        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
