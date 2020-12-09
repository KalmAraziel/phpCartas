<html lang="en">
    <head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	    <link rel="stylesheet" href="main.css">
	    <title>Formulario</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
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
                        <a href="cerrar_sesion.php"> <i class="fas fa-dice-d20"></i>Cerrar Sesion</a>
                    </nav>
                </div>
            </div> 
<body>

    <?php
    include("conex.php");
    $link=Conectarse();
    $user = $_POST["user"];
    $usern = $_POST["nombre_usuario"];
    $origen = $_POST["origen"];
    $op = $_POST["op"];
    $pass = $_POST["pass"];
    $passn = $_POST["clave_acceso"];
    $niveln = $_POST["nivel_usuario"];

    echo $user + "usuario"; 
    if($op=="grabar") 
	{       
        $query = "SELECT * from usuarios where nombre_usuario='$usern';";
		$result=mysql_query($query,$link);
		if ($row = mysql_fetch_array($result))
		{
			echo "Usuario existente ";
		}else
			$query = "INSERT into usuarios (nombre_usuario,clave_acceso,origen,nivel_usuario) values ('$usern', '$passn', '$origen' , '$niveln');";
			mysql_query($query,$link);

            if(mysql_query($query,$link)){
				echo " Usuario Guardado ";
				echo "$usern, $passn ";
			}else{
				echo "No se pudo grabar, compruebe los datos";
				echo "$usern, $passn ";
			}
          echo "echo $query";
    }	
    
?>

	        <div class="container">
		        <div class="form__top">
			    <h1><span>Agregar Usuarios</span></h1>
		        </div>		
		            <form method="post" action="agregar.php">
                        Nombre Usuario
                        <input class="input" name="nombre_usuario" type="text" placeholder="&#128100;  nombre_usuario" required autofocus>
                        Clave
                        <input class="input" name="clave_acceso" type="text" placeholder="&#9993;  clave_acceso" required>
                        Origen
                        <input class="input" name="origen" type="text" placeholder="&#128222;  origen" required>
                        Nivel
                        <input class="input"  name="nivel_usuario" type="text" placeholder="&#8962;   nivel_usuario" required>
                        <input type="hidden" name="user" value="<?php echo $user?>">
                        <input type="hidden" name="pass" value="<?php echo $pass?>">
                        <input type="hidden" name="op" value="grabar">
                        <div class="btn__form">
            	            <input class="btn__submit" type="submit" value="GUARDAR">
            	            <input class="btn__reset" type="reset" value="LIMPIAR">	
                        </div>
                    </form>
	            </div>
	        </div>
    </form>	
    </html>