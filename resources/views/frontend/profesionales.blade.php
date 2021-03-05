
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <script src="https://kit.fontawesome.com/fdbba8c2bf.js" crossorigin="anonymous"></script>
    <script src='js/accordion.js'></script>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>



<body id="profesionales">
  <!--Header Section-->
  @php include '../resources/views/frontend/common/header.php'; @endphp
  <!--End Header Section-->
    <div class="main-container">



        <div class="breadcrumb simple-text">gott / <span>profesionales</span></div>

        <div class="banner">
          <img src="images/empresarios/foto1.jpg" alt="">
        </div>

        <div class="subsection">
          <div>
            <div class="title">Gestión de diseños co-creados</div>
            <div class="body simple-text">Además de fabricar y comercializar nuestras <span class="subrayado">colecciones</span>, brindamos un servicio de gestión y diseño de <span class="subrayado">piezas exclusivas</span> partiendo de los requerimientos estéticos y funcionales de los proyectos de arquitectos, diseñadores y decoradores. Para agilizar la comunicación con los profesionales, enviamos la documentación técnica y confeccionamos prototipos que serán la base de la futura producción.</div>
            <img src="images/empresarios/foto3.jpg" alt="">
          </div>
          <div>
            <div class="title">Calidad premium</div>
            <div class="body simple-text">La integridad es el valor que orienta nuestras decisiones en el proceso de diseño de cada colección. Elegimos especializarnos en la fabricación con madera maciza porque comprobamos que es el mejor material para construir un producto noble como la silla. Además asumimos un compromiso bioresponsable y seleccionamos especialmente cada insumo para la manufactura de nuestros artículos. Si querés aprender más sobre el rubro, seguí la guía de <span class="subrayado">nuestros especialistas</span>.</div>
            <img src="images/profesionales/foto1.jpg" alt="">
          </div>

        </div>

        <div class="lanzamientos-section">
          <div class="title">Lanzamientos</div>
          <div class="lanzamientos-content">
            <div class="text-container">
              <div class="text-title">
                <div class="simple-text">Prensa</div>
                <div class="title">Diseño de excelencia</div>
              </div>
              <div class="text-body simple-text">La Silla Australia es uno de nuestros <span class="subrayado">estudios de casos</span>. Dentro de los proyectos destacados, la Silla Australia de la diseñadora Lula Viazzo de BBANT interior fue un desafío que acompañamos desde la fábrica con el objetivo de crear una <span class="subrayado">pieza a medida</span> para un comedor contemporáneo que era parte de la visión de la profesional.</div>
              <a href="">Continuar leyendo la nota</a>
            </div>
            <img src="images/profesionales/foto2.jpg" alt="">
          </div>
        </div>

        <div class="contactar-section">
          <div class="text">Queremos conocer tus metas<br>y seguir en contacto</div>
          <div class="button">
            <a href="">CONTACTAR</a>
          </div>
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


</body>
</html>
