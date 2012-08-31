<?php
include("conexion.php");

if(isset($_POST['nombre']) && !empty($_POST['nombre'])&&
($_POST['usuario']) && !empty($_POST['usuario'])&&
($_POST['pw']) && !empty($_POST['pw'])&&
($_POST['pw2']) && !empty($_POST['pw2'])&&
($_POST['mail']) && !empty($_POST['mail'])&&
$_POST['pw']==$_POST['pw2'])

{

	$con = mysql_connect($host, $usuario, $pw) or die("Error al conectar");
	mysql_select_db($db, $con)  or die("Error al conectar");
	
	mysql_query("INSERT INTO registros (NOMBRE, USUARIO, PW, MAIL) VALUES ('$_POST[nombre]','$_POST[usuario]' , '$_POST[pw]' , '$_POST[mail]')", $con);
	echo "datos ingresados correctamente";
	
}else {
	echo "debe llenar todos los campos y asegurarse que las contraseñas coincidan, inténtelo nuevamente";
}
?>