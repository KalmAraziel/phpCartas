<?php
	include("conex.php");
	$link = Conectarse();
	require('fpdf/fpdf.php');
	if(isset($_POST["accion"])){
	if($_POST["accion"] == "pdfhistpac"){
		include 'plantilla.php';
		$query = "SELECT usu.id as id_usuario , v.id as id_venta, p.id_productos, p.nombre_producto, p.precio FROM usuarios as usu
		inner join venta v on v.id_usuario = usu.id
		inner join detalle_venta dv on dv.id_venta = v.id
		inner join productos p on p.id_productos = dv.id_producto
		 where usu.id = 3; p.* from pacientes p inner join usuarios u on p.origen = u.id_origen where u.user = '$user'";
		$resultado = mysql_query($query);
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
	
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,0,'Rut',1,0,'C',1);
		$pdf->Cell(70,6,'Nombre',1,1,'C',1);
		$pdf->Cell(70,6,'Ap. Paterno',1,1,'C',1);
		$pdf->Cell(70,6,'Ap. Materno',1,1,'C',1);
		$pdf->Cell(0,6,'Origen',1,1,'C',1);
		$pdf->Cell(70,6,'Sexo',1,1,'C',1);
		$pdf->Cell(70,6,'Fecha',1,1,'C',1);
		$pdf->SetFont('Arial','',10);
	
		while($row = mysql_fetch_row($resultado))
		{
			$pdf->Cell(70,6,$row['0'],1,0,'C');
		}
		$pdf->Output('reporte.pdf','C');
	//}
//}
?>