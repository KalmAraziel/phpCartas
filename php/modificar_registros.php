<meta charset="utf-8">
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
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tengo Lucards</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>

    <body style="background-color: white;"></body>
    <style type="text/css"></style>
    <div class="contenedor">
        <header class="header ">
            <div class="contenido-header">
                <div class="barra">
                    <a href="/">
                        <img src="imagenes/WhatsApp Image 2020-09-14 at 00.25.28.jpeg" alt="Logo" width="200" height="150">
                    </a>
                    <nav id="navegacion" class="navegacion">
                        <a href="dweva1AndresRuiz.html"><i class="fad fa-home"></i>inicio</a>
                        <a href="quienes_somos.html"><i class="fas fa-dice-d12"></i>Quienes Somos</a>
                        <a href="que_hacemos.html"><i class="fas fa-dice-d20"></i>Que Hacemos</a>
                        <a href="mision_vision.html"><i class="fas fa-dice-d12"></i>Mision y Vision</a>
                        <a href="formulario.html"> <i class="fas fa-dice-d20"></i>Contactenos</a>
                        <a href="login.php"> <i class="fas fa-dice-d20"></i>Login</a>
                        <a href="cerrar_sesion.php"><i class="fas fa-dice-d12"></i>cerrar sesion</a>
                    </nav>
                </div>
            </div> 
<body>
<div class="main-wrapper">
<h1>Modificar Registros </h1>
<br><br>
<?php include("conex.php");?>
<table border:="1" width="100%">
	<tr>
		<th width="41%">Nombre usuario</th>
        <th width="47%">Clave</th>
        <th width="47%">Origen</th>
		<th width="12%">Nivel</th>
	</tr>
<?php 
	$sql = "select * from usuarios";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->nombre_usuario;?></td>
        <td><?php echo $row->clave_usuario;?></td>
        <td><?php echo $row->origen;?></td>
        <td><?php echo $row->nivel_usuario;?></td>
		<td>
<a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>