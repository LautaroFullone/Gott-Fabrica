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
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body id="shop-index">
  <!--Header Section-->
  @php include '../resources/views/frontend/common/header.php'; @endphp
  <!--End Header Section-->
    <div class="main-container">


        <div class="content-container">
          <div class="promo-container">
            <img src="images/cyber-week.png" alt="">
          </div>
  
          <div class="search-section">
            <div class="search-title">Encontrá tu producto</div>
            <div class="search-bar">
              <input type="text" id="fname" name="fname" placeholder="Buscar por tipo de producto, colección o N° de artículo">
            </div>
            <div class="sort-by">Ordenar por</div>
          </div>
  
          <div class="shipping-section">
            <div class="breadcrumb">gott / tienda / <span>todos</span></div>
            <div class="shipping-items">
            <div class="item-1">
            <img src="images/credit-cards-icons.jpg" alt="">
                <div>
                  <div>Pagá con crédito y débito</div>
                  <div><a href="" class="link">Ver opciones</a></div>
                </div>
                
              </div>
              <div class="item-2">
                <i class='fas fa-store'></i>
                <div>
                  <div>Cómo retirar mi producto</div>
                  <div><a href="" class="link">Ver opciones</a></div>
                </div>
                
              </div>
              <div class="item-3">
                <i class='fas fa-truck'></i>
                <div>El envío más rápido<br>a todo el país</div>
              </div>
              <div class="item-4">
                <div>Comprá en <span>gott.ar</span></div>
                <div><a href="" class="link">Ver beneficios</a></div>
              </div>
            </div>
          </div>
















          <!--Instagram Feed Section-->
          @php include '../resources/views/frontend/common/instagram-feed.php'; @endphp
          <!--End Instagram Feed Section-->
        </div>



        

        
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