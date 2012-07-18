<?php 
// Start session 
session_start(); 
  
// Include required functions file 
require_once('../../includes/functions.inc.php'); 
  
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
            <form class="well" name="insertUser" method="POST" action="insertUser.php">
	            <label>Nombres</label>
	            <input name="nombres" id="nombres" type="text" class="span5" placeholder=".....">
	            <label>Apellidos</label>
	            <input name="apellidos" id="apellidos" type="text" class="span5" placeholder=".....">
	            <label>E-Mail</label>
	            <input name="email" id="email" type="text" class="span5" placeholder="pedro.perez@email.com">
	            <label>Nombre de Usuario</label>
	            <input name="nombre_usuario" id="nombre_usuario" type="text" class="span5" placeholder="nombre.apellido">
	            <label>Contraseña</label>
	            <input name="contrasenia" id="contrasenia" type="text" class="span5" placeholder=".....">
	            <div class="controls">
	            	<label>Rol</label>
		            <label class="radio inline">
	            	<input type="radio" name="rol" id="Usuario" value="option1" checked="">Usuario</label>
	            	<label class="radio inline">
	            	<input type="radio" name="rol" id="Profesor" value="option2">Profesor</label>
	            	<label class="radio inline">
	            	<input type="radio" name="rol" id="Secretaria" value="option3">Secretaria</label>
				</div>
				<br>
	            <div class="controls">
	            	<label>Sexo</label>
	            	<label class="radio inline">
		            <input type="radio" name="sexo" id="Masculino" value="option1" checked="">Masculino</label>
		            <label class="radio inline">
			        <input type="radio" name="sexo" id="Femenino" value="option2">Femenino</label>
                </div>	        
                <br>
                <div class="controls">
	            	<label>Estado Civil</label>
	            	<label class="radio inline">
	            	<input type="radio" name="estado_civil" id="Soltero" value="option1" checked="">Soltero</label>
	            	<label class="radio inline">
	            	<input type="radio" name="estado_civil" id="Casado" value="option2">Casado</label>
	            </div>	    
	            <br>    
	            
	            <label> Fecha de Nacimiento</label>
	            <select id="dia" name="dia" class="span2 inline" style="display:inline;">
	            <?php
		            for($d=1;$d<=31;$d++)
		            {
			            if($d<10)
			            $dd = "0" . $d;
			            else
			            $dd = $d;
			            echo "<option value='$dd'>$dd</option>";
			        }
			    ?>
			    </select>
			    
			    <select id="mes" name="mes" class="span2 inline" style="display:inline;">
			    <?php
				    for($m = 1; $m<=12; $m++)
				    {
					if($m<10)
						$me = "0" . $m;
					else
						$me = $m;
					switch($me)
					{
						case "01": $mes = "Enero"; break;
						case "02": $mes = "Febrero"; break;
						case "03": $mes = "Marzo"; break;
						case "04": $mes = "Abril"; break;
						case "05": $mes = "Mayo"; break;
						case "06": $mes = "Junio"; break;
						case "07": $mes = "Julio"; break;
						case "08": $mes = "Agosto"; break;
						case "09": $mes = "Septiembre"; break;
						case "10": $mes = "Octubre"; break;
						case "11": $mes = "Noviembre"; break;
						case "12": $mes = "Diciembre"; break;			
					}
					echo "<option value='$me'>$mes</option>";
					}
				?>
				</select>
				
				<select id="anio" name="anio" class="span2 inline" style="display:inline;">
				<?php
					$tope = date("Y");
					$edad_max = 45;
					$edad_min = 13;
					for($a= $tope - $edad_max; $a<=$tope - $edad_min; $a++)
					echo "<option value='$a'>$a</option>"; 
				?>
				</select>
	            
	            <label>Telefono 1</label>
	            <input name="fono1" id="fono1" type="text" class="span5" placeholder=".....">

	            <label>Telefono 2</label>
	            <input name="fono2" id="fono2" type="text" class="span5" placeholder=".....">
	            
	            <br>
		        <button type="submit" class="btn btn-success">Crear Usuario</button>
		    </form>
		    
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
