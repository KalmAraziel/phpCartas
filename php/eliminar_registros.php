<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
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
	width:98%;
	
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
<h1>Eliminar Registros</h1>
<br><br>

<?php
	include("conex.php");
?>
<table border ="1" width="100%">
	<tr>
		<th width="41%">Nombre</th>
        <th width="50%">clave</th>
        <th width="50%">origen</th>
		<th width="9%">nivel</th>
	</tr>
<?php 
include (function.php)
	$sql = "select * from usuarios";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->nombres;?></td>
        <td><?php echo $row->clave;?></td>
        <td><?php echo $row->origen;?></td>
        <td><?php echo $row->nivel;?></td>
		<td>
   <a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>
