<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agregar Personas </title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Agregar Personas  </h1>
<br><br>
<?php 
include("conex.php");
$link=Conectarse();
?>
<form action="agregar_personales.php" method="post">
    <input placeholder="rut" type="text" value=""name="rut">
    <input placeholder="nombre" type="text" value=""name="nombre">
    <input placeholder="apellido paterno " type="text" value=""name="apppat">
    <input placeholder="apellido materno" type="text" value=""name="appmat">
    <input placeholder="domicilio" type="text" value=""name="domicilio">
    <input placeholder="sexo" type="text" value=""name="sexo">
    <input placeholder="fecha nacimiento" type="text" value=""name="fechanacimiento">

	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
        echo "modificar datos";
       
        $rut = $_POST['rut'];
        $nombre= $_POST['nombre'];
        $apppat= $_POST['apppat'];
        $appmat= $_POST['appmat'];
        $domicilio = $_POST['domicilio'];
        $sexo = $_POST['sexo'];
        $fechanacimiento = $_POST['fechanacimiento'];
        $sql=" INSERT INTO datospersonales (rut, nombre, apppat, appmat, domicilio, sexo, fechanacimiento) VALUES ('$rut','$nombre','$apppat','$appmat','$domicilio','$sexo','$fechanacimiento')";
        mysql_query($sql,$link);
		header("location:datos_personales.php");
	}
?>
</div>
</body>
</html>