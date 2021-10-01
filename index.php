<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog de Informática diseñado como proyecto de clase." />
    <meta name="keywords" content="Blog, Informática, Salesianas, Programación, Web, Diseño" />
    <meta name="author" content="Daniel Lozano Campano" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="cache-control" content="no-cache" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/Favicon.png" type="image/x-icon">
    <title>Blog de Tecnología</title>
</head>

<body>
    <!-- Header -->

    <header id="header" class="sticky-top">
        <!-- NavBar Principal -->
        <?php include 'navPpal.php' ?>
        <!-- /NavBar Principal -->

        <!-- Navbar Secundario -->
        <nav id="navbar2">
            <div class="container">
                <div class="row text-center pt-2 pb-2">
                    <div class="col-3 col-sm offset-sm-1 col-lg-2 offset-lg-2"><a href="#hero">Principal</a>
                    </div>
                    <div class="col-3 col-sm col-lg-2"><a href="#destacadas">Destacadas</a></div>
                    <div class="col-3 col-sm offset-sm-0 col-lg-2"><a href="#videos">Videos</a></div>
                    <div class="col-3 col-sm col-lg-2"><a href="#contacto">Contacto</a></div>
                </div>
            </div>
        </nav>

        <!-- /Navbar Secundario -->
    </header>

    <!-- /Header -->

    <!-- Aside -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="rss_atom/Ejercicio_01.xml" target="_blank">Archivo RSS</a>
        <a href="rss_atom/Ejercicio_03.xml" target="_blank">Archivo Atom</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()" id="rss"><img src="rss_atom/rss.png" alt="rss" width="50px"></span>

    <!-- /Aside -->

    <!-- Hero -->
    <main id="hero">
        <div class="container mt-4 mb-5">
            <div class="row mt-4">
                <div class="col-md-12 col-lg-8 mb-4 mb-lg-0">
                    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/Hero/hero.jpg" alt="Hawaii 1">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/Hero/iphone12.jpg" alt="Hawaii 2">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/Hero/geforce-rtx-3090.jpg" alt="Hawaii 3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center">
                    <h1 id="frase" class="text-center">Cualquier <b>tecnología</b> suficientemente avanzada es
                        equivalente a la <b>magia</b>.</h1>
                </div>
            </div>
        </div>
    </main>
    <!-- Hero -->

    <!-- Main -->
    <section id="destacadas" class="container">
        <h1><b>Noticias Destacadas</b></h1>
        <div class="fondo-des">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h2>
                            Informática
                        </h2>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col d-lg-none">
                        <img src="images/Destacadas/amd.jpg" alt="AMD RX6000" class="w-100 destacadas-img">
                    </div>
                    <div class="col-md-12 col-lg mb-4 mb-lg-0 align-self-center mt-3 mt-lg-0">
                        <h4>Llegan las gráficas AMD Radeon RX 6000, y con ellas la promesa de competir al fin de tú a tú
                            con lo
                            mejor de Nvidia</h4>
                        Los gamers están de enhorabuena: AMD ha presentado hoy su nueva familia de tarjetas gráficas
                        dedicadas, las
                        AMD Radeon RX 6000, que llegan con la nueva arquitectura RDNA 2 y con un objetivo claro: dejar
                        de estar a la
                        sombra de Nvidia y plantear una alternativa incluso para aquellos que buscan las máximas
                        prestaciones.
                        Tres son las variantes que AMD ha presentado en este lanzamiento inicial: las Radeon RX 6800,
                        las Radeon RX
                        6800 XT y las Radeon RX 6900 XT, dirigidas a competir con las RTX 3070, RTX 3080 e incluso las
                        RTX 3090 de
                        NVIDIA. Con estas gráficas hay una cosa clara: jugar a 4K ha dejado de ser lo excepcional y se
                        convertirá en
                        la norma (si quieres).
                        <p class="mt-3">
                            <a href="noticia1.php">
                                <button class="button-des" type="button">Seguir Leyendo</button>
                            </a>
                        </p>
                    </div>
                    <div class="col d-none d-lg-block">
                        <img src="images/Destacadas/amd.jpg" alt="AMD RX6000" class="w-100 destacadas-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 fondo-des">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h2>
                            Videojuegos y Ordenadores
                        </h2>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col d-lg-none">
                        <img src="images/Destacadas/consolasdes.jpg" alt="PS5 y XBOXSX" class="w-100 destacadas-img">
                    </div>
                    <div class="col-md-12 col-lg mb-4 mb-lg-0 align-self-center mt-3 mt-lg-0">
                        <h4>Cómo encajar las nuevas Xbox Series X y PS5 en la decoración del salón: preguntamos a
                            profesionales del
                            interiorismo y estilo</h4>
                        La nueva generación de consolas ya está aquí: las Xbox Series X y S ya están disponibles y en
                        cuestión de
                        pocos días harán lo propio PS5 y PS5 Digital Edition. Las nuevas consolas de Microsoft y Sony
                        han dado que
                        hablar por su diseño: el gran tamaño y las peculiares líneas de la PS5 por un lado, el
                        contundente formato
                        de Xbox Series X por otro. Que van a llegar a muchos salones para dar horas y horas de diversión
                        es
                        innegable, pero en algunos casos estéticamente van a chocar tanto como intentar colocar la
                        mítica folklórica
                        sobre una tele plana.
                        <p class="mt-3">
                            <a href="noticia2.php">
                                <button type="button" class="button-des">Seguir Leyendo</button>
                            </a>
                        </p>
                    </div>
                    <div class="col d-none d-lg-block">
                        <img src="images/Destacadas/consolasdes.jpg" alt="PS5 y XBOXSX" class="w-100 destacadas-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 fondo-des">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h2>
                            Smartphones
                        </h2>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col d-lg-none">
                        <img src="images/Destacadas/foto.jpg" alt="fotografía" class="w-100 destacadas-img">
                    </div>
                    <div class="col-md-12 col-lg mb-4 mb-lg-0 align-self-center mt-3 mt-lg-0">
                        <h4>14 consejos para mejorar fotos hechas con el móvil y las mejores apps para hacerlo</h4>
                        Hoy vamos a darte algunos consejos para mejorar tus fotos, tanto a la hora de tomarlas como a la
                        hora de
                        editarlas. En tiempos de cuádruples cámaras, buenas cantidades de megapíxeles y el apartado
                        fotográfico como
                        principal baza en muchos teléfonos, es bastante conveniente tener ciertas pautas para exprimir
                        al máximo la
                        cámara de tu móvil.
                        Del mismo modo, vamos a mostrarte las mejoras apps para editar tus fotos, con un listado preciso
                        de aquellas
                        aplicaciones ideales para dejar tus fotografías con un look espectacular.
                        <p class="mt-3">
                            <a href="noticia3.php">
                                <button type="button" class="button-des">Seguir Leyendo</button>
                            </a>
                        </p>
                    </div>
                    <div class="col d-none d-lg-block">
                        <img src="images/Destacadas/foto.jpg" alt="fotografía" class="w-100 destacadas-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Main -->

    <!-- Videos -->
    <section id="videos" class="container mt-4">
        <h1>Videos de Interés</h1>
        <div class="row mt-3">
            <div class="col-md-12 col-lg text-center">
                <iframe src="https://www.youtube.com/embed/NPrKvr49nu8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="500px" height="280px"></iframe>
            </div>
            <div class="col-md-12 col-lg text-center mt-1 mt-lg-0">
                <iframe src="https://www.youtube.com/embed/AE5a2fenjc8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="500px" height="280px"></iframe>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12 col-lg text-center">
                <iframe src="https://www.youtube.com/embed/8KAnebwCAaA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="500px" height="280px"></iframe>
            </div>
            <div class="col-md-12 col-lg text-center mt-1 mt-lg-0">
                <iframe src="https://www.youtube.com/embed/lRvQ0ABvvMQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="500px" height="280px"></iframe>
            </div>
        </div>
    </section>
    <!-- Videos -->

    <!-- Footer y Contacto -->
    <?php include 'footer.php' ?>
    <!-- /Footer y Contacto -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="js/javascript.js"></script>
</body>

</html>