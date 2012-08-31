<?php
session_start();


if(isset($_SESSION['user'])){
		echo "puedes ver esta pagina, gracias por iniciar sesión";
		echo "<br><a href=destrir.php>Cerrar Sesion</a>";
}else{
	echo "no has iniciado sesión, registrate o inicia sesion";
}


?>