<?php 
  require("conex.php");
  $conexion = Conectarse();
  
  $datos = mysql_query("select pro.id_productos as codigo,
                                            nombre_producto,
                                            round(pro.precio,2) as precio,
                                            deta.cantidad,
                                            round(deta.precio*pro.cantidad,2) as preciototal,
                                            deta.id as coddetalle
                                        from detalle_venta as deta
                                        inner join productos as pro on pro.id_productos=deta.id_producto
                                        where id_venta=$_GET[codigofactura]",$conexion) or die(mysql_error($conexion));
 
  $pago=0;
  while($row = mysql_fetch_object($datos)){
    echo "<tr>";
    echo "<td>$row->codigo</td>";
    echo "<td>$row->nombre_producto</td>";      
    echo "<td class=\"text-right\">$row->cantidad</td>";            
    echo "<td class=\"text-right\">$row->precio</td>";
    echo "<td class=\"text-right\">$row->preciototal</td>";
    echo '<td class="text-right"><a class="btn btn-primary" onclick="borrarItem('.$row->coddetalle.')" role="button" href="#" id="'.$row->coddetalle.'">Borra?</a></td>';
    echo "</tr>";      
    $pago=$pago+$row->preciototal;
  }
  echo "<tr>";
  echo "<td></td>";
  echo "<td></td>";      
  echo "<td></td>";            
  echo "<td class=\"text-right\"><strong>Importe total</strong></td>";              
  echo "<td class=\"text-right\"><strong>".number_format(round($pago,2),2,'.','')."</strong></td>";
  echo "<td></td>";            
  echo "</tr>";


?>