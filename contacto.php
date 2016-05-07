<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
    	<link rel="shortcut icon" type="image/x-icon" href="images/favico.ico" />
        <title>Vuala Pole Studio - Contacto</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="vuala pole studio, pole studio, pole, studio, facebook, vuala, sin gravedad, sin limites, yo puedo, vuala pole fitness, fitness" name="keywords"/>
        <!-- hojas de estilo -->
        <link href="css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.min.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="css/main.min.css" media="all" rel="stylesheet" type="text/css"/>
        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
        <!-- JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validadorContacto.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
				$('.carousel').carousel({
					interval:10000
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
                        <h2><a href="index"><span class="logo-clr">Vuala Pole Studio</span></a></h2>
                    </div>
                    <div class="head-right">
                        <div class="top-nav"> <span class="menu"> <img alt="" src="images/icon.png"/></span>
                            <ul class="res">
                                <li>
                                    <a href="index"> <span data-hover="Principal">Principal</span> </a>
                                </li>
                                <li>
                                    <a href="equipo"> <span data-hover="Equipo">Equipo</span> </a>
                                </li>
                                <li>
                                    <a href="horario"> <span data-hover="Horario">Horario</span> </a>
                                </li>
                                <li>
                                    <a href="galeria"> <span data-hover="Galería">Galería</span> </a>
                                </li>
                                <li>
                                    <a href="ubicacion"> <span data-hover="Ubicación">Ubicación</span> </a>
                                </li>
                                <li>
                                    <a class="active" href="contacto"> Contacto </a>
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
        <div class="container-full background-gris ">
        	<section id="slider" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner container-banner">
                    <div class="item active">
                        <img src="images/banner1.jpg" class="adaptar ubicacion1">
                    </div>
                    <div class="item">
                        <img src="images/banner2.jpg" class="adaptar ubicacion2">
                    </div>
                    <div class="item">
                        <img src="images/banner3.jpg" class="adaptar ubicacion3">
                    </div>
                </div>

                <a href="#slider" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#slider" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </section>
        </div>
        
        <!--banner end here-->
        <div class="recent-posts">
            <div class="container">
                <div class="recent-bottom">
                    <div class="col-md-6 recent-left">
                        <h3>Contacto por Correo Eletrónico</h3>
                        <hr>
                        <?php
							if(isset($_POST['enviar'])){
								$email = 'contacto@hpaez';
								$para = $_POST['email'];
								$mensaje = $_POST['mensaje'];
								$asunto  = 'Formulario de Contacto Web';
								$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
								$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
								$cabeceras .= 'From: Contacto Web <contacto@hpaez>' . "\r\n" .
								   'Reply-To: contacto@hpaez.cl' . "\r\n" .
								   'X-Mailer: PHP/' . phpversion();
								   
								$bool1 = mail($email, $asunto, $mensaje, $cabeceras);
								$bool2 = mail($para, "Confirmación Contacto Sitio Web", "Se recibió satisfactoriamente su correo. Le contestaremos a la brevedad posible.", $cabeceras);
								
								if($bool1 == true && $bool2 == true){
									echo "<script type='text/javascript'>alert('El correo fue enviado correctamente.');</script>";
								}else{
									echo "<script type='text/javascript'>alert('Hubo un error. intentelo nuevamente.');</script>";
								}
							} else {
						?>
                        <form enctype="multipart/form-data" id="formularioContacto" name="formularioContacto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <p>
                            <label for="nombre">Nombre Completo:</label>&nbsp;&nbsp;&nbsp;<span class="requerido">*</span><br />
                            <input id="nombre" class="form-control" name="nombre" type="text" value="" size="50" maxlenght="15" placeholder="Ingresar nombre completo"/><br />
                        </p>
                        <p>
                            <label for="email">Correo Electrónico:</label>&nbsp;&nbsp;&nbsp;<span class="requerido">*</span><br />
                            <input id="email" class="form-control" name="email" type="text" value="" size="50" maxlenght="20" placeholder="example@vuala.cl" onChange="javascript:validarEmail('email')"/><br />
                        </p>
                        <p>
                            <label for="mensaje">Mensaje:</label>&nbsp;&nbsp;&nbsp;<span class="requerido">*</span><br />
                            <textarea id="mensaje" class="form-control" name="mensaje" maxlength="400" rows="5" placeholder="Mensaje..."></textarea><br />
                        </p>
                        <p>
                            <input type="button" onclick="validarContacto()" name="enviar" id="enviar" name="enviar" value=" Enviar Correo " />
                        </p>
                        </form>
                        <br>
                        <?php
							}
						?>
                    </div>
                    <div class="col-md-6 recent-right">
                        <h3>Redes Sociales</h3>
                        <hr>
                        <p><a href="https://www.facebook.com/Vual%C3%A1-Pole-Studio-415125465349716/timeline">Facebook</a></p>
                        <p><a href="https://www.instagram.com/vualapolestudio/">Instagram</a></p>
                        
                        <br>
                        <h3>Número Telefónico</h3>
                        <hr>
                        <p>+56 9 9330 3572</p>
                        <br>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--footer star here-->
        <div class="footer">
            <div class="container">
                <div class="footer-main">
                    <div class="footer-top">
                        <div class="col-md-6 footer-news">
                            <h5>Copyright</h5>
                            <hr>
                            <h4>&copy; Todos los derechos a Programadores.cl</h4>
                            <h4>Modificado por GH - Soluciones Informáticas</h4>
                            <br>
                        </div>
                        <div class="col-md-6 footer-news .col-md-offset-4">
                            <h5>Contáctanos</h5>
                            <hr>
                            <h4><a href="https://www.facebook.com/Vual%C3%A1-Pole-Studio-415125465349716/?fref=ts">Facebook</a></h4>
                            <h4><a href="contacto.php">Correo Electronico</a></h4>
                            <h4>+56 9 9330 3572</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>
