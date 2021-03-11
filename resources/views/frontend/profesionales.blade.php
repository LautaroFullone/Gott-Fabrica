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

        <div class="banner">
          <img src="images/empresarios/foto1.jpg" alt="">
        </div>

        <div class="subsection">
          <div>
            <h5 class="titulo">Gestión de diseños co-creados</h5>
            <div class="body simple-text">Además de fabricar y comercializar nuestras colecciones, brindamos un servicio de gestión y diseño de piezas exclusivas partiendo de los requerimientos estéticos y funcionales de los proyectos de arquitectos, diseñadores y decoradores. Para agilizar la comunicación con los profesionales, enviamos la documentación técnica y confeccionamos prototipos que serán la base de la futura producción.</div>
            <img src="images/empresarios/foto3.jpg" alt="">
          </div>
          <div>
            <h5 class="titulo">Calidad premium</h5>
            <div class="body simple-text">La integridad es el valor que orienta nuestras decisiones en el proceso de diseño de cada colección. Elegimos especializarnos en la fabricación con madera maciza porque comprobamos que es el mejor material para construir un producto noble como la silla. Además asumimos un compromiso bioresponsable y seleccionamos especialmente cada insumo para la manufactura de nuestros artículos. Si querés aprender más sobre el rubro, seguí la guía de nuestros especialistas.</div>
            <img src="images/profesionales/foto1.jpg" alt="">
          </div>

        </div>

        <!--Destacados Section-->
          @include('layoutsWeb.destacados')
        <!--End Destacados Section-->

        <div class="no-map-section ">
          <div class="text">
              <div class="simple-text" >Prensa</div>
            <h5 class="titulo">Diseño de excelencia</h5>
            <div class="body simple-text">La Silla Australia es uno de nuestros estudios de casos. Dentro de los proyectos destacados, la Silla Australia de la diseñadora Lula Viazzo de BBANT interior fue un desafío que acompañamos desde la fábrica con el objetivo de crear una pieza a medida para un comedor contemporáneo que era parte de la visión de la profesional.</div>
            <a class="italic link">Continuar leyendo la nota</a>
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

{{--
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

--}}
