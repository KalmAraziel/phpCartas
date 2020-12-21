<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tengo Lucards</title>
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
                        <a href="buscar.php"><i class="fas fa-dice-d12"></i>buscar</a>
                        <a href="pdf.php"><i class="fas fa-dice-d12"></i>generar pdf</a>
                        <a href=""><i class="fas fa-dice-d12"></i>ventas</a>
                        <a href="login.php"><i class="fas fa-dice-d12"></i>cerrar sesion</a>
                    </nav>
                </div>
            </div> 
        </header> 
    </div>   
    <body>
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
    <a class="btn btn-primary" href="agregar_personales.php">
            <i class="fa fa-plus fa-lg" aria-hidden="true"></i>agregar usuarios</a>
    <table class="table" border:="1" width="100%">
	<tr>
		<th width="10%">rut</th>
		<th width="10%">Nombre</th>
        <th width="10%">Apellido Paterno</th>
        <th width="10%">Apellido Materno</th>
        <th width="10%">domicilio</th>
		<th width="10%">sexo</th>
        <th width="10%">fecha nacimiento</th>
        <th width="10%">id</th>
	</tr>
	<?php
	$link=Conectarse();
    $query = "select * from datospersonales ";
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
        <td><?php echo $row->id_usuario;?></td>
    </tr>
    <td>
            <a class="btn btn-primary" href="editar_personales.php?id=<?php echo $row->id_usuario;?>">
            <i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
            <a class="btn btn-danger" href="">
            <i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
        </td>
        <?php }
         ?>

        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html> 