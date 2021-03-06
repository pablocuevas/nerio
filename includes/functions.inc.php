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
              
    	$tabla_usuarios .= "<tbody><tr><td>" . $row['usuario'] . "</td><td>" . $row['nombre']. "</td><td>" . $row['apellido']. "</td><td>" . $row['fecha_nac']. "</td><td>" . $row['fono_1']. '<td> <a class="btn" data-toggle="modal" href="#modalEliminar" ><i class="icon-trash"></i></a> <a class="btn" data-toggle="modal" href="#modalEditar" ><i class="icon-pencil"></i></a></i></a></td></tr>';
                     
    }
   
   $tabla_usuarios .= '</tbody></table>';
              
    return $tabla_usuarios;
	
}


function comboAlumnos(){

	$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	$sqlAlumnos = "SELECT `usuario`, `nombre`, `apellido`  FROM `usuario` WHERE `roles_id_rol` = 4";
              
    $result = $mysqli->query($sqlAlumnos); 
              
    $comboAlumnos =  '<SELECT name="alumnos"><option>...</option>';
    

    while ($row = $result->fetch_assoc()){
              
    	$comboAlumnos .= '<option VALUE="'.$row['usuario'].'">'.$row['nombre'].' '.$row['apellido'].'</option>';  
    }
   
   $comboAlumnos .= '</SELECT>';
              
    return $comboAlumnos;
	
}

function comboProfesor(){

	$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	$sqlProfesores = "SELECT `usuario`, `nombre`, `apellido`  FROM `usuario` WHERE `roles_id_rol` = 2";
              
    $result = $mysqli->query($sqlProfesores); 
              
    $comboProfesores =  '<SELECT name="profesor"><option>...</option>';
    

    while ($row = $result->fetch_assoc()){
              
    	$comboProfesores .= '<option VALUE="'.$row['usuario'].'">'.$row['nombre'].' '.$row['apellido'].'</option>';  
    }
   
   $comboProfesores .= '</SELECT>';
              
    return $comboProfesores;
	
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