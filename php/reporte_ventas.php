<?php

SELECT usu.id as id_usuario , v.id as id_venta, p.id_productos, p.nombre_producto, p.precio FROM usuarios as usu
inner join venta v on v.id_usuario = usu.id
inner join detalle_venta dv on dv.id_venta = v.id
inner join productos p on p.id_productos = dv.id_producto
 where usu.id = 3 and v.id = 71
 ?>