<?php 
// Start session 
session_start(); 
  
// Include required functions file 
include('../../includes/functions.inc.php'); 
// If not logged in, redirect to login screen 
// If logged in, unset session variable and display logged-out message 
if (check_login_status() == false) { 
              // Redirect to 
              redirect('../../index.php'); 
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
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
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
          <a class="brand" href="../index.php">NERIO</a>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> Administrador
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Perfil</a></li>
              <li class="divider"></li>
              <li><a href="../../includes/logout.php">Salir</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="#about">Sobre NERIO</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Acciones</li>
              <li class="active"><a href="administrador.php">Inicio</a></li>
              <li><a href="addUsers.php"><i class="icon-plus"></i>Agregar Usuarios</a></li>
              <li><a href="admUsers.php"><i class="icon-pencil"></i>Administrar Usuarios</a></li>
              <li class="nav-header">Reportes</li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Bienvenido</h1>
            <!--<p>//</p>
            <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <div class="row-fluid">
		  <div style="text-align:justify">
            <div class="span4">
              <h2>Ficha de Evaluaci&oacute;n</h2>
              <p>En esta secci&oacute;n mantendr&aacute;n actualizada la informaci&oacute;n respecto a las fichas de evaluaci&oacute;n de cada socio del gimnasio: Peso, porcentaje de grasa, magno, Imc (&iacute;ndice de masa muscular Icc (&iacute;ndice cintura cadera)</p>
              </br></br><p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Ficha Anamnesis</h2>
              <p>Informaci&oacute;n m&eacute;dica de cada socio, utilizada para manejar el adecuado asesoramiento, de las actividades f&iacute;sicas que podr&iacute;a realizar cada socio, los datos contenidos pueden ser: fuma (frecuencia), alcohol (Frecuencia), alerg&iacute;as, medicamentos enfermedades</p>
              </br><p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Rutina Cardiovascular</h2>
              <p>Ingreso de las rutinas que correspondan, dependiendo del nivel o avance que vaya presentando cada socio, har&aacute;n referencia al tipo de ejercicio cardiovascular, aqu&iacute; podr&aacute;n aumentar o disminuir los programas y tiempos de ejecuci&oacute;n, se asignara la m&aacute;quina a utilizar, el nivel y el tiempo que permanecer&aacute; realizando el ejercicio</p>
              <p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
		  <div style="text-align:justify">
            <div class="span4">
              <h2>Rutina Muscular</h2>
              <p>Al igual que las Rutinas Cardiovascular, deber&aacute;n mantener los programas de ejercicios musculares, los cuales se podr&aacute;n aumentar o disminuir tanto los programas y tiempos de ejecuci&oacute;n, va a depender del ejercicio asignado, como abdominales los cuales se realizaran por una cantidad de repeticiones, diferentes tipos o por tiempo</p>
              <p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Clases</h2>
              <p>Este m&oacute;dulo contendr&aacute; la informaci&oacute;n, de cada clase que se imparta en el gimnasio, como Zumaba, Body Combat, Spinning, Crossfit, Aero Box, Localizado, entre otras, lo cual constara con los horarios y los d&iacute;as que se efect&uacute;an.</p>
              </br></br><p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Inventario</h2>
              <p>Registro y mantenci&oacute;n de insumos, maquinarias e implementos en el gimnasio, valores de inscripci&oacute;n y aranceles, como as&iacute; los productos a las venta como bebidas, mu&ntilde;equeras, poleras, colet</p>
              </br></br></br><p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->
			<div class="row-fluid">
		  <div style="text-align:justify">
			<div class="span4">
              <h2>Control de clases</h2>
              <p>Control de asistencia de cada socio, y adem&aacute;s a las clases a las cuales asiste si es as&iacute;, en caso contrario realizar&aacute;n ejercicios en sala (Rutinas cardiovascular y muscular)</p>
              </br></br><p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->
			<div class="span4">
              <h2>Pagos</h2>
              <p>Los pagos de cada socio, es indispensable controlarlos, as&iacute; estar&aacute;n al corriente cuando corresponde la cancelaci&oacute;n de la mensualidad de cada uno.</p>
              </br></br><p><a class="btn" href="#">Ingresa aqu&iacute; &raquo;</a></p>
            </div><!--/span-->			
          </div><!--/row-->
        </div><!--/span-->
	  </div><!--/style-->
	  </div><!--/style-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; PAPAJA 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap-transition.js"></script>
    <script src="../../assets/js/bootstrap-alert.js"></script>
    <script src="../../assets/js/bootstrap-modal.js"></script>
    <script src="../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../assets/js/bootstrap-tab.js"></script>
    <script src="../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../assets/js/bootstrap-popover.js"></script>
    <script src="../../assets/js/bootstrap-button.js"></script>
    <script src="../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>