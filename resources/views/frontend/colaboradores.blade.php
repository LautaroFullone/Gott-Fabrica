<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOTT</title>


    <<script src="https://kit.fontawesome.com/fdbba8c2bf.js" crossorigin="anonymous"></script>
    <script src='js/accordion.js'></script>


    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilosLau.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body class="bg-oscuro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <h3 style="margin-top:20px; margin-bottom:20px;" class="titulo">Diseñadores Colaboradores</h3>

        <div class="grilla-colaboradores">
            <div class="grilla-disenador">

                <div class="foto">

                </div>

                <div class="arriba">
                    <h5 style="margin-bottom: 0;" class="titulo">Lorem ipsum dolor sit amet</h5>
                    <p>Consectetur adipiscing elit</p>
                </div>

                <div class="contenido">
                    <p><i class="fab fa-instagram"></i>Suspendisse eleifend augue quis magna varius, a suscipit justo mollis.
                        Nullam et lectus vitae nisl porttitor rhoncus sit amet eget felis. Donec
                        in semper dui. Fusce tristique neque dui, non eleifend augue rutrum quis.
                        Duis rhoncus vitae lectus sagittis sagittis. Etiam cursus, tellus eu
                        scelerisque pellentesque, mauris ipsum efficitur dui, finibus sollicitudin
                        enim lorem ut lorem. Morbi consequat posuere est et tempor. Integer sed
                        condimentum massa. Etiam quis nulla dapibus arcu fringilla faucibus.</p>
                </div>



            </div>
        </div>

    </div>

    @include('layoutsWeb.footer')
</body>
