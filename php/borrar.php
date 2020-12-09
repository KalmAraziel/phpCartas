<?php 
include("function.php");
$id = $_GET['id'];
delete('usuarios','id',$id);
header("location:eliminar_registros.php");
?>