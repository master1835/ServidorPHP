<?php
session_start();
include ("conexion.php");

if(isset($_POST['usuario']) && !empty ($_POST['usuario']) &&
isset($_POST['pw']) && !empty ($_POST['pw']))
{

$con= mysql_connect($host, $usuario, $pw) or die ("error al conectar");
mysql_select_db($db, $con)or die ("error al conectarse con la base de datos");

$sel = mysql_query ("SELECT USUARIO, PW FROM registros WHERE USUARIO='$_POST[usuario]'", $con) or die ("error en la consulta");

$sesion=mysql_fetch_array($sel);

if($_POST['pw'] == $sesion['PW']){
	$_SESSION ['user'] = $_POST['usuario'];
	echo "sesion exitosa";
}else{
	echo "combinacion erronea";
}
	

}else{
	echo "debes llenar todos los campos";
}
?>	