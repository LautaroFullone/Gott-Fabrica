<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous">
    </script>
</head>


<body class="bg-oscuro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-tienda">

            <div class="banner">
                <img src="{{ asset('images\cyber-week.png') }}" alt="">
            </div>
            <div class="encabezado">
                <h3 class="titulo">Encontrá tu producto</h3>
            </div>
            <div class="datos">
                <img src="{{ asset('images\tienda\datos.jpg') }}" alt="">
            </div>
            <div class="buscador">
               <form action="#" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Buscar por tipo de producto, colección o N° de artículo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="icono">
                        <a href="#">
                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                        </a>
                    </div>
                  </div>

               </form>
            </div>
            <div class="filtro">

                <p class="titulo">Ordenar por <i class="fas fa-chevron-down"></i></p>
            </div>
            <div class="info">
                <h5 class="titulo">Productos Disponibles</h5>
                <div class="filtros-tienda">
                    <a href="">Silla</a>
                    <a href="">Sillón</a>
                    <a href="">Taburete</a>
                    <a href="">Banqueta</a>
                    <a href="">Banqueta alta</a>
                    <a href="">Mesa</a>
                    <a href="">Mesa ratona</a>
                </div>
                <hr>
                <h5 class="titulo">Colecciones</h5>
                <div class="filtros-tienda">
                    <a href="">Ariel</a>
                    <a href="">Normandy</a>
                    <a href="">Nino</a>
                    <a href="">Pampa</a>
                    <a href="">Queens</a>
                    <a href="">Pedro</a>
                    <a href="">Tortoni</a>
                </div>
                <hr>
                <h5 class="titulo">¿Cómo elegir el producto?</h5>
                <p>Si querés aprender más sobre el rubro, seguí la guía de nuestros especialistas.</p>
                <a class="link italic" href="">Ver más</a>
            </div>

            <div class="grilla-productos">

                <div>
                    <img src="images\tienda\foto1.jpg" alt="">
                    <h5 class="titulo">Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <h3 class="titulo">$ 4500.-</h3>
                </div>

                <div>
                    <img src="images\tienda\foto2.jpg" alt="">
                    <h5 class="titulo">Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <h3 class="titulo">$ 4500.-</h3>
                </div>

                <div>
                    <img src="images\tienda\foto3.jpg" alt="">
                    <h5 class="titulo">Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <h3 class="titulo">$ 4500.-</h3>
                </div>

                <div>
                    <img src="images\tienda\foto4.jpg" alt="">
                    <h5 class="titulo">Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <h3 class="titulo">$ 4500.-</h3>
                </div>

                <div>
                    <img src="images\tienda\foto5.jpg" alt="">
                    <h5 class="titulo">Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <h3 class="titulo">$ 4500.-</h3>
                </div>

                <div>
                    <img src="images\tienda\foto6.jpg" alt="">
                    <h5 class="titulo">Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <h3 class="titulo">$ 4500.-</h3>
                </div>


            </div>
        </div>
        <div style="text-align:center">
            <p><i class="fas fa-chevron-left"></i> 1 2 3 4 5 ... <i class="fas fa-chevron-right"></i></p>
        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
