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


<body id="novedades">
  <!--Header Section-->
  @php include '../resources/views/frontend/common/header.php'; @endphp
  <!--End Header Section-->
    <div class="main-container">

        <div class="breadcrumb simple-text">gott / lanzamientos / <span>novedades</span></div>

        <div class="content-container">


          <div class="novelty-section">
            <div class="novelty-container">
              <div class="novelty-item">
                <img src="images/novedades/foto1.jpg" alt="">
                <div class="title">Gott forma parte de MUNDO HÄFELE</div>
                <div class="body-text">Acercate al showroom de Placas San Francisco para comprobar la calidad de nuestros diseños.</div>
                <a href="/novedades/1">Ver más</a>
              </div>
              <div class="novelty-item">
                <img src="images/novedades/foto2.jpg" alt="">
                <div class="title">Colección Normandy</div>
                <div class="body-text">Los diseños exclusivos de GOTT vuelven a ser noticia.</div>
                <a href="/novedades/2">Ver más</a>
              </div>
              <div class="novelty-item">
                <img src="images/novedades/foto3.jpg" alt="">
                <div class="title">Diseño de excelencia</div>
                <div class="body-text">La silla Australia es uno de nuestros diseños exclusivos. Resultó tan especial que logró su propia nota en Espacio & Confort.</div>
                <a href="/novedades/3">Ver más</a>
              </div>
              <div class="novelty-item">
                <img src="images/novedades/foto4.jpg" alt="">
                <div class="title">Sillas con historia</div>
                <div class="body-text"> Conversamos con la revista Espacio & Confort sobre las metas de la fábrica.</div>
                <a href="/novedades/4">Ver más</a>
              </div>
            </div>

            <div class="pagination">
              <img src="images/novedades/arrow-left.png" alt="">
              <a href="" class="active">1</a>
              <a href="">2</a>
              <a href="">3</a>
              <a href="">4</a>
              <a href="">5</a>
              <img src="images/novedades/arrow-right.png" alt="">
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
