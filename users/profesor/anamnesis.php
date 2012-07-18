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
              <li><a href="evaluacion.php"><i class="icon-chevron-right"></i>Evaluación</a></li>
              <li class="active"><a href="anamnesis.php"><i class="icon-chevron-right"></i>Anamnesis</a></li>
              <li><a href="cardiovascular.php"><i class="icon-chevron-right"></i>Cardiovascular</a></li>
              <li><a href="muscular.php"><i class="icon-chevron-right"></i>Muscular</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
		<h1>FORMULARIO DE ANAMNESIS</h1>
            <form class="well" name="anamnesis" method="POST" action="guardarficha.php">
             <label> Fecha</label>
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
					$edad_min = 0;
					for($a= $tope - $edad_max; $a<=$tope - $edad_min; $a++)
					echo "<option value='$a'>$a</option>"; 
				?>
				</select>
				
				<label>Alumno</label>
				<?php echo(comboAlumnos()) ?>
	            
	            <label>Profesor</label>
	            <?php echo(comboProfesor()) ?>
				
				
	          	<div class="controls">
	            	<label>Fuma</label>
		            <label class="radio inline">
	            	<input type="radio" name="fuma" id="fuma" value="option1" checked="">Si</label>
	            	<label class="radio inline">
	            	<input type="radio" name="fuma" id="fuma" value="option2">No</label>
	            </div></br>
				<label>Frecuencia</label>
					<input name="frec_fuma" id="frec_fuma" type="text" class="span5" placeholder=".....">
	           <div class="controls">
	            	<label>Alcohol</label>
		            <label class="radio inline">
	            	<input type="radio" name="alcohol" id="alcohol" value="option1" checked="">Si</label>
	            	<label class="radio inline">
	            	<input type="radio" name="alcohol" id="alcohol" value="option2">No</label>
	            </div></br>
				<label>Frecuencia</label>
					<input name="frec_alcohol" id="frec_alcohol" type="text" class="span5" placeholder=".....">
	            <label></label>
				<label>Enfermedades</label>
					<input name="enfermedades" id="enfermedades" type="text" class="span5" placeholder=".....">
				<label>Medicamentos</label>
					<input name="enfermedades" id="enfermedades" type="text" class="span5" placeholder=".....">	
	            <div class="controls">
	            		            
	            
	            <label>Observaciones</label>
	            <textarea name="observacion" id="observacion" class="input-xlarge" id="textarea" rows="6"></textarea>

	            <br>
	            <input name="tipoficha" id="tipoficha" type="hidden" value="anamnesis"/>
		        <button type="submit" class="btn btn-success">Agregar Ficha</button>
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
