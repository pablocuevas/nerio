<?php 
// Start session 
session_start(); 
  
// Include required functions file 
include('includes/functions.inc.php'); 
// If not logged in, redirect to login screen 
// If logged in, unset session variable and display logged-out message 
if (check_login_status() == true) { 
		session_destroy(); 
              //Redirect to 
              //redirect($_SESSION['tipo_usuario']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NERIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">NERIO</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="#about">Sobre NERIO</a></li>
              <li><a href="#contact">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->

        </div>
      </div>
    </div>

    <div class="container-fluid">
        <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="span4">
    			<form id="login-form" method="post" action="includes/login.php"> 
    				<fieldset> 
    				<legend>NERIO</legend> 
    				<p>Por favor, ingrese su nombre de usuario y su password</p> 
    				<input type="text" name="username" id="username" placeholder="Nombre de Usuario"/>       
    				<input type="password" name="password" id="password" placeholder="Password"/> 
    				<label for="submit"> 
	    			<input type="submit" name="submit" id="submit" value="Ingresar" /> 
	    			</label> 
	    			</fieldset> 
	    			</form> 
	    	</div>
	    	<div class="span8">
	    	<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="images/carrusel/uno.jpg" alt="uno"/><div class="carousel-caption">
                  <h4>Sala de maquinas</h4>
                  <p>En este sector podr&aacute;s encontrar trotadoras, bicicletas est&aacute;ticas horizontales y normales, m&aacute;quina de gl&uacute;teos, m&aacute;quina para aductor y abductor, para que realices tus ejercicios, adem&aacute;s contamos con colchonetas para trabajar elongaci&oacute;n, y abdominales.</p>
                </div></div>
    <div class="item"><img src="images/carrusel/dos.jpg" alt="dos"/><div class="carousel-caption">
                  <h4>Multi Work</h4>
                  <p>M&aacute;quina utilizada para trabajar, brazos, pectoral, espalda, cu&aacute;driceps, gl&uacute;teos.</p>
                </div></div>
	<div class="item"><img src="images/carrusel/tres.jpg" alt="tres"/><div class="carousel-caption">
                  <h4>Sala Fitnes</h4>
                  <p>Para diversas y divertidas clases o actividades grupales, como Body Combat, Clases de Baile, Localizado, Zumba, Cros fit.</p>
                </div></div>
    <div class="item"><img src="images/carrusel/cuatro.jpg" alt="cuatro"/><div class="carousel-caption">
                  <h4>Sala De Spinning Indoor Ciclyng</h4>
                  <p>Con bicicletas est&aacute;ticas Wortek, para el desarrollo las clases</p>
                </div></div>  
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
	    	</div>
	    </div>
	   </div>
      <hr>

      <footer>
        <p>&copy; PPJ 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script type="text/javascript">$('.carousel').myCarousel()</script>

  </body>
</html>
