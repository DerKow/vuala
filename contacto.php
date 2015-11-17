<?php 
if($_POST){ 
	//texto ordenado de como lo recibiremos  
	$mensaje = "Información del formulario que se envio desde tupagina.com.ar\n";  
	$mensaje .= "Nombre: " . $_POST["nombre"] . "\n";  
	$mensaje .= "Email: " . $_POST["email"] . "\n";  
	$mensaje .= "Comentario: " . $_POST["mensaje"] . "\n"; 
	$para = "DerKow@outlook.com";
	$titulo = "Prueba Vuala";
	//donde se mandara y asunto con el que lo recibiremos 
	mail($para,$titulo,$mensaje); 
	
	echo "<script>alert('Correo enviado con éxtio.');</script>";  
} 
?>

<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
    	<link rel="shortcut icon" type="image/x-icon" href="images/proin.ico" />
        <title>Vuala Pole Studio - Geleria</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="vuala pole studio, pole studio, pole, studio, facebook, vuala, sin gravedad, sin limites, yo puedo," name="keywords"/>
        <!-- hojas de estilo -->
        <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
        <!-- JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/move-top.js" type="text/javascript"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/easing.js" type="text/javascript"></script>
		<script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);
            
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
		<script type="text/javascript">
            jQuery(document).ready(function($) {
                    $(".scroll").click(function(event) {
                        event.preventDefault();
                        $('html,body').animate({
                            scrollTop: $(this.hash).offset().top
                        }, 1000);
                    });
            });
        </script>
        <script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider({
				  
				});
			});
		</script>
    </head>
    <body> 
        <!--header start here-->
        <div class="header">
            <div class="container">
                <div class="header-main">
                    <div class="logo">
                        <h2> <a href="index.html"> <span class="logo-clr"> Vuala Pole Studio </span> </a> </h2>
                    </div>
                    <div class="head-right">
                        <div class="top-nav"> <span class="menu"> <img alt="" src="images/icon.png"/></span>
                            <ul class="res">
                                <li>
                                    <a href="index.php"> <span data-hover="Principal">Principal</span> </a>
                                </li>
                                <li>
                                    <a href="equipo.php"> <span data-hover="Equipo">Equipo</span> </a>
                                </li>
                                <li>
                                    <a href="horario.php"> <span data-hover="Horario">Horario</span> </a>
                                </li>
                                <li>
                                    <a href="galeria.php"> <span data-hover="Galería">Galería</span> </a>
                                </li>
                                <li>
                                    <a href="ubicacion.php"> <span data-hover="Ubicación">Ubicación</span> </a>
                                </li>
                                <li>
                                    <a class="active" href="contacto.php"> Contacto </a>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <!-- script-for-menu --> 
                            <script>
                                $("span.menu")
                                    .click(function() {
                                        $("ul.res")
                                        .slideToggle(300, function() {});
                                    });
                            </script> 
                              <!-- /script-for-menu --> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header end here--> 
        <!--banner start here-->
        <div class="container-full background-gris container-banner">
                    <ul class="bxslider">
                        <li>
                            <div class="container">
                                <div class="row topMitad Right">
                                    <h1>Sitios Responsive</h1>
                                    Tu sitio web en todos los dispositivos
                                </div>
                            </div>
                            <a href="//pxl.cl/diseno-web">
                                <img src="http://pxl.cl/wp-content/themes/BLANK-Theme/images/banner2.jpg" title="No te quedes sin tu sitio web" class="img-responsive"/>
                            </a>
                        </li>
                        <li>
                            <div class="container">
                                <div class="row topMitad Left">
                                    <h1>Vende a todo Chile!</h1>
                                    Tenga su propia tienda virtual
                                </div>
                            </div>
                            <a href="//pxl.cl/e-commerce/">
                                <img src="http://pxl.cl/wp-content/themes/BLANK-Theme/images/banner3.jpg" title="Tenga su tienda virtual, venda a todo Chile" class="img-responsive"/>
                            </a>
                        </li>
                        <li>
                            <div class="container">
                                <div class="row topMitad Right40">
                                    <h1>La Creatividad nos acompa&ntilde;a</h1>
                                    Todos nuestros trabajos son únicos, nada lo igualar&aacute;.
                                </div>
                            </div>
                            <a href="//pxl.cl/contacto#formulario">
                                <img src="http://pxl.cl/wp-content/themes/BLANK-Theme/images/banner4.jpg" title="¿Tienes una idea? Contáctanos!" class="img-responsive"/>
                            </a>
                        </li>
                    </ul>
                </div>
        
        <!--banner end here-->
        <div class="recent-posts">
            <div class="container">
                <div class="recent-bottom">
                    <div class="col-md-6 recent-left">
                        <h3>Contacto</h3>
                        <hr>
                        <form id="formularioContacto" name="formularioContacto" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <p>
                            <label for="nombre">Nombre Completo:</label>&nbsp;&nbsp;&nbsp;<span class="requerido">*</span><br />
                            <input id="nombre" class="input" name="nombre" type="text" value="" size="50" maxlenght="15"/><br />
                        </p>
                        <p>
                            <label for="email">Correo Electrónico:</label>&nbsp;&nbsp;&nbsp;<span class="requerido">*</span><br />
                            <input id="email" class="input" name="email" type="text" value="" size="50" maxlenght="20" onChange="javascript:validarEmail('email')"/><br />
                        </p>
                        <p>
                            <label for="mensaje">Asunto:</label>&nbsp;&nbsp;&nbsp;<span class="requerido">*</span><br />
                            <textarea id="mensaje" class="input" name="mensaje" maxlength="306" style="max-height:150px;max-width:370px;min-height:150px;min-width:370px"></textarea><br />
                        </p>
                        <p>
                            <input type="button" onclick="validarContacto()" name="enviar" id="enviar" value=" Enviar Correo " />
                        </p>
                        </form>
                        <br>
                    </div>
                    <div class="col-md-6 recent-right">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <link href="css/swipebox.css" rel="stylesheet">
        <script src="js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
                jQuery(function($) {
                    $(".swipebox").swipebox();
                });
            </script> 
        <!--footer star here-->
        <div class="footer">
            <div class="container">
                <div class="footer-main">
                    <div class="footer-top">
                        <div class="col-md-6 footer-news">
                            <h5>Copyright</h5>
                            <hr>
                            <h4>&copy; Todos los derechos a GH - Soluciones Informáticas.</h4>
                        </div>
                        <div class="col-md-6 footer-news .col-md-offset-4">
                            <h5>Contáctanos</h5>
                            <hr>
                            <h4><a href="https://www.facebook.com/Vual%C3%A1-Pole-Studio-415125465349716/?fref=ts">Facebook</a></h4>
                            <h4><a href="contacto.php">Correo Electronico</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>
