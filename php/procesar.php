<?php

header('Content-Type: application/json');
require("conex.php");

$conexion = Conectarse();

switch ($_GET['accion']) {
    case 'agregar':
        //Recuperamos el precio del producto
        $respuesta = mysql_query("select id_productos, precio from productos where id_productos=".$_POST['codigoproducto'],$conexion);
        $precio = 0;
        while($row = mysql_fetch_object($respuesta)){
            $precio = $row->precio;
        }
        $respuesta = mysql_query("insert into detalle_venta(id_venta,id_producto,cantidad,precio) values ($_GET[codigofactura],$_POST[codigoproducto],$_POST[cantidad],$precio)", $conexion);
        echo json_encode($respuesta);
        break;

    case 'confirmarfactura':
        $respuesta = mysql_query( "update venta set
                                                fecha='$_POST[fecha]',
                                                id_usuario=$_POST[codigocliente]
                                              where id=$_GET[codigofactura]",$conexion);
        echo json_encode($respuesta);        
        break;
    case 'confirmardescartarfactura':
        $respuesta = mysqli_query($conexion, "delete from facturas where codigo=$_GET[codigofactura]");
        $respuesta = mysqli_query($conexion, "delete from detallefactura where codigofactura=$_GET[codigofactura]");
        echo json_encode($respuesta);        

}

?>