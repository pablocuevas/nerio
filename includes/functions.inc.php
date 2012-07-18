<?php 
/** 
* Crucial Functions for Application 
* 
* @package tpc_tutorials 
* @file    /includes/functions.inc.php 
*/ 
  
/** 
* Redirects to specified page 
* 
* @param string $page Page to redirect user to 
* @return void 
*/ 
require_once('config.inc.php');

function redirect($tipoUsuario) { 
			  switch ($tipoUsuario){

				case "administrador":
				header('Location: ../users/admin/administrador.php');
				break;
				
				case "profesor":
				header('Location: ../users/profesor/profesor.php');
				break;
				
				case "secretaria":
				header('Location: ../users/secretaria/secretaria.php');
				break;
				
				case "usuario":
				header('Location: ../users/alumno/alumno.php');
				break;
				
				case "home":
				header('Location: ../index.php');
				break;
				
			}
              exit(); 
} 


function mostrarUsuarios(){

	$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	$sqlMostrarUsuarios = "SELECT * FROM usuario";
              
    $result = $mysqli->query($sqlMostrarUsuarios); 
              
    $tabla_usuarios = ' <table class="table"><thead><tr><th>Nombre de Usuario</th><th>Nombres</th><th>Apellidos</th><th>Fecha Nacimiento</th><th>Fono</th><th>Opciones</th></tr></thead><tbody><tr>';
              
   while ($row = $result->fetch_assoc()){
              
    	$tabla_usuarios .= "<tbody><tr><td>" . $row['usuario'] . "</td><td>" . $row['nombre']. "</td><td>" . $row['apellido']. "</td><td>" . $row['fecha_nac']. "</td><td>" . $row['fono_1']. '<td> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-trash"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-pencil"></i></a> <a class="btn" data-toggle="modal" href="#myModal" ><i class="icon-search"></i></a></td></tr>';
                     
    }
   
   $tabla_usuarios .= '</tbody></table>';
              
    return $tabla_usuarios;
	
}
  
/** 
* Check login status 
* 
* @return boolean Login status 
*/ 
function check_login_status() { 
              // If $_SESSION['logged_in'] is set, return the status 
              if (isset($_SESSION['logged_in'])) { 
                            return $_SESSION['logged_in']; 
              } 
              return false; 
}
?>