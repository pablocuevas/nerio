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
              <li><a href="anamnesis.php"><i class="icon-chevron-right"></i>Anamnesis</a></li>
              <li><a href="cardiovascular.php"><i class="icon-chevron-right"></i>Cardiovascular</a></li>
              <li class="active"><a href="muscular.php"><i class="icon-chevron-right"></i>Muscular</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
		<h1>Ficha Musculaci&oacute;n</h1>
            <form class="well" name="insertUser" method="POST" action="insertUser.php">
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
				
	          	<label>Ejercicio</label><select name="ejercicio">
					<option>.....</option></br>
					<option>Abdominales</option></br>
					<option>Abductor</option></br>
					<option>Aductor</option></br>
					<option>Biceps</option></br>
					<option>Cuadriceps</option></br>
					<option>Deltoide</option></br>
					<option>Dorsal</option></br>
					<option>Gastronemios</option></br>
					<option>Gluteos</option></br>
					<option>Izquitivial</option></br>
					<option>Pectoral</option></br>
					<option>Psoas</option></br>
					<option>Tirial Anterior</option></br>
					<option>Tren Superior</option></br>
					<option>Triceps</option></br>
					</select></br>
				<label>Series</label> <select name="series">
					<option>.....</option></br>
					<option>1</option></br>
					<option>2</option></br>
					<option>3</option></br>
					<option>4</option></br>
					<option>5</option></br>
					<option>6</option></br>
					<option>7</option></br>
					<option>8</option></br>
					<option>9</option></br>
					<option>10</option></br>
					</select></br>
				<label>Repeticiones</label><select name="repeticiones">
					<option>.....</option></br>	
					<option>10</option></br>
					<option>15</option></br>
					<option>20</option></br>
					<option>25</option></br>
					<option>30</option></br>
					<option>35</option></br>
					<option>40</option></br>
					<option>45</option></br>
					<option>50</option></br>
					</select></br>
				<label>Kilogramos</label><select name="kilogramos">
					<option>.....</option></br>
					<option>40</option></br>
					<option>45</option></br>
					<option>50</option></br>
					<option>55</option></br>
					<option>60</option></br>
					<option>65</option></br>
					<option>70</option></br>
					<option>75</option></br>
					<option>80</option></br>
					<option>85</option></br>
					<option>90</option></br>
					<option>95</option></br>
					<option>100</option></br>
					</select></br>
	            
	            <label>Observaciones</label>
	            <textarea name="observacion" id="observacion" class="input-xlarge" id="textarea" rows="6"></textarea>
	            <br>
		        <button type="submit" class="btn btn-success">Ingresar Ficha</button>
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
