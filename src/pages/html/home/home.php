<?php
function encode64($id, $alt, $class, $encoding, $file)
{
    $binary = fread(fopen(__DIR__ . "/" . $file, "r"), filesize(__DIR__ . "/" . $file));
    echo '<img id="' . $id . '" alt="' . $alt . '" class="' . $class . '" src="data:' . $encoding . ';base64,' . base64_encode($binary) . '"/>';
}

function toBase64($encoding, $file)
{
    try {
        $path = __DIR__ . "/" . $file;
        //$path = "src/pages/html/home/" . $file;
        if (file_exists($path)) {

            //
            $binary = fread(fopen($path, "r"), filesize($path));

            //
            echo 'data:' . $encoding . ';base64,' . base64_encode($binary);
        } else {
            throw new Exception("'No existe el archivo'");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function toBase643($encoding, $file)
{
    try {
        $path = __DIR__ . "/" . $file;
        //$path = "src/pages/html/home/" . $file;
        if (file_exists($path)) {

            //
            $binary = fread(fopen($path, "r"), filesize($path));

            //
            echo "src/pages/html/home/" . $file;
        } else {
            throw new Exception("'No existe el archivo'");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<?php toBase64("image/bmp", "assets/images/fav-icon.png") ?>" type="image/x-icon">

    <title>roverin - Soluciones de Software</title>
    <!--
Roverin Technologics - 2021
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php toBase64("text/css", "assets/css/bootstrap.min.css"); ?>">

    <link rel="stylesheet" type="text/css" href="<?php toBase64("text/css", "assets/css/style.css"); ?>">

    <style>
        .welcome-area {
            background-image: linear-gradient(to bottom, var(--gradiente-inicial-1), var(--gradiente-final-1)), url(<?php toBase64("image/bmp", "assets/images/banner-bg.png") ?>);
        }

        .mini:before {
            background-image: linear-gradient(to right, var(--gradiente-inicial-1), var(--gradiente-final-1)), url(<?php toBase64("image/bmp", "assets/images/work-process-bg.png") ?>);
        }

        .counter:before {
            background-image: linear-gradient(to right, var(--gradiente-inicial-1), var(--gradiente-final-1)), url(<?php toBase64("image/bmp", "assets/images/fun-facts-bg.png") ?>);
        }
    </style>

    <link rel="stylesheet" type="text/css" href="<?php toBase643("text/css", "assets/css/font-awesome.css"); ?>">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Inicio: Cabezera ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Inicio: Logo ***** -->
                        <a href="#" class="logo">
                            <img src="<?php toBase64("image/bmp", "assets/images/logo.png") ?>" alt="Roverin tech" />
                        </a>
                        <!-- ***** Fin: Logo ***** -->
                        <!-- ***** Inicio: Menú ***** -->
                        <ul class="nav">
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#lo-que-hacemos" class="active">Lo que hacemos</a></li>
                            <li><a href="#nuestro-software">Nuestro Software</a></li>
                            <li><a href="#tutoriales">Tutoriales</a></li>
                            <li><a href="#contacto">Cont&aacute;ctenos</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Men&uacute;</span>
                        </a>
                        <!-- ***** Fin: Menú ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Fin: Cabezera ***** -->

    <!-- *****Inicio: Inicio ***** -->
    <div class="welcome-area" id="inicio">

        <!-- ***** Inicio: Encabezado de Inicio ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Soluciones <strong>&aacute;giles y eficacez</strong>
                            <br>para acelerar su <strong>negocio</strong>
                        </h1>
                        <p>Servicios de consultor&iacute;a y desarrollo de <strong>Software empresarial</strong> a la
                            medida de sus necesidades y requerimientos...
                        </p>
                        <a href="#nosotros" class="main-button-slider">Saber m&aacute;s</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Fin: Encabezado de Inicio ***** -->
    </div>
    <!-- ***** Fin: Inicio ***** -->

    <!-- ***** Inicio: ¿Por qué nosotros? ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Inicio: Item de Cualidad ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="<?php toBase64("image/bmp", "assets/images/featured-item-01.png") ?>" alt=""></i>
                                </div>
                                <h5 class="features-title">Agilidad de entrega</h5>
                                <p>Generamos <strong>implementaciones de Software</strong> desde cero en un tiempo
                                    r&eacute;cord</p>
                            </div>
                        </div>
                        <!-- ***** Fin: Item de Cualidad ***** -->

                        <!-- ***** Inicio: Item de Cualidad ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="<?php toBase64("image/bmp", "assets/images/featured-item-02.png") ?>" alt=""></i>
                                </div>
                                <h5 class="features-title">Calidad de producto</h5>
                                <p>Nos destacamos por generar un <strong>código limpio, durable, escalable, y
                                        f&aacute;cil de leer</strong></p>
                            </div>
                        </div>
                        <!-- ***** Fin: Item de Cualidad ***** -->

                        <!-- ***** Inicio: Item de Cualidad ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="<?php toBase64("image/bmp", "assets/images/featured-item-03.png") ?>" alt=""></i>
                                </div>
                                <h5 class="features-title">Asesor&iacute;a y acompañamiento</h5>
                                <p>Brindamos <strong>seguimiento</strong> con el fin de llegar a la necesidad, generando
                                    modificaciones
                                </p>
                            </div>
                        </div>
                        <!-- ***** Fin: Item de Cualidad ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Fin: ¿Por qué nosotros? ***** -->

    <!-- ***** Inicio: Lo que hacemos ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="lo-que-hacemos">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?php toBase64("image/bmp", "assets/images/left-image.png") ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Transforme una idea, o concepto en una solución tecnológica para un
                            problema</h2>
                    </div>
                    <div class="left-text">
                        <p><strong>-¿Ha tenido una idea de automatizar una tarea repetitiva que le resta tiempo a usted
                                o
                                a sus colegas?</strong><br>
                            -Si.<br>
                            El momento de modernizarse ha llegado, por esto, le ofrecemos la posibilidad de convertir un
                            problema o tarea que lo aqueja, en una mejora para los objetivos de su negocio</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Reciba asesor&iacute;a por profesionales e impulse
                            su negocio</h2>
                    </div>
                    <div class="left-text">
                        <p>
                            Nuestros profesionales entienden sus necesidades, perm&iacute;tase exponer la
                            problem&aacute;tica junto con su complejidad, buscando el producto que m&aacute;s se adapta
                            <hr>
                            Hable con un asesor por Chat <a href="#" class="main-button">Haga Click Aqu&iacute;</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="<?php toBase64("image/bmp", "assets/images/right-image.png") ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Inicio: Lo que hacemos ***** -->

    <!-- ***** Inicio: Nuestro software ***** -->
    <section class="mini" id="nuestro-software">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Nuestras implementaciones</h1>
                            <p>Desde <strong>p&aacute;ginas y sitios web</strong> hasta el despliegue de
                                <strong>aplicaciones web de pequeña, mediana y gran
                                    embargadura</strong><br><br>
                                Aqui observar&aacute; las herramientas que nos permiten hacerlo posible:
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="<?php toBase64("image/bmp", "assets/images/spa-item-logo.png") ?>" alt=""></i>
                            <strong>Single Page Application</strong>
                            <span>Maneje sus implementaciones sin recargar la página</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="<?php toBase64("image/bmp", "assets/images/resp-design-item-logo.png") ?>" alt=""></i>
                            <strong>Responsive Design</strong>
                            <span>Utilice sus implementaciones en cualquier dispositivo</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="<?php toBase64("image/bmp", "assets/images/cubos-logo.png") ?>" alt=""></i>
                            <strong>API REST HTTP</strong>
                            <span>Gestione su información con los métodos HTTP</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="<?php toBase64("image/bmp", "assets/images/sql-item-logo.png") ?>" alt=""></i>
                            <strong>SQL Servers</strong>
                            <span>Administre su información desde bases de datos especializadas</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="<?php toBase64("image/bmp", "assets/images/ajax-item-logo.png") ?>" alt=""></i>
                            <strong>AJAX</strong>
                            <span>Conecte sus implementaciones en tiempo real de manera asíncrona</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="<?php toBase64("image/bmp", "assets/images/vm-item-logo.png") ?>" alt=""></i>
                            <strong>VM</strong>
                            <span>Realice el despliegue de sus aplicaciones en servidores en remoto</span>
                        </a>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>

    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>22</strong>
                            <span>Ideas<br>materializadas</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>15</strong>
                            <span>Lenguajes<br>de programación</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>190</strong>
                            <span>Personas<br>beneficiadas</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>+220</strong>
                            <span>Horas en<br>ahorro de tiempo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Fin: Nuestro Software ***** -->

    <!-- ***** Inicio: Tutoriales ***** -->
    <section class="section" id="tutoriales">
        <div class="container">
            <!-- ***** Inicio: Título Tutoriales ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Cursos gratiutos</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>En este espacio encontrará cursos cortos y prácticos,<br> haga click en saber más</p>
                    </div>
                </div>
            </div>
            <!-- ***** Fin: Título Tutoriales ***** -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="<?php toBase64("image/bmp", "assets/images/blog-item-02.png") ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">API con php 8.0</a>
                            </h3>
                            <div class="text">
                                Aprenda a crear una API, por sus siglas en inglés Application Programming Interface o
                                Interfaz de programación de Aplicaciones. Utilizaremos el lenguage PHP y el servidor
                                Apache
                            </div>
                            <a href="#tutoriales" class="main-button">Saber Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="<?php toBase64("image/bmp", "assets/images/blog-item-01.png") ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Página web desde cero</a>
                            </h3>
                            <div class="text">
                                Aprenda a crear y desplegar una página web desde cero, utilizando HTML5 y CSS3
                            </div>
                            <a href="#tutoriales" class="main-button">Saber Más</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="<?php toBase64("image/bmp", "assets/images/blog-item-03.png") ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">CRUD con JAVA</a>
                            </h3>
                            <div class="text">
                                Aprenda a crear un CRUD, aplicación que permite crear, leer, actualizar y borrar
                                registros en una base de datos. Utilizaremos el lenguaje Java, con su implementación
                                empresarial (EE), un gestor de base de datos MySQL y el servidor Apache-Tomcat 9
                            </div>
                            <a href="#tutoriales" class="main-button">Saber Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Fin: Tutoriales ***** -->

    <!-- ***** Inicio: Contacto ***** -->
    <section class="section colored" id="contacto">
        <div class="container">
            <!-- ***** Inicio: Titulo de Contacto ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Contacto</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Ahora, describa su idea o proyecto y reciba una rápida respuesta por parte de nuestros
                            asesores, y empiece a potenciar su negocio</p>
                    </div>
                </div>
            </div>
            <!-- ***** Fin: Titulo de Contacto ***** -->

            <div class="row">
                <!-- ***** Inicio: Texto de Contacto ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Queremos saber de usted</h5>
                    <div class="contact-text">
                        <p>Acontinuación escriba su correo electrónico, un número de contacto y su nombre. Luego
                            describa detalladamente su proyecto.
                        </p>
                        <p id="server-response-concact"></p>
                    </div>
                </div>
                <!-- ***** Fin: Texto de Contacto ***** -->

                <!-- ***** Inicio: Formulario de Contacto ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contacto" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="correo" type="email" class="form-control" id="correo" placeholder="Correo electrónico" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="celular" type="text" class="form-control" id="celular" placeholder="Número de celular" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="mensaje" rows="6" class="form-control" id="mensaje" placeholder="Mensaje..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Enviar
                                            mensaje</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Fin: Formulario de Contacto ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Fin: Contacto ***** -->

    <!-- ***** Inicio: Footer ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2021 Roverin Technologics - Colombia</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php toBase64("text/javascript", "assets/js/jquery-2.1.0.min.js"); ?>"></script>

    <!-- Bootstrap -->
    <script src="<?php toBase64("text/javascript", "assets/js/jquery-2.1.0.min.js"); ?>"></script>
    <script src="<?php toBase64("text/javascript", "assets/js/bootstrap.min.js"); ?>"></script>

    <!-- Plugins -->
    <script src="<?php toBase64("text/javascript", "assets/js/scrollreveal.min.js"); ?>"></script>
    <script src="<?php toBase64("text/javascript", "assets/js/waypoints.min.js"); ?>"></script>
    <script src="<?php toBase64("text/javascript", "assets/js/jquery.counterup.min.js"); ?>"></script>
    <script src="<?php toBase64("text/javascript", "assets/js/imgfix.min.js"); ?>"></script>

    <!-- Global Init -->
    <script src="<?php toBase64("text/javascript", "assets/js/custom.js"); ?>"></script>

</body>

</html>