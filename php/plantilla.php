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
                        <a href="ventas2.php?id=<?php echo $_GET['idusuario']?>&nivel=<?php echo $_GET["nivel"]?>"><i class="fas fa-dice-d12"></i>ventas</a>
                        <a href="login.php"><i class="fas fa-dice-d12"></i>cerrar sesion</a>
                    </nav>
                </div>
            </div> 
        </header> 
    </div>     
    <body>
<?php
	require('fpdf/fpdf.php');
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images/logo.png', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Informe De Registros',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}

?>
</html>