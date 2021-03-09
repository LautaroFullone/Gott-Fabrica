<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body class="bg-oscuro">
    @include('layoutsWeb.header')

    <div class="contenido">
        <div class="grilla-producto-detail">


            <div class="foto-producto">
                <img src="{{ asset('images\sillas\sillon-nino.jpg') }}" alt="">
            </div>

            <div class="texto-producto">

                <h2 class="titulo">Nino</h2>
                <p class="gris">Sillón XX256633</p>
                <hr>
                <h3 class="titulo">$4500.-</h3>
                <p class="gris">IVA INCLUÍDO</p>
                <hr>

                <div class="grilla-inputs">
                    <div>
                        <label for="cantidad">Cantidad:</label>
                        <input class="form-control" type="number" name="cantidad" id="cantidad">
                    </div>
                    <div>
                        <label for="lustres">Lustres disponibles:</label>
                        <input class="form-control" type="number" name="lustres" id="lustres">
                    </div>
                    <div>
                        <label for="tapizados">Tapizados disponibles:</label>
                        <input class="form-control" type="number" name="tapizados" id="tapizados">
                    </div>
                    <div>
                        <label for="maderas">Maderas disponibles:</label>
                        <input class="form-control" type="number" name="maderas" id="maderas">
                    </div>
                </div>
                <br>
                <a href="" class="btn btn-lg  btn-gott-negro">Comprar</a><br>
                <hr>

                <div class="info">
                    <span class="icono">
                        <i class="far fa-credit-card"></i>
                    </span>
                    <p class="gris">
                        Pagá con crédito y débito<br>
                        <a href="" class="italic"><u>Ver opciones</u></a>
                    </p>
                </div>
                <div class="info">
                    <span class="icono">
                        <i class="fas fa-store"></i>
                    </span>
                    <p class="gris">
                        Cómo retirar mi producto<br>
                        <a href="" class="italic"><u>Ver opciones</u></a>
                    </p>
                </div>
                <div class="info">
                    <span class="icono">
                        <i class="fas fa-shipping-fast"></i>
                    </span>
                    <p class="gris">
                        Envíos puerta a puerta a todo el país<br>
                        <a href="" class="italic"><u>Ver costo</u></a>
                    </p>
                </div>
                <div class="info ">
                    <span class="icono ">
                        <i class="far fa-check-circle abajo"></i>
                    </span>
                    <p class="gris margin-0">
                        Embalaje sin cargo<br>
                    </p>
                </div>






            </div>

            <div class="descripcion-titulo">
                <h5 class="titulo">Descripcion</h5>
            </div>

            <div class="descripcion-producto">
                <p>En GOTT nos especializamos en la fabricación de sillas que reconfortan. Por esto, la silla Nino es cómoda y presenta un diseño clásico. Sus dimensiones acotadas le permiten adaptarse a comedores de tamaño medio.</p>
            </div>

            <div class="especifi-titulo">
                <h5 class="titulo">Especificaciones</h5>
            </div>
            <div class="especifi-producto">
                <p>
                <b>Componentes de la colección:</b> silla, sillón, taburete, mesa fija y mesa extensible.<br>
                <b>Uso:</b> ideal para la decoración de interiores. Es una de las líneas más requeridas por el sector gastronómico. <br>
                <b>Madera:</b> Guatambú <br>
                <b>Terminación:</b> Poliuretano al agua. 100% ecofriendly<br>
                <b>Tapizados:</b> pana antimanchas. Tela vinílica. <br>
                <b>Ensamble:</b> espigado y encolado a presión.
                </p>
            </div>

        </div>
        <h5 class="titulo">Compatibilidades</h5>
        <div class="grilla-compatibilidades">
            <img src="{{ asset('images\compatibilidades\foto1.jpg') }}" alt="">
            <img src="{{ asset('images\compatibilidades\foto2.jpg') }}" alt="">
            <img src="{{ asset('images\compatibilidades\foto3.jpg') }}" alt="">

        </div>
    </div>

    @include('layoutsWeb.footer')
</body>
