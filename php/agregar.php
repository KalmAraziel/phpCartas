<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agregar Usuarios </title>
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
<h1>Editar Registros  </h1>
<br><br>
<?php 
include("conex.php");
$link=Conectarse();
?>
<form action="agregar.php?nivel=1" method="post">
    <input placeholder="nombre" type="text" value=""name="nombre_usuario">
    <input placeholder="clave " type="text" value=""name="clave_acceso">
    <input placeholder="origen" type="text" value=""name="origen">
    <input placeholder="nivel" type="text" value=""name="nivel">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
        echo "modificar datos";
       
        $nombre = $_POST['nombre_usuario'];
        $clave= $_POST['clave_acceso'];
        $origen= $_POST['origen'];
        $nivel= $_POST['nivel'];
        
        $sql=" INSERT INTO usuarios (nombre_usuario, clave_acceso, origen, nivel_usuario) VALUES ('$nombre','$clave','$origen','$nivel')";
        mysql_query($sql,$link);
		header("location:modificar_registros.php?user=$nombre&accion='in'&nivel=1");
	}
?>
</div>
</body>
</html>