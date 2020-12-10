
<!DOCTYPE html>
<html lang="en" dir="ltr">
  	<head>
    	<meta charset="utf-8">
    	<title>Formulario Login</title>
    	<link rel="stylesheet" href="../styles/style.css">
    	<link rel="stylesheet" href="../styles/estilos.css">
    	<link rel="stylesheet" href="../styles/main.css">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
  	</head>
  	<style type="text/css"></style>
    <div class="contenedor">
        <header class="header ">
            <div class="contenido-header">
                <div class="barra">
                    <a href="/">
                        <img src="../imagenes/WhatsApp Image 2020-09-14 at 00.25.28.jpeg" alt="Logo" width="200" height="150">
                    </a>
                    <nav id="navegacion" class="navegacion">
                        <a href="dweva1AndresRuiz.html"><i class="fad fa-home"></i>inicio</a>
                        <a href="quienes_somos.html"><i class="fas fa-dice-d12"></i>Quienes Somos</a>
                        <a href="que_hacemos.html"><i class="fas fa-dice-d20"></i>Que Hacemos</a>
                        <a href="mision_vision.html"><i class="fas fa-dice-d12"></i>Mision y Vision</a>
                        <a href="formulario.html"> <i class="fas fa-dice-d20"></i>Contactenos</a>
                        <a href="login.php"><i class="fas fa-dice-d20"></i> Login </a>
                    </nav>
                </div>
			</div> 
		</header>
	</div>	
			
	<body>
		<?php
		if (isset($_POST["user"]))
		{
			include("conex.php");
			include("registrar.php");
			$user =$_POST["user"];
			$pass =$_POST["pass"];
			$query = "select * from usuarios where nombre_usuario='$user' and clave_acceso='$pass'";
			$result=mysql_query($query,$link);
			$existe=0;
			echo '<div class="msglogin">';
			while($row = mysql_fetch_array($result))
			{
				$existe=1;
				$id=$row['id'];
				if($row['nivel_usuario'] == 1)
				{
					$link=Conectarse();
		
					echo "<p>Usuario de nivel 1 identificado.</p>";
					header("refresh:3; url=modificar_registros.php?user=$user&accion='in'&nivel=1&idusuario=$id");
					registrar($user,"Inicio de sesion usuario de nivel 1");
					echo "<p>redireccionando...</p>";

	}elseif($row['nivel_usuario'] == 2)
	{
		header("refresh:3; modificar_registros.php?user=$user&accion='in'&nivel=2&idusuario=$id");
		echo "<p>Usuario nivel 2 identificado</p>";
		echo "<p>redireccionando...</p>";
		registrar($user,"Inicio de sesion usuario de nivel 2");
	}
}
if($existe == 0)
{
	echo '<p id="incorrecto">Usuario incorrecto<p>';
}
}
echo "</div>";
?>
<div class="login">
	<section class="form-login">
      	<h5>Iniciar Sesion</h5>
		<form name="FormularioIngreso" method="post" action="login.php">

				<input class="controls" type="text" name="user" placeholder="Usuario" autofocus>
				<input class="controls" type="password" name="pass" placeholder="Contrase&ntilde;a">
				<input class="buttons" type="submit" value="LOGIN">
				<input class="buttons" type="button" name ="" value= "registrar">
		</form>
	</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>








   

 