<?php
	require_once("conect.php");
	$link = Conectarse();


	function registrar($user,$accion){
		$query = "insert into transacciones (user,accion)values('$user','$accion');";
		mysql_query($query);
}

	?>