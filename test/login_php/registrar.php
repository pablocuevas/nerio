<?php
session_start();
//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','usuario','password')or die ('Ha fallado la conexi�n: '.mysql_error());
mysql_select_db('NERIO')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function formRegistro(){
?>
<form action="registrar.php" method="post">
Usuario (max 20): 
  <input type="text" name="username" size="20" maxlength="20" /><br />
Password (max 10): 
<input type="password" name="password" size="10" maxlength="10" />
Confirma: <input type="password" name="password2" size="10" maxlength="10" /><br />
Email (max 40): 
<input type="text" name="email" size="20" maxlength="40" /><br />
<input type="submit" value="Registrar" />
</form>
<?php
}
// verificamos si se han enviado ya las variables necesarias.
if (isset($_POST["username"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	$email = $_POST["email"];
	// Hay campos en blanco
	if($username==NULL|$password==NULL|$password2==NULL|$email==NULL) {
		echo "un campo est� vacio.";
		formRegistro();
	}else{
		// �Coinciden las contrase�as?
		if($password!=$password2) {
			echo "Las contrase�as no coinciden";
			formRegistro();
		}else{
			// Comprobamos si el nombre de usuario o la cuenta de correo ya exist�an
			$checkuser = mysql_query("SELECT usuario FROM usuarios WHERE usuario='$username'");
			$username_exist = mysql_num_rows($checkuser);
			$checkemail = mysql_query("SELECT email FROM usuarios WHERE email='$email'");
			$email_exist = mysql_num_rows($checkemail);
			if ($email_exist>0|$username_exist>0) {
				echo "El nombre de usuario o la cuenta de correo estan ya en uso";
				formRegistro();
			}else{
				$query = 'INSERT INTO usuarios (usuario, password, email, fecha)
				VALUES (\''.$username.'\',\''.$password.'\',\''.$email.'\',\''.date("Y-m-d").'\')';
				mysql_query($query) or die(mysql_error());
				echo 'El usuario '.$username.' ha sido registrado de manera satisfactoria.<br />';
				echo 'Ahora puede entrar ingresando su usuario y su password <br />';
				?>
				<FORM ACTION="validar_usuario.php" METHOD="post">
				  Usuario : <INPUT TYPE="text" NAME="usuario" SIZE=20 MAXLENGTH=20><br />
				  Password: <INPUT TYPE="password" NAME="password" SIZE=10 MAXLENGTH=10><br />
				  <INPUT TYPE="submit" VALUE="Ingresar">
				</FORM>
				<?php
			}
		}
	}
}else{
	formRegistro();
}
?>