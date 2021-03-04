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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accordion.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body id="empresarios">
  <!--Header Section-->
  @php include '../resources/views/frontend/common/header.php'; @endphp
  <!--End Header Section-->
    <div class="main-container">



        <div class="breadcrumb simple-text">gott / <span>empresarios</span></div>

        <div class="banner">
          <img src="images/empresarios/foto1.jpg" alt="">
        </div>

        <div class="subsection">
          <div>
            <div class="title">Canal de venta exclusivo</div>
            <div class="body simple-text">El estudio pormenorizado del rubro y la formación permanente de los profesionales que integran el equipo de <span class="negrita">gott</span>, nos permite brindar un <span class="subrayado">canal de ventas exclusivos</span> para acompañar las necesidades específicas de las empresas que entienden la elección de equipamiento de calidad como un factor determinante de la experiencia global de los clientes.</div>
            <img src="images/empresarios/foto2.jpg" alt="">
          </div>
          <div>
            <div class="title">Gestión de diseños co-creados</div>
            <div class="body simple-text">Además de fabricar y comercializar nuestras <span class="subrayado">colecciones</span>, brindamos un servicio de gestión y diseño de <span class="subrayado">piezas exclusivas</span> partiendo de los requerimientos estéticos y funcionales de los proyectos de arquitectos, diseñadores y decoradores. Para agilizar la comunicación con los profesionales, enviamos la documentación técnica y confeccionamos prototipos que serán la base de la futura producción.</div>
            <img src="images/empresarios/foto3.jpg" alt="">
          </div>

        </div>

        <!--Destacados Section-->
          @php include '../resources/views/frontend/common/destacados.php'; @endphp
        <!--End Destacados Section-->

        <div class="map-section">
          <div class="text">
            <div class="title">¿Dónde encontrar nuestros productos?</div>
            <div class="body simple-text"><span class="negrita">Gott</span> es la fábrica de sillas de Mar del Plata. Por eso los productos de la marca son parte de los hogares y las principales empresas de la ciudad.<br><br>En los últimos años, implementamos una modernización del sistema de producción, que nos permitió llegar mucho más lejos y ser parte de proyectos de acondicionamiento de espacios de gran escala en distintos puntos del país.</div>
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
      @php include '../resources/views/frontend/common/footer.php'; @endphp
    <!--End Footer Section-->

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
