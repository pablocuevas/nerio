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
              <li class="nav-header">Acciones</li>
              <li><a href="administrador.php">Inicio</a></li>
              <li class="active"><a href="addUsers.php"><i class="icon-plus"></i>Agregar Usuarios</a></li>
              <li><a href="admUsers.php"><i class="icon-pencil"></i>Administrar Usuarios</a></li>
              <li class="nav-header">Reportes</li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
		
		<?php 
		
		switch($_POST['rol']){
            case 'option1':
               $rol =  '4';
               break;
            case 'option2':
               $rol = '2';
               break;
            case 'option3':
               $rol =  '3';
               break;
            default:
               echo ( 'error');
         }
         
         switch($_POST['sexo']){
            case 'option1':
               $sexo = 'Masculino';
               break;
            case 'option2':
               $sexo =  'Femenino';
               break;
            default:
               echo ( 'error');
         }

         switch($_POST['estado_civil']){
            case 'option1':
               $estado_civil = 'Soltero';
               break;
            case 'option2':
               $estado_civil = 'Casado';
               break;
            default:
               echo ( 'error');
         }

         $fecha_nacimiento = $_POST["anio"].'-'.$_POST["mes"].'-'.$_POST["dia"];
		
		if(isset($_POST['email']) && !empty($_POST['email']) && 
			isset($_POST['nombres']) && !empty($_POST['nombres']) && 
			isset($_POST['apellidos']) && !empty($_POST['apellidos']) && 
			isset ($_POST['fono1']) && !empty($_POST['fono1']) && 
			isset ($_POST['nombre_usuario']) && !empty($_POST['nombre_usuario'])&& 
			isset ($_POST['contrasenia']) && !empty($_POST['contrasenia'])&& 
			isset ($_POST['estado_civil']) && !empty($_POST['estado_civil'])&& 
			isset ($_POST['sexo']) && !empty($_POST['sexo'])&& 
			isset ($_POST['rol']) && !empty($_POST['rol'])) { 
			
		$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	$sqlinsertar = "INSERT into usuario ( email , nombre, apellido, sexo, estado_civil, fecha_nac, fono_1, fono_2, usuario, contrasena, roles_id_rol) values ( '" . $_POST["email"] ."' , '". $_POST["nombres"] ."' , '". $_POST["apellidos"] ."' , '". $sexo ."' , '". $estado_civil ."' , '". $fecha_nacimiento ."' , '". $_POST["fono1"] ."' , '". $_POST["fono2"] ."' , '". $_POST["nombre_usuario"] ."' , '". $_POST["contrasenia"] ."' , '". $rol ."' )";
              
        $result = $mysqli->query($sqlinsertar); 
              
//    echo("INSERT into usuario ( email , nombre, apellido, sexo, estado_civil, fecha_nac, fono_1, fono_2, usuario, contrasena, roles_id_rol) values ( '" . $_POST["email"] ."' , '". $_POST["nombres"] ."' , '". $_POST["apellidos"] ."' , '". $sexo ."' , '". $estado_civil ."' , '". $fecha_nacimiento ."' , '". $_POST["fono1"] ."' , '". $_POST["fono2"] ."' , '". $_POST["nombre_usuario"] ."' , '". $_POST["contrasenia"] ."' , '". $rol ."' )");
		      
		      
		 if($result == 'true'){
			echo( '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Muy bien!</strong> El usuario '. $_POST["nombre_usuario"] .' ha sido creado exitosamente</div>');			 
		 }else{			 
			echo(' <div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error</strong>Intente crear nuevamente el usuario</div>');
		 }
		 }else{
			 echo(' <div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error </strong>Intente crear nuevamente el usuario</div>');

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
