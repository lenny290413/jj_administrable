<?php
session_start();
$var_session = $_SESSION['username'];
if($var_session == null || $var_session = ''){
    header("location:login.php");
    die();
}else{
}
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->

<head>
    <title>JJMM | Estudio Contable | Especialistas en gestion empresarial</title>

    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


    <!-- ######### CSS STYLES ######### -->

    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />


    <!-- style switcher -->
    <link rel="stylesheet" media="screen" href="js/style-switcher/color-switcher.css" />
    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" type="text/css" href="js/revolutionslider/css/fullwidth.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="js/revolutionslider/rs-plugin/css/settings.css" media="screen" />



    <!-- faqs -->
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">

    <!-- tabs css -->
    <link rel="stylesheet" type="text/css" href="js/tabs/tabs.css" />

    <!-- testimonials -->
    <link rel="stylesheet" href="js/testimonials/fadeeffect.css" type="text/css" media="all">
    <!--LENIN ESTILOS-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilos_lenin.css">
    <link rel="stylesheet" href="css/panel.css">
    <link rel="stylesheet" href="css/blog.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!--END LENIN STYLES-->
</head>

<body>
    <div class="site_wrapper">
        <!-- HEADER -->
        <header>

            <div class="top entero wow fadeInDown" id="section1">
                <div class="medio">
                    <ul class="redes">
                        <li><a href="https://www.facebook.com/Grupo-Contable-JJMM-1375492852750200/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                    <ul class="contacto">
                        <li class="empty"><a href="mailto:contabilidad@jjmm.com.pe"><i class="fa fa-envelope"></i>&nbsp; contabilidad@jjmm.com.pe</a></li>
                        <li class="empty"><a><i class="fa fa-phone"></i> &nbsp; (01) 425-0125 &nbsp; &nbsp; | &nbsp; &nbsp; (01) 567-0693</a></li>
                    </ul>
                </div>
            </div>
            <!-- Top header bar -->
            <div id="trueHeader " class="entero contenedor_top   " data-wow-delay=".4s">

                <div class="wrapper medio contenedor_menu">
                    <!--MENU LENIN-->
                    <a class="logo_contenedor" href="/">
                        <img class="logo" src="images/logo-lenin.png" alt="">
                    </a>
                    <span class="contenedor_medio" id="nav">
                        <ul class="menu">
                            <li><a id="" href="panel_de_control.php">PANEL DE CONTROL</a></li>
                            <li><a id="" href="crear_articulo.php">CREAR ARTICULO</a></li>
                            <li><a id="" href="eliminar_articulo.php">ELIMINAR ARTICULO</a></li>
                            <li><a id="" href="php/cerrar_sesion.php">CERRAR SESION</a></li>
                            <li><a id="" href="blog.php">BLOG</a></li>
                        </ul>
                       
                    </span>
                    <img class="sello" src="images/logo-grupo-lenin.png" alt="">
                    <img id="btn-menu" class="icono_menu" src="images/logo-menu.png" alt="">
                </div>
            </div>
        </header>
        <!-- end header -->
        <!--EMPIEZA CON EL PANEL-->

        <div class="blog_contenido entero">
            <div class="medio">
                <?php
                include("php/actualizar.php");
                actualizar_codigo();
                ?>
            </div>
        </div>


    </div>
    <div class="footer entero">

        <div class="container medio wow fadeInUp">
            <div class="footer_item first_child">
                <h3>Sede San Martin de Porres</h3>
                <ul class="list">
                    <li>Jr. Iquitos 593
                    </li>
                    <li>San Martin de Porres / Lima / Perú
                    </li>
                    <li>Telefono: (01) 567-0693 | (01) 480-0125
                    </li>
                    <li>Celular: 951 965 242 | 946 149 001
                    </li>
                    <li>E-mail: contabilidad@jjmm.com.pe
                    </li>
                </ul>
            </div>
            <div class="footer_item secound_child">
                <img src="images/logo-footer.png" alt="">
            </div>
            <div class="footer_item tercer_child">
                <h3>Sede San Isidro</h3>
                <ul class="list">
                    <li> Calle Gorriones 151
                    </li>
                    <li> San isidro / Lima / Perú
                    </li>
                    <li> Telefono: (01) 567-0693 | (01) 480-0125
                    </li>
                    <li> Celular: 951 965 242 | 946 149 001
                    </li>
                    <li> E-mail: contabilidad@jjmm.com.pe
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="clearfix"></div>

    <div class="arrow_up"></div>

    <div class="copyright_info">

        <div class="container">

            <div class="one_half">

                <b>Copyright © 2017 <a href="www.stigold.com">STIGold.com</a> All rights reserved.</b>

            </div>

            <div class="one_half last">


            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- Footer
======================================= -->



    <!-- ######### JS FILES ######### -->
    <script type="text/javascript" src="js/wow.min.js"></script>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="js/universal/jquery.js"></script>

    <!-- style switcher -->
    <script src="js/style-switcher/jquery-1.js"></script>
    <script src="js/style-switcher/styleselector.js"></script>

    <!-- main menu -->
    <script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

    <!-- jquery jcarousel -->
    <script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

    <!-- REVOLUTION SLIDER -->
    <script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="js/mainmenu/scripts.js"></script>

    <!-- tabs script -->
    <script type="text/javascript" src="js/tabs/tabs.js"></script>



    <!-- accordion -->
    <script type="text/javascript" src="js/accordion/custom.js"></script>


    <script type="text/javascript" src="js/sticky-menu/core.js"></script>
    <script type="text/javascript" src="js/sticky-menu/modernizr.custom.75180.js"></script>

    <!-- testimonials -->


</body>

</html>
