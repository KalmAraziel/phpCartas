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
	$query = "select * from usuarios where id=$id";
	$result=mysql_query($query,$link);
	while($row = mysql_fetch_object($result)){
      
        $usuario['id']=$row->id;
        $usuario['nombre_usuario']=$row->nombre_usuario;
        $usuario['clave_acceso']=$row->clave_acceso;
        $usuario['origen']=$row->origen;
        $usuario['nivel_usuario']=$row->nivel_usuario;
    }

?>
<form action="eliminar_registros.php?id=<?php echo $usuario['id']; ?>&nivel=1" method="post">
 <p>¿Desea eliminar la cuenta?</p>
	<button type="submit" name="submit" class="btn btn-danger"> si</button>
	<a>no</a>
</form>

<?php
	
	if(isset($_POST['submit'])){
       
        $nombre = $_POST['nombre_usuario'];
        $clave= $_POST['clave_acceso'];
        $origen= $_POST['origen'];
        $nivel= $_POST['nivel'];
        $id= $usuario['id'];
        
        //$sql=" UPDATE usuarios SET nombre_usuario=".$nombre.",clave_acceso=".$clave.",origen=".$clave.",nivel_usuario=".$nivel." WHERE id=.$id";
        $sql=" DELETE FROM usuarios WHERE ID = $id";
        mysql_query($sql,$link);
		header("location:modificar_registros.php?user=$nombre&accion='in'&nivel=1");
	}
?>
</div>
</body>
</html>