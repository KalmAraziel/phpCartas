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
                        <a href="cerrar_sesion.php"><i class="fas fa-dice-d12"></i>cerrar sesion</a>
                    </nav>
                </div>
            </div> 
<body>
<div class="">
<h1>Generar Venta <?php echo $_GET["id"] ?> </h1>
<br><br>
<?php include("conex.php");?>
<div class="row">
    <div class="col-12">
    
    <table class="table" border:="1" width="100%">
	<tr>
		<th width="41%">Nombre</th>
        <th width="47%">Descripcion</th>
        <th width="47%">precio</th>
        <th width="12%">cantidad</th>
	</tr>
    <?php 
        $link=Conectarse();

        $query = "select * from productos";

	    $result=mysql_query($query,$link);
	    while($row = mysql_fetch_object($result)){
	    ?>
        <tr>
            <td><?php echo $row->nombre_producto;?></td>
            <td><?php echo $row->descripcion;?></td>
            <td><?php echo $row->precio;?></td>
            <td><?php echo $row->cantidad;?></td>
            <?php
            if ($_GET["nivel"]==1){
            ?>
            
            <td>
                <a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>&nivel=1&user=<?php echo $row->nombre_usuario?>">
                <i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                <a class="btn btn-danger" href="eliminar_registros.php?id=<?php echo $row->id; ?>&nivel=1&user=<?php echo $row->nombre_usuario?>">
                <i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
            </td>
            <?php }
            ?>
        </tr>
    <?php
 } ?>
</table>
    </div>

</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>