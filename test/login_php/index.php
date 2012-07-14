<?php
session_start();
?>
M&aacute;s ejemplos en <a href="http://www.empresario.com.mx">Empresario.com.mx</a><br />
Gracias por tus comentarios.<br />
<?php
echo 'Bienvenido, ';
if (isset($_SESSION['k_username'])) {
	echo '<b>'.$_SESSION['k_username'].'</b>.';
	echo '<p><a href="logout.php">Logout</a></p>';
}else{
	echo '<p><a href="login.php">Login</a></p>
	 <p><a href="registrar.php">Registrar</a></p>';
}
?>
