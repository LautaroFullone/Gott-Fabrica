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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body id="index">
  <!--Header Section-->
  @include('layoutsWeb.header')
  <!--End Header Section-->
    <div class="main-container">


        <div id="main-slider" class="slider owl-carousel">
            <div class="slider-item item-1">
                <div class="slider-card">
                    <div class="slider-card-text-big">Creatividad y fabricación de calidad al servicio del confort.</div>
                    <a href="">
                        <div class="italic">Conocé nuestras sillas Pampa</div>
                    </a>
                </div>
            </div>
            <div class="slider-item item-2">
                <div class="slider-card">
                    <div class="slider-card-text-big">Pasión por la calidad, el diseño y el servicio.</div>
                    <a href="">
                        <div class="italic">Conocé nuestras sillas Normandy</div>
                    </a>
                </div>
            </div>
            <div class="slider-item item-3">
                <div class="slider-card">
                    <div class="slider-card-text-big">Calidez y confort para los comedores contemporáneos.</div>
                    <a href="">
                        <div class="italic">Conocé nuestras sillas Queens</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="images-and-accordions ac1">
            <div class="accordion">
                <label for="accordion-1">
                    <div class="accordion-header">
                        <i class='fas fa-plus'></i>
                        <h5 class="titulo">Renová tu hogar</h5>
                    </div>
                </label>
                <input type="checkbox" id="accordion-1" style="display: none">
                <div class="accordion-container">
                        <p>Somos una fábrica especializada en sillas y mobiliario exclusivo con más de 40 años de experiencia. <a href="">La calidad de las maderas</a> especialmente seleccionadas que utilizamos en nuestros productos, pueden convertir en un lugar especial cualquier rincón de tu hogar. Sabemos la importancia de conocer de primera mano cada detalle de una silla, por eso, abrimos al público <a href="">nuestra fábrica boutique</a> para contar la historia detrás de cada pieza que sumamos a la <a href="">tienda</a>.</p>
                        <a href="">Ver más</a>
                </div>
                <img src="images/sillas/sillon-curvo.png" alt="">
            </div>

            <div class="accordion">
                <label for="accordion-2">
                    <div class="accordion-header">
                        <i class='fas fa-plus'></i>
                        <h5 class="titulo">Revitalizá tu legado</h5>
                    </div>
                </label>
                <input type="checkbox" id="accordion-2" style="display: none">
                <div class="accordion-container">
                    <p>Las sillas de <a href="">buena madera</a> son artículos para toda la vida. Por eso apostamos a la <a href="">reutilización creativa</a> -también conocida como <span class="italic-text">upcycling</span>- de las piezas que se ganaron un lugar indiscutible en tu hogar o emprendimiento. A partir de un diagnóstico preciso y el conocimiento de las técnicas que nos legaron los <a href="">maestros carpinteros</a>, creamos una segunda oportunidad para tus sillas mejorando incluso el estado original de fábrica.</p>
                    <a href="">Ver más</a>
                </div>
                <img src="images/mesa1.png" alt="">
            </div>

        </div>



        <!--Destacados Section-->
            @include('layoutsWeb.destacados')
        <!--End Destacados Section-->




        <div class="images-and-accordions">
            <div class="accordion">
                <label for="accordion-3">
                    <div class="accordion-header">
                        <i class='fas fa-plus'></i>
                        <h5 class="titulo">Realizá piezas exclusivas</h5>
                    </div>
                </label>
                <input type="checkbox" id="accordion-3" style="display: none">
                <div class="accordion-container">
                        <p>La atención personalizada es una de las metas del equipo de <span class="bold-text">gott</span>. En especial, nos enfocamos en el asesoramiento de proyectos dirigidos por <a href="">arquitectos, decoradores y diseñadores</a> que buscan superar las expectativas de sus clientes. Brindamos un servicio de diseño, fabricación y gestión de <a href="">piezas exclusivas</a> respetando los requerimientos estéticos y funcionales de cada propuesta. Cada proyecto encierra un desafío y la posibilidad de crear soluciones innovadoras.</p>
                        <a href="">Ver más</a>
                </div>
                <img src="images/juego-living.jpg" alt="">
            </div>

            <div class="accordion">
                <label for="accordion-4">
                    <div class="accordion-header">
                        <i class='fas fa-plus'></i>
                        <h5 class="titulo">Realzá tu inversión</h5>
                    </div>
                </label>
                <input type="checkbox" id="accordion-4" style="display: none">
                <div class="accordion-container">
                    <p>El estudio pormenorizado de las tendencias del rubro y la formación permanente de los profesionales que integran el equipo de <span class="bold-text">gott</span>, nos permite brindar un canal de <a href="">ventas exclusivo</a> para acompañar las necesidades específicas de las empresas que entienden la elección de equipamiento de calidad como un factor determinante de la experiencia global de sus clientes. Brindamos <a href="">atención personalizada</a> y seguimiento de los proyectos.</p>
                    <a href="">Ver más</a>
                </div>
                <img src="images/sillas/sillon-blanco.jpg" alt="">
            </div>

        </div>

        <div class="elegir-producto">
            <h5 class="title">¿Cómo elegir el producto?</h5>
            <p class="body">La integridad es el valor que orienta nuestras decisiones en el proceso de diseño de cada colección. Elegimos especializarnos en la fabricación con madera maciza porque comprobamos que es el mejor material para construir un producto noble como la silla. Además asumimos un compromiso bioresponsable y seleccionamos especialmente cada insumo para la manufactura de nuestros artículos. Si querés aprender más sobre el rubro, seguí la guía de nuestros especialistas.</p>
            <a class="italic" href="">Ver más</a>
        </div>

        <!--Instagram Feed Section-->
        @php include '../resources/views/frontend/common/instagram-feed.php'; @endphp
        <!--End Instagram Feed Section-->

    </div>

    <!--Footer Section-->
    @include('layoutsWeb.footer')    <!--End Footer Section-->

<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
<script type="text/javascript">
var userFeed = new Instafeed({
    get: 'user',
    target: "instafeed-container",
    template: '<div><a style="width: 100%" href="@{{link}}" target="_blank"><img style="width: 100%" src="@{{image}}" /></a></div>',
    resolution: 'low_resolution',
    accessToken: 'IGQVJYb3RSMzFDS25aUThLd2h6YmFVZAmJBbHdxdExBUG5UZAThFM1dHekNzNUtpa0dReVlOT3NON24xcW9vdXVxRUFRbDJGNDE4ZAEdNaGVWenF3TzFnU2hUd2JiUEFLSUl2YVlFOXpCWXR3Q1J3cXJwTAZDZD'
});
userFeed.run();
</script>



<script>

$(document).ready(function() {

    $("#main-slider").owlCarousel({
        items: 1,
        navigation: false,
        navigationText: ["",""],
        autoPlay: true,
        loop: false
    })

});



</script>



</body>
</html>
