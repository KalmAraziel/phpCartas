<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("conex.php");

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
            <th>CLAVE</th>
            <th>ORIGEN</th>
            <th>NIVEL</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from usuarios') as $row){ 
     ?> 
<tr>
    <td><?php echo $row['id'] 
    ?></td>
    <td><?php echo $row['nombre_usuario'] ?></td>
    <td><?php echo $row['clave_usuarios'] ?></td>
    <td><?php echo $row['origen'] ?></td>
    <td><?php echo $row['nivel'] ?></td>
 </tr>
<?php
	}
?>
</table>
</body>
</html>