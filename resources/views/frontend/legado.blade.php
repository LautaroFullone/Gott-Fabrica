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
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!--<link rel="stylesheet" href="css/accordion.css">-->

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ URL::asset ('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
</head>


<body class="bg-claro">
    @include('layoutsWeb.header')

    <div class="contenido">

        <div class="grilla-legado-1">

            <div class="imagen">
                <img src="{{ asset('images/empresarios/foto4.jpg') }}" alt="">
            </div>

            <div class="texto">
                <div class="parrafo">

                    <h3 class="titulo">El legado</h3>

                    <p>La tradicional fábrica de sillas de Mar del Plata fue fundada en 1974. Pero
                        la aventura de Oscar Roberto Gonçalves, Juan Carlos Torchelli y Roberto
                        Alfredo Taylor, se inicia mucho antes cuando ingresaron como aprendices
                        en una fábrica del rubro para conocer de primera mano los secretos, las
                        técnicas y la experiencias de los maestros carpinteros. La voluntad de
                        trabajo y la atención de los pequeños detalles constructivos -que diferencian
                        sus productos de los demás- forjó un conocimiento invaluable que continuaron
                        desarrollando al momento de abrir su propia empresa. Desde entonces se
                        dedicaron a materializar y acompañar los deseos de los clientes que se
                        acercaban al taller buscando una pieza especial para el hogar. Así se produjo
                        el primer encuentro con el actual equipo directivo de GOTT, Martín Dalponte,
                        Blas Taladrid y Julio Oliva quienes conocían de primera mano la calidad de
                        manufactura de los productos. El conocimiento técnico de los especialistas fue
                        el punto de partida para construir un plan de diseño sostenible y una cadena
                        de producción industrial que lograra llevar al siguiente nivel la obra de los
                        fundadores sin dejar de la pasión por la fabricación de sillas. En la actualidad,
                        GOTT diseña, produce y comercializa sus productos de forma directa y a través de
                        una amplia red de empresarios y profesionales que nos eligen para materializar
                        sus proyectos. Alcanzando una proyección nacional sin perder de vista la atención
                        personalizada que caracterizó a la marca desde sus orígenes ahora en la nueva
                        fábrica boutique.
                    </p>

                </div>
                <div class="logo titulo">
                    GONÇALVES TORCHELLI TAYLOR <br>
                    <h5 class="titulo">1974</h3>
                </div>

            </div>


        </div>

        <div class="grilla-legado-2">

            <div class="foto-1">

            </div>
            <div class="foto-2">

            </div>
            <div class="foto-3">

            </div>
            <div class="foto-4">

            </div>

            <div class="texto-1">


                <h5 class="titulo">Nuestro plan de trabajo</h5>
                <p>
                    En esta nueva etapa, la propuesta de GOTT es utilizar el know how para
                    asesorar a los clientes que desean <u>revitalizar y reinventar</u> sus sillas,
                    sillones y taburetes a partir de un diagnóstico preciso y un trabajo de puesta
                    en valor con materiales de calidad. Al mismo tiempo, la fábrica produce
                    <u>diversas colecciones</u> para ofrecer una variedad de posibilidades a la hora
                    de equipar espacios de <u>alto tránsito</u> mediante un servicio de contract para
                    restaurante, cafés, cadenas hoteleras y otros emprendimientos inmobiliarios,
                    ofreciendo productos que se destacan en una primera impresión por la elegancia de
                    las líneas y la nobleza en su composición.
                </p>

                <div class="imagen">

                </div>


            </div>

            <div class="texto-2">
                <h5 class="titulo">Nuestros valores</h5>
                <p>
                    En GOTT creemos en el valor de la palabra y trabajamos en el desarrollo de canales de
                    comunicación directa. La agilidad en el asesoramiento tanto a clientes como
                    emprendedores es un compromiso en cada una de las etapas. Por esto ofrecemos
                    diagnóstico virtual de sillas, acompañamiento en una línea de venta exclusiva y
                    atención post venta para favorecer la revitalización de los productos en los casos que
                    es posible optimizar incluso su estado original de fábrica. La integridad es el valor
                    que orienta nuestras decisiones prácticas: utilizamos en la fabricación de sillas
                    madera maciza porque es el mejor material para construir un producto noble como un
                    asiento. Desde un punto de vista técnico, las ventajas son múltiples: la durabilidad,
                    la posibilidad de restauración, la resistencia mecánica. Pero lo más importante es que
                    la madera provee de una gran calidez a las líneas contemporáneas del diseño. <br> <br>
                    Actuar íntegramente es un valor tan relevante que forma parte también de nuestras metas
                    como empresa y nos marca líneas claras de trabajo a diario: › apostamos a la innovación
                    tecnológica en la industrialización de la fabricación;<br>
                    › capacitamos a los integrantes del equipo de GOTT para afrontar los nuevos desafíos;<br>
                    › promovemos un ámbito de trabajo respetuoso y seguro;<br>
                    › adherimos a los principios del comercio justo y competimos construyendo la lealtad con
                    el consumidor;<br>
                    › somos una empresa innovadora y respetamos la propiedad intelectual e industrial;<br>
                    › actuamos responsablemente con la comunidad atendiendo a las medidas vigentes para el
                    cuidado del medio ambiente.<br><br>
                    La integridad es el valor que nos asegura poder compartir la
                    felicidad de dedicarnos a la fabricación de sillas con nuestros hijos, nuestros familiares,
                    nuestros amigos, nuestra comunidad.
                </p>
            </div>
        </div>


    </div>

    @include('layoutsWeb.footer')
</body>
