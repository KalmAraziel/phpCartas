<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tengo Lucards</title>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../styles/estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>

    <body style="background-color: white;"></body>
    <style type="text/css"></style>
    <div class="contenedor">
        <header class="header ">
            <div class="contenido-header">
                <div class="barra">
                    <a href="/">
                        <img src="../imagenes/WhatsApp Image 2020-09-14 at 00.25.28.jpeg" alt="Logo" width="200" height="150">
                    </a>
                    <nav id="navegacion" class="navegacion">
                        <a href=""><i class="fas fa-dice-d12"></i>Datos Personales</a>
                        <a href=""><i class="fas fa-dice-d12"></i>Servicios</a>
                        <a href=""><i class="fas fa-dice-d12"></i>Productos</a>
                        <a href="pdf.php"><i class="fas fa-dice-d12"></i>generar pdf</a>
                        <a href="ventas2.php"><i class="fas fa-dice-d12"></i>ventas</a>
                        <a href="login.php"><i class="fas fa-dice-d12"></i>cerrar sesion</a>
                    </nav>
                </div>
            </div> 
        </header> 
    </div>     
	<h2>buscar</h2>
	<form action="buscar.php" method="post">
		nombre
		 <input type="text">
		 <input type="submit" value="Buscar">
	</form>	

    <?php
	
	if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $sql=" SELECT * from datos personales where nombre=$nombre";
        mysql_query($sql,$link);
	}
?>
	<?php include("conex.php");?>
	<div class="row">
    <div class="col-12">
    <table class="table" border:="1" width="100%">
	<tr>
		<th width="20%">rut</th>
		<th width="10%">Nombre</th>
        <th width="20%">Apellido Paterno</th>
        <th width="20%">Apellido Materno</th>
        <th width="20%">domicilio</th>
		<th width="10%">sexo</th>
		<th width="10%">fecha nacimiento</th>
	</tr>
	<?php
	$link=Conectarse();
    $query = "select * from datospersonales";
	$result=mysql_query($query,$link);
	while($row = mysql_fetch_object($result)){
	?>
	<tr>
	<td>
		<?php echo $row->rut;?></td>
		<td><?php echo $row->nombre;?></td>
        <td><?php echo $row->apppat;?></td>
        <td><?php echo $row->appmat;?></td>
		<td><?php echo $row->domicilio;?></td>
		<td><?php echo $row->sexo;?></td>
		<td><?php echo $row->fechanacimiento;?></td>
        <?php }
         ?>
	</tr>
</html>