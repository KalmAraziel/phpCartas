
<?php
include(conex.php)
$link= conectarse()
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

$where="";
$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$appat=$_POST['appat'];
$apmat=$_POST['apmat'];

if (isset($_POST['buscar']))
{
	
	if (empty($_POST['rut']))
	{
		$where="where rut like '".$rut."%'";
	}

	else if (empty($_POST['rut']))
	{
		$where="where rut='".$rut."'";
	}

	else
	{
		$where="where nombre like '".$nombre."%' and rut='".$rut."'";
	}
}

$datospersonales="SELECT * FROM datos_personales $where $limit";
$resrut=$conexion->query($datos_personales);
$resnombre=$conexion->query($datos_personales);

if(mysqli_num_rows($resrut)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}
?>
<html lang="es">

	<head>
		<title>Filtro de Búsqueda </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Filtro de Búsqueda</h2>
			</div>
		</header>
		<section>
			<form method="post">
				<input type="text" placeholder="Nombre..." name="nombre"/>
				<select name="rut">
					<option value="">Carrera </option>
					<?
						while ($registroCarreras = $resCarreras->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$registroCarreras['carrera'].'">'.$registroCarreras['carrera'].'</option>';
						}
					?>
				</select>

				<select name="xregistros">
					<option value="">No. de Registros</option>
					<option value="limit 3">3</option>
					<option value="limit 6">6</option>
					<option value="limit 9">9</option>
				</select>
				<button name="buscar" type="submit">Buscar</button>
			</form>
			<table class="table">
				<tr>
					<th>ID_Alumno</th>
					<th>Nombre</th>
					<th>Carrera</th>
					<th>Grupo</th>
				</tr>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{

					echo'<tr>
						 <td>'.$registroAlumnos['id_alumno'].'</td>
						 <td>'.$registroAlumnos['nombre'].'</td>
						 <td>'.$registroAlumnos['carrera'].'</td>
						 <td>'.$registroAlumnos['grupo'].'</td>
						 </tr>';
				}
				?>
			</table>

			<?
				echo $mensaje;
			?>
		</section>
	</body>
</html>


