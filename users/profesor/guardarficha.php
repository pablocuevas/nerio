<?php 
// Start session 
session_start(); 
  
// Include required functions file 
require_once('../../includes/functions.inc.php'); 
require_once('../../includes/config.inc.php');
  
// If not logged in, redirect to login screen 
// If logged in, unset session variable and display logged-out message 
if (check_login_status() == false) { 
              // Redirect to 
              redirect('home'); 
}
?>
<!DOCTYPE html>
<html lang="es">
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
          <a class="brand" href="../../index.php">NERIO</a>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i>
              <?php print_r($_SESSION['nombre_usuario']); ?>
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
               <li><a href="evaluacion.php"><i class="icon-chevron-right"></i>Evaluación</a></li>
              <li><a href="anamnesis.php"><i class="icon-chevron-right"></i>Anamnesis</a></li>
              <li><a href="cardiovascular.php"><i class="icon-chevron-right"></i>Cardiovascular</a></li>
              <li><a href="muscular.php"><i class="icon-chevron-right"></i>Muscular</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
		
		<?php 
		
		//echo($_POST['tipoficha']);
		
		
		
		switch($_POST['tipoficha']){
            case 'cardio':
               echo( '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Muy bien!</strong> La ficha Cardiovascular se a ingresado con exito</div>');	  
               break;
            case 'anamnesis':
               echo( '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Muy bien!</strong> La ficha de Anamnesis se a ingresado con exito</div>');	
               break;
            case 'evaluacion':
               echo( '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Muy bien!</strong> La ficha de Evaluación se a ingresado con exito</div>');	
               break;
	        case 'muscular':
	           echo( '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Muy bien!</strong> La ficha Muscular se a ingresado con exito</div>');	
	        break;
            default:
               //echo ( 'error');
         }         
      
?>

           		    
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; PPJ 2012</p>
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
