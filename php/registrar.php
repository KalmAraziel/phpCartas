<?php
	require_once("conex.php");
	$link = Conectarse();


	function registrar($user,$accion){
		$query = "insert into transacciones (user,accion)values('$user','$accion');";
		mysql_query($query);
}

	?>