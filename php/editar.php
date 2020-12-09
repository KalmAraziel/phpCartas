<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql</title>
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
$id = $_GET['id'];
select_id('tabla_demo','id',$id);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->nombres;?>" name="nombre_usuario">
    <input type="text" value="<?php echo $row->apellidos;?>" name="clave_acceso">
    <input type="text" value="<?php echo $row->origen;?>" name="origen">
    <input type="text" value="<?php echo $row->nivel_usuario;?>" name="nivel">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("nombre_usuarip"=>$_POST['nombre_usuario'], "clave_acceso"=>$_POST['clave_acceso'],"origen"=>$_POST['origen'],"nivel"=>$_POST['nivel']);
		$tbl = "usuarios";
		edit($tbl,$field,'id',$id);
		header("location:modificar_registros.php");
	}
?>
</div>
</body>
</html>