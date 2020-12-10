<!doctype html>
<html>

<head>
  <title>Facturación</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
</head>
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
                        <a href="ventas2.php?id=<?php echo $_GET['idusuario']?>&nivel=<?php echo $_GET["nivel"]?>"><i class="fas fa-dice-d12"></i>ventas</a>
                        <a href="cerrar_sesion.php"><i class="fas fa-dice-d12"></i>cerrar sesion</a>
                    </nav>
                </div>
            </div> 
        </header> 
    </div>     
<body>

  <?php
  require("conex.php");
  $con = Conectarse();
  $consulta = mysql_query( "insert into venta() values ()", $con)
    or die(mysqli_error($con));
  $codigofactura = mysql_insert_id();
  ?>


  <div class="container">
    <div class="row mt-4">
      <div class="col-md">
        
        <div class="form-group row">
          <label for="CodigoFactura" class="col-lg-3 col-form-label">Número de factura:</label>
          <div class="col-lg-3">
            <input type="text" disabled class="form-control" id="CodigoFactura" value="<?php echo $codigofactura; ?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="Fecha" class="col-lg-3 col-form-label">Fecha de emisión:</label>
          <div class="col-lg-3">
            <input type="date" class="form-control" id="Fecha">
          </div>
        </div>

        <div class="form-group row">
          <label for="CodigoCliente" class="col-lg-3 col-form-label">Cliente:</label>
          <div class="col-lg-3">
            <select class="form-control" id="CodigoCliente">
            <option value='0'>Seleccionar Cliente</option>
             <?php
             
              $consulta = mysql_query( "select id, nombre_usuario from usuarios where id= $_GET[id]",$con)
                or die(mysql_error($con));
            
             
             
              while($row = mysql_fetch_object($consulta)){
              ?>
              
               <option value="<?php echo $row->id ?>"> <?php echo $row->nombre_usuario;?></option>";
               
              <?php
              } ?>


              
             
              ?>
            </select>
          </div>
        </div>


      </div>
    </div>


    <div class="row mt-4">
      <div class="col-md">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Código de Artículo</th>
              <th>Descripción</th>
              <th class="text-right">Cantidad</th>
              <th class="text-right">Precio Unitario</th>
              <th class="text-right">Total</th>
              <th class="text-right"></th>
            </tr>
          </thead>
          <tbody id="DetalleFactura">

          </tbody>
        </table>
        <button type="button" id="btnAgregarProducto" class="btn btn-success">Agregar Producto</button>
        <button type="button" id="btnTerminarFactura" class="btn btn-success">Terminar Factura</button>
      </div>
    </div>

  </div>



  <!-- ModalProducto(Agregar) -->
  <div class="modal fade" id="ModalProducto" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label>Producto:</label>
            <select class="form-control" id="CodigoProducto">
             <?php
             
              $consulta = mysql_query( "select id_productos, nombre_producto, precio from productos",$con)
                or die(mysql_error($con));
            
             
             
              while($row = mysql_fetch_object($consulta)){
              ?>
              
               <option value="<?php echo $row->id_productos ?>"> <?php echo $row->nombre_producto;?></option>
               
              <?php
              } ?>


              
             
              ?>
            </select>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Cantidad:</label>
              <input type="number" id="Cantidad" class="form-control" placeholder="" min="1">
            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" id="btnConfirmarAgregarProducto" class="btn btn-success">Agregar a la factura</button>
          <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ModalFinFactura -->
  <div class="modal fade" id="ModalFinFactura" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="max-width: 600px" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1>Acciones</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnConfirmarFactura" class="btn btn-success">Confirmar Factura</button>
          <button type="button" id="btnConfirmarImprimirFactura" class="btn btn-success">Confirmar e Imprimir Factura</button>
          <button type="button" id="btnConfirmarDescartarFactura" class="btn btn-success">Descartar la Factura</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ModalConfirmarBorrar -->
  <div class="modal fade" id="ModalConfirmarBorrar" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="max-width: 600px" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1>¿Realmente quiere borrarlo?</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <a type="button" id="btnConfirmarBorrado" class="btn btn-success btnConfirmarBorrado">Confirmar</a>
          <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {

      var producto;
      var cliente;

      document.getElementById('Fecha').valueAsDate = new Date();

      //Boton que muestra el diálogo de agregar producto
      $('#btnAgregarProducto').click(function() {
        LimpiarFormulario();
        $("#Cantidad").val("1");
        $("#ModalProducto").modal();
      });

      //Boton que agrega el producto al detalle
      $('#btnConfirmarAgregarProducto').click(function() {
        RecolectarDatosFormulario();
        $("#ModalProducto").modal('hide');
        if ($("#Cantidad").val() == "") { //Controlamos que no esté vacío la cantidad de productos
          alert('no puede estar vacío la cantidad de productos.');
          return;
        }
        EnviarInformacionProducto("agregar");
      });

      //Boton terminar factura
      $('#btnTerminarFactura').click(function() {
        $("#ModalFinFactura").modal();
      });

      //Boton confirmar factura
      $('#btnConfirmarFactura').click(function() {
        if ($('#CodigoCliente').val() == 0) {
          alert('Debe seleccionar un cliente');
          return;
        }
        RecolectarDatosCliente();
        EnviarInformacionFactura("confirmarfactura");
      });

      //Boton que descarta la factura generada borrando tanto en la tabla de facturas como detallefactura
      $('#btnConfirmarDescartarFactura').click(function() {
        RecolectarDatosCliente();
        EnviarInformacionFactura("confirmardescartarfactura");
      });

      //Boton confirmar factura y ademas genera pdf
      $('#btnConfirmarImprimirFactura').click(function() {
        if ($('#CodigoCliente').val() == 0) {
          alert('Debe seleccionar un cliente');
          return;
        }
        RecolectarDatosCliente();
        EnviarInformacionFacturaImprimir("confirmarfactura");
      });

      function RecolectarDatosFormulario() {
        producto = {
          codigoproducto: $('#CodigoProducto').val(),
          cantidad: $('#Cantidad').val()
        };
      }

      function RecolectarDatosCliente() {
        cliente = {
          codigocliente: $('#CodigoCliente').val(),
          fecha: $('#Fecha').val()
        };
      }

      //Funciones AJAX para enviar y recuperar datos del servidor
      //******************************************************* 
      function EnviarInformacionProducto(accion) {
        $.ajax({
          type: 'POST',
          url: 'procesar.php?accion=' + accion + '&codigofactura=' + <?php echo $codigofactura ?>,
          data: producto,
          success: function(msg) {
            RecuperarDetalle();
          },
          error: function() {
            alert("Hay un error ..");
          }
        });
      }

      function EnviarInformacionFactura(accion) {
        $.ajax({
          type: 'POST',
          url: 'procesar.php?accion=' + accion + '&codigofactura=' + <?php echo $codigofactura ?>,
          data: cliente,
          success: function(msg) {
            window.location = 'index.php';
          },
          error: function() {
            alert("Hay un error ..");
          }
        });
      }

      function EnviarInformacionFacturaImprimir(accion) {
        $.ajax({
          type: 'POST',
          url: 'procesar.php?accion=' + accion + '&codigofactura=' + <?php echo $codigofactura ?>,
          data: cliente,
          success: function(msg) {
            window.open('pdffactura.php?' + '&codigofactura=' + <?php echo $codigofactura ?>, '_blank');
            window.location = 'index.php';
          },
          error: function() {
            alert("Hay un error ..");
          }
        });
      }


      function LimpiarFormulario() {
        $('#Cantidad').val('');
      }



    });

    //Se ejecuta cuando se presiona un boton de borrar un item del detalle
    var cod;

    function borrarItem(coddetalle) {
      cod = coddetalle;
      $("#ModalConfirmarBorrar").modal();
    }

    $('#btnConfirmarBorrado').click(function(e) {
      console.log("asdasdasdasd");
      $("#ModalConfirmarBorrar").modal('hide');
      $.ajax({
        type: 'POST',
        url: 'borrarproductodetalle.php?codigo=' + cod,
        success: function(msg) {
          RecuperarDetalle();
        },
        error: function() {
          alert("Hay un error ..");
        }
      });
    });




    function RecuperarDetalle() {
      $.ajax({
        type: 'GET',
        url: 'recuperardetalle.php?codigofactura=' + <?php echo $codigofactura ?>,
        success: function(datos) {
          document.getElementById('DetalleFactura').innerHTML = datos;
        },
        error: function() {
          alert("Hay un error ..");
        }

      });

    }
  </script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
</body>

</html>