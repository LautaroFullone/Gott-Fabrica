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


<body id="empresarios">
  <!--Header Section-->
  @include('layoutsWeb.header')
  <!--End Header Section-->
    <div class="main-container">



        <div class="breadcrumb simple-text">gott / <span>empresarios</span></div>

        <div class="banner">
          <img src="images/empresarios/foto1.jpg" alt="">
        </div>

        <div class="subsection">
          <div>
            <h5 class="titulo">Canal de venta exclusivo</h5>
            <div class="body simple-text">El estudio pormenorizado del rubro y la formación permanente de los profesionales que integran el equipo de <span class="negrita">gott</span>, nos permite brindar un <span class="subrayado">canal de ventas exclusivos</span> para acompañar las necesidades específicas de las empresas que entienden la elección de equipamiento de calidad como un factor determinante de la experiencia global de los clientes.</div>
            <img src="images/empresarios/foto2.jpg" alt="">
          </div>
          <div>
            <h5 class="titulo">Gestión de diseños co-creados</h5>
            <div class="body simple-text">Además de fabricar y comercializar nuestras <span class="subrayado">colecciones</span>, brindamos un servicio de gestión y diseño de <span class="subrayado">piezas exclusivas</span> partiendo de los requerimientos estéticos y funcionales de los proyectos de arquitectos, diseñadores y decoradores. Para agilizar la comunicación con los profesionales, enviamos la documentación técnica y confeccionamos prototipos que serán la base de la futura producción.</div>
            <img src="images/empresarios/foto3.jpg" alt="">
          </div>

        </div>

        <!--Destacados Section-->
          @include('layoutsWeb.destacados')
        <!--End Destacados Section-->

        <div class="map-section">
          <div class="text">
            <h5>¿Dónde encontrar nuestros productos?</h5>
            <div class="body simple-text"><span class="negrita">Gott</span> es la fábrica de sillas de Mar del Plata. Por eso los productos de la marca son parte de los hogares y las principales empresas de la ciudad.<br><br>En los últimos años, implementamos una modernización del sistema de producción, que nos permitió llegar mucho más lejos y ser parte de proyectos de acondicionamiento de espacios de gran escala en distintos puntos del país.</div>
          </div>
        </div>

        <br><br>
        <div class="widget">
            <h4 class="titulo">
                Queremos conocer tus metas <br> y seguir en contacto
            </h4>
            <br>
           <a class="btn btn-gott">Contactar</a>

        </div>


    </div>

    <!--Footer Section-->
    @include('layoutsWeb.footer')    <!--End Footer Section-->


</body>
</html>
