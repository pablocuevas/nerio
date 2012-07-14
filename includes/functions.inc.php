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
function redirect($tipoUsuario) { 
			  switch ($tipoUsuario){
			  
				case "administrador":
				header('Location: ../users/admin/administrador.php');
				break;
				
				case "profesor":
				header('Location: ../users/profesor/profesor.html');
				break;
				
				case "secretaria":
				header('Location: ../users/secretaria/secretaria.html');
				break;
				
				case "usuario":
				header('Location: ../users/alumno/user.html');
				break;
				
				case "home":
				header('Location: ../index.php');
				break;
				
			}
              exit(); 
} 


function insert_user(){
	
	
	
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