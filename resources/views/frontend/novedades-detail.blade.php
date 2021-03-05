<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>


    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='js/accordion.js'></script>


    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">

    <link rel="stylesheet" href="/css/style.css">
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body id="novedades-detail">
  <!--Header Section-->
  @php include '../resources/views/frontend/common/header.php'; @endphp
  <!--End Header Section-->
    <div class="main-container">

        <div class="breadcrumb simple-text">gott / lanzamientos / <span>novedades</span></div>

        <div class="content-container">


          <div class="novelty-section">
            <div class="novelty-title">Colección Normandy</div>
            <div class="novelty-subtitle">Los diseños exclusivos de gott vuelven a ser noticia.</div>

            <div class="body-text"><span class="subrayado">Prensa</span></div>
            <br>
            <br>
            <div class="body-text">Después de varias instancias de restauración, la <span class="subrayado">Villa Normandy</span> que fue declarada Monumento Histórico Arquitectónico Provincial en 1991, reabrió sus puertas al público con una propuesta renovada a cargo del Café de la Loma. Para la ocasión, el equipo de <span class="negrita">Gott</span> realizó un estudio de los principales rasgos arquitectónicos para la fabricación de una silla que dialogue de forma armónica con el estilo normando propio de los chalets de la época que seguían las tendencias constructivas del norte de Francia. La fuerte impronta de los tirantes de la madera en la fachada del edificio, sirvió de inspiración para el diseño elaborado por Martín Dalponte quien plasmó una lectura contemporánea de las tramas para la colección.
            <br><br>
            Al igual que la casa, la <span class="subrayado">Silla Normandy</span> es un espacio pensado para distenderse que está construido con los mejores materiales para garantizar su durabilidad. Cada una de las piezas de la <span class="subrayado">colección</span>: silla, taburete y banqueta están realizadas en madera de Guatambú, con un acabado en poliuretano al agua. Mientras que el trenzado está elaborado con cinta de polipropileno que presenta ventajas inigualables: no se estira, es lavable y reciclable. Ideal para realzar espacios interiores de una vivienda o delimitar zonas en un emprendimiento comercial.
            <br><br>
          </div>

            <div class="novelty-images">
              <img src="/images/novedades-detail/foto1.jpg" alt="">
              <img src="/images/novedades-detail/foto2.jpg" alt="">
              <img src="/images/novedades-detail/foto3.jpg" alt="">
              <img src="/images/novedades-detail/foto4.jpg" alt="">
              <img src="/images/novedades-detail/foto5.jpg" alt="">
              <img src="/images/novedades-detail/foto6.jpg" alt="">
            </div>
          </div>







          <div class="sidebar-container">
            <div class="menu">
              <div class="active">Novedades</div>
              <div>Noticias</div>
              <div>Prensa</div>
            </div>

            <div class="text">
              <div class="title">Últimas entradas</div>
              <div class="body-text"><span class="negrita">Gott</span> forma parte de MUNDO HÄFELE<br>Los diseños exclusivos de GOTT vuelven a ser noticia.<br>Diseño de excelencia<br>Sillas con historia</div>
            </div>
            <div class="social-media">
            <div class="title">Seguinos</div>
              <div class="body-text">Facebook<br>Instagram<br>Pinterest</div>
            </div>
            <div class="history">
            <div class="title">Archivo</div>
              <div class="body-text">2020<br>2019<br>2018<br>2017</div>
            </div>
            </div>
          </div>
        </div>

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
