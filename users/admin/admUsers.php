<?php 
// Start session 
session_start(); 
  
// Include required functions file 
require_once('../../includes/functions.inc.php'); 
  
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
    
    <script type="text/javascript">
    	$('#myModal').modal('hide')
    </script>
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
              <li><a href="../includes/logout.php">Salir</a></li>
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
              <li><a href="addUsers.php"><i class="icon-plus"></i>Agregar Usuarios</a></li>
              <li class="active"><a href="admUsers.php"><i class="icon-pencil"></i>Administrar Usuarios</a></li>
              <li class="nav-header">Reportes</li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
            <table class="table">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>Nombre</th>
            			<th>Apellido</th>
            			<th>Sexo</th>
            			<th>Estado Civil</th>
            			<th>Fecha Nacimiento</th>
            			<th>Fono</th>
            			<th>User Name</th>
            			<th>E-Mail</th>
            			<th>Opciones</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr>
            			<td>1</td>
            			<td>Mark</td>
            			<td>Otto</td>
            			<td>@mdo</td>
            			<td>1</td>
            			<td>Mark</td>
            			<td>Otto</td>
            			<td>@mdo</td>
            			<td>@mdo</td> 
            			<td> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-trash"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-pencil"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-search"></i></a></td>             			
            		</tr>
            		<tr>
            			<td>1</td>
            			<td>Mark</td>
            			<td>Otto</td>
            			<td>@mdo</td>
            			<td>1</td>
            			<td>Mark</td>
            			<td>Otto</td>
            			<td>@mdo</td>
            			<td>@mdo</td> 
            			<td> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-trash"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-pencil"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-search"></i></a></td>    
			        </tr>
			        <tr>
            			<td>1</td>
            			<td>Mark</td>
            			<td>Otto</td>
            			<td>@mdo</td>
            			<td>1</td>
            			<td>Mark</td>
            			<td>Otto</td>
            			<td>@mdo</td>
            			<td>@mdo</td> 
            			<td> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-trash"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-pencil"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-search"></i></a></td>    
			        </tr>
			   </tbody>
			</table>

			<ul class="pager">
				<li class="previous disabled">
					<a href="#">&larr; Older</a>
				</li>
				<li class="next">
					<a href="#">Newer &rarr;</a>
				</li>
			</ul>


			   
        </div><!--/span-->
        
      </div><!--/row-->
      <hr>
      

      <footer>
        <p>&copy; PAPAJA 2012</p>
      </footer>

    </div><!--/.fluid-container-->
    <div class="modal" id="myModal">
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body?</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>

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
