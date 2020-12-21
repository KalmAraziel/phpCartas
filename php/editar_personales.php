<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros </title>
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
$link=Conectarse();
$usuario=array();
	$query = "select * from datospersonales where id_usuario=$id";
	$result=mysql_query($query,$link);
	while($row = mysql_fetch_object($result)){
        $usuario['id_usuario']=$row->id_usuario;
        $usuario['rut']=$row->rut;
        $usuario['nombre']=$row->nombre;
        $usuario['apppat']=$row->apppat;
        $usuario['appmat']=$row->appmat;
        $usuario['domicilio']=$row->domicilio;
        $usuario['sexo']=$row->sexo;
        $usuario['fechanacimiento']=$row->fechanacimiento;
    }
?>
<form action="editar_personales.php?id=<?php echo $usuario['id_usuario']; ?>" method="post">
    <input type="text" style="display:none;" value="<?php echo $usuario['id_usuario'];?>" name="id_usuario">
    <input type="text" value="<?php echo $usuario['rut'];?>" name="rut">
    <input type="text" value="<?php echo $usuario['nombre'];?>" name="nombre">
    <input type="text" value="<?php echo $usuario['apppat'];?>" name="apppat">
    <input type="text" value="<?php echo $usuario['appmat'];?>" name="appmat">
    <input type="text" value="<?php echo $usuario['domicilio'];?>" name="domicilio">
    <input type="text" value="<?php echo $usuario['sexo'];?>" name="sexo">
    <input type="text" value="<?php echo $usuario['fechanacimiento'];?>" name="fechanacimiento">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
        echo "modificar datos";
        $id_usuario= $usuario['id_usuario'];
        $rut = $_POST['rut'];
        $nombre= $_POST['nombre'];
        $apppat= $_POST['apppat'];
        $appmat= $_POST['appmat'];
        $domicilio= $_POST['domicilio'];
        $sexo= $_POST['sexo'];
        $fechanacimiento= $_POST['fechanacimiento'];
        
        $sql=" UPDATE datospersonales SET rut='$rut', nombre='$nombre', apppat='$apppat', appmat='$appmat', domicilio='$domicilio', sexo='$sexo', fechanacimiento='$fechanacimiento' WHERE id_usuario = $id_usuario";
        mysql_query($sql,$link);
		header("location:datos_personales.php");
	}
?>
</div>
</body>
</html>