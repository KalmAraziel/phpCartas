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
	<body>
	    <h2>Buscar</h2><br><br>

	    <div>
	    <table><form method="post" action="buscar.php">
		<input type="hidden" name="user" value="$user">
		<input type="hidden" name="accion" value="buscar">
		<tr><th>Nombre</th><th>Direccion</th></tr>
		<tr><td><input type="text" name="Bnombre"></td>
		<td><input type="text" name="Bdirec"></td>
		<td><input type="submit" value="buscar"></td></tr>
	    </table></form>
	    </div>
	    <div>
	    <table><form method="post" action="buscar.php">
		<input type="hidden" name="user" value="$user">
		<input type="hidden" name="accion" value="agregar">
		<tr><th>Nombre</th><th>Direccion</th></tr>
		<tr><td><input type="text" name="Anombre" required></td>
		<td><input type="text" name="Adirec" required></td>
		<td><input type="submit" value="Agregar"></td></tr>
	    </table></form>
	    </div>

        <?php
	    include("conex.php");
        $link=Conectarse();
        $user =$_POST["user"];
        $accion =$_POST["accion"];

        $meta = $_SERVER['REQUEST_METHOD'];
        if($meta == 'GET'){
        $user =$_GET["user"];
        $accion =$_GET["accion"];
        }else if($meta == 'POST'){
        $user =$_POST["user"];
        $accion =$_POST["accion"];
        echo "<div id='resultado'><table><tr>
			<th>Nombre</th>
			<th>Direccion</th>
			</tr>";
	    if($accion != "buscar"){
		$query = "select * from datos_personales";
		$resultado = mysql_query($query);
		while($row = mysql_fetch_array($resultado)){
			echo "<tr><td>$row[0]</td><td>$row[1]</td>
			<td>
			<form method='post' action='buscar.php'>
			<input type='hidden' name='user' value='$user'>
			<input type='hidden' name='accion' value='eliminar'>
			<input type='hidden' name='Ereg' value='$row[0]'>
			<input type='submit' value='Eliminar'>
			</form>
			</td>
			<td>
			<form method='post' action='buscar.php'>
			<input type='hidden' name='user' value='$user'>
			<input type='hidden' name='accion' value='modificar'>
			<input type='hidden' name='Mreg' value='$row[0]'>
			<input type='submit' value='Modificar'>
			</form>
			</td>
			</tr>";
		}
		
	    }else{
		$query = "select * from datos_personales";
		$pase = "0";
		if (!empty($_POST["Bnombre"])){
			$Bnombre = $_POST["Bnombre"];
			$query .= " where entidad like '%$Bnombre%'";
			$pase = "1";
		}
		if(!empty($_POST["Bdirec"])){
			if($pase == "1"){
				$query .= " and ";
			}else{
				$query .= " where ";
			}
			$Bdirec = $_POST["Bdirec"];
			$query .= " direccion like'%$Bdirec%'";
		}
		$resultado = mysql_query($query);
		while($row = mysql_fetch_array($resultado)){
			echo "<tr><td>$row[0]</td><td>$row[1]</td>
			<td>
			<form method='post' action='buscar.php'>
			<input type='hidden' name='user' value='$user'>
			<input type='hidden' name='accion' value='eliminar'>
			<input type='hidden' name='Ereg' value='$row[0]'>
			<input type='submit' value='Eliminar'>
			</form>
			</td>
			<td>
			<form method='post' action='buscar.php'>
			<input type='hidden' name='user' value='$user'>
			<input type='hidden' name='accion' value='modificar'>
			<input type='hidden' name='Mreg' value='$row[0]'>
			<input type='submit' value='Modificar'>
			</form>
			</td>
			</tr>";
		}
	    }
        echo '
        </div><br><a class="boton_aux" href="buscar.php?user=$user&accion=refrescar>target="_parent">Refrescar</a><';	
        ?>
        

    </body>
</html>