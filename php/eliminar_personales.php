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
	$query = "select * from datospersonales where id=$id";
	$result=mysql_query($query,$link);
	while($row = mysql_fetch_object($result)){
      
        $usuario['id']=$row->id;
        $usuario['rut']=$row->rut;
        $usuario['nombre']=$row->nombre;
        $usuario['apppat']=$row->apppat;
        $usuario['appmat']=$row->apmat;
        $usuario['domilicio']=$row->domicilio;
        $usuario['fechanacimiento']=$row->fechanacimieno;
    }

?>
<form action="editar.php?id=<?php echo $usuario['id']; ?>&nivel=1" method="post">
    <input type="text" style="display:none;" value="<?php echo $usuario['id'];?>" name="id">
    <input type="text" value="<?php echo $usuario['rut'];?>" name="rut">
    <input type="text" value="<?php echo $usuario['nombre'];?>" name="nombre">
    <input type="text" value="<?php echo $usuario['apppat'];?>" name="origen">
    <input type="text" value="<?php echo $usuario['apmat'];?>" name="apmat">
    <input type="text" value="<?php echo $usuario['domicilio'];?>" name="domicilio">
    <input type="text" value="<?php echo $usuario['fechanacimiento'];?>" name="fechanacimiento">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
        echo "modificar datos";
       
        $nombre = $_POST['nombre_usuario'];
        $clave= $_POST['clave_acceso'];
        $origen= $_POST['origen'];
        $nivel= $_POST['nivel'];
        $id= $usuario['id'];
        $id= $usuario['id'];
        
        $sql=" UPDATE datospersonales SET rut='$rut', nombre='$nombre', apppat='$apppat', apmat='$appmat',domicilio='$domicilio',fechanacimiento='$fechanacimiento'   WHERE ID = $id";
        mysql_query($sql,$link);
		header("location:modificar_registros.php?user=$nombre&accion='in'&nivel=1");
	}
?>
</div>
</body>
</html>