<?php
header('Content-Type: application/json');
require("conex.php");

$conexion = Conectarse();

$respuesta = mysql_query( "delete from detalle_venta where id=".$_GET['codigo'],$conexion);
echo json_encode($respuesta);
?>