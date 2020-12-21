<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="shortcut icon"  href="imagen/icono.png">
	<title>Productos</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="javaScript/jquery-3.2.1.min.js"></script>
<script src="javaScript/alertifyjs/alertify.js"></script>	
<link rel="stylesheet" type="text/css" href="css/style_index.css">
<style type="text/css">
</style>
</head>
<body>


    <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" id="img" src="imagen/icono.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="img" src="imagen/123.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="img" src="imagen/321.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
 <div class="container col-12">
   <div class="row">
    <div class="listado col-12">
      <h1 id="list">Productos</h1>
    </div>
    <br>
    <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="../imagenes/8555543_1.jpg"  height="200" width="200"></h5>
        <p class="card-text"><label id="desayuno">Mazo de cartas pokemon</label><br>Edicion Sol y Luna<br>Contiene 49 Cartas<br>
        Precio: $9.000</p>
        <p class="collapse" id="collapseExample">
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/cine.jpg"></h5>
        <p class="card-text"><label id="desayuno">Desayuno Sorpresa</label><br>Desayunos Sorpresa<br>Espectacular Detalle<br>
        Incluye: $50.000</p>
        <p class="collapse" id="collapseExample2">
    Ver mas Respecto a este Articulo
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"   href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/cereales.jpg"></h5>
        <p class="card-text"><label id="desayuno">Desayuno Sorpresa</label><br>Desayunos Sorpresa<br>Espectacular Detalle<br>
        Incluye: $50.000</p>
        <p class="collapse" id="collapseExample3">
    Ver mas Respecto a este Articulo
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/123.jpg"></h5>
        <p class="card-text"><label id="desayuno">Desayuno Sorpresa</label><br>Desayunos Sorpresa<br>Espectacular Detalle<br>
        Incluye: $50.000</p>
       <p class="collapse" id="collapseExample4">
    Ver mas Respecto a este Articulo
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/bobina.jpg"></h5>
        <p class="card-text"><label id="desayuno">Desayuno Sorpresa</label><br>Desayunos Sorpresa<br>Espectacular Detalle<br>
        Incluye: $50.000</p>
   <p class="collapse" id="collapseExample5">
    Ver mas Respecto a este Articulo
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/1000.png"></h5>
        <p class="card-text"><label id="desayuno">Desayuno Sorpresa</label><br>Desayunos Sorpresa<br>Espectacular Detalle<br>
        Incluye: $50.000</p>
        <p class="collapse" id="collapseExample6">
    Ver mas Respecto a este Articulo
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/500.png"></h5>
        <p class="card-text"><label id="desayuno">Desayuno Sorpresa</label><br>Desayunos Sorpresa<br>Espectacular Detalle<br>
        Incluye: $50.000</p>
        <p class="collapse" id="collapseExample7">
    Ver mas Respecto a este Articulo
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/canino.jpg"></h5>
        <p class="card-text"><label id="desayuno">Desayuno Sorpresa</label><br>Desayunos Sorpresa<br>Espectacular Detalle<br>
        Incluye: $50.000</p>
        <p class="collapse" id="collapseExample8">
    Ver mas Respecto a este Articulo
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
   </div>
 </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Nombre Completo</h6>
        <div class="input-group mb-3">

  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  </div>
  <input type="text" class="form-control" id="completo" placeholder="Nombres Apellidos" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Dirección</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
  
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-home"></i></span>
  </div>
  <input type="text" class="form-control" id="dir" placeholder="Av 17 N 3-35" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Email</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text"  id="basic-addon1"><i class="fa fa-envelope"></i></span>
  </div>
  <input type="email" id="email" class="form-control" placeholder="Correo Electrónico" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Telefono</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text"  id="basic-addon1"><i class="fa fa-phone"></i></span>
  </div>
  <input type="text" id="tel" class="form-control" placeholder="3157876185" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Password</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
  </div>
  <input type="password" minlength="6" id="pass1"  class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
  <input type="password" minlength="6 id="pass2"  class="form-control" placeholder="Confirmación" aria-label="Username" aria-describedby="basic-addon1">
 
</div>
 <h6 id="min">Mínimo 6 Caracteres</h6>
      </div>
      <div id="boton" class="modal-footer text-left">
        
        <input type="submit" value="Registrarse" id="registrar" class="btn btn-primary" data-dismiss="modal" />
      </div>
    </div>
  </div>
</div>

 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contacto de Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-primary alert-dismissible fade show text-left" role="alert">
  <strong>Info!</strong> Si tienes alguna pregunta no dudes en contactarnos. Estaremos atentos a responder cualquier inquietud que tengas.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <h6>Nombre Completo</h6>
        <div class="input-group mb-3">

  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  </div>
  <input type="text" id="nombre" class="form-control" placeholder="Nombres Apellidos" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Email</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
  </div>
  <input type="email" id="mail" class="form-control" placeholder="Correo Electrónico" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Mensaje</h6>
<div class="input-group">

  <textarea class="form-control" id="campo" aria-label="With textarea"></textarea>
</div>

 
      </div>
      <div id="boton" class="modal-footer text-left">
        
        <input type="submit" value="Contactar" id="contactar" class="btn btn-primary" data-dismiss="modal" />
      </div>
    </div>
  </div>
</div>

<div class="modal fade col-12" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-12">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalles del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-12" id="cuerpo">
        <div class="col-sm-6">
          <img id="img_detalle" src="imagen/alcanciabuena.png">
        </div>
        <div class="col-sm-6 text-left">
         <p>
          <i class="icon fa fa-check-square-o"></i>Nombre: Desayuno Sorpresa<br>
           <i class="icon fa fa-check-square-o"></i>Espectacular Detalle, Incluye:<br>
           <i class="icon fa fa-check-square-o"></i>Delicioso Cupcake decorado<br>
           <i class="icon fa fa-check-square-o"></i>Sandwich de Jamón y Queso Importada 710ml<br>
           <i class=" icon fa fa-check-square-o"></i>Vaso en Cristal con Sticker<br>
           <i class="icon fa fa-check-square-o"></i>Caja decorativa<br>
           <i class="icon fa fa-check-square-o"></i>Combas<br>
           <i class="icon fa fa-check-square-o"></i>Tarjeta personalizada<br>
           Valor: 50000<br>
         </p>
        </div>
 
      </div>
      <div id="boton" class="modal-footer text-left">
        <input type="submit" value="Volver" id="añadir al Carrito" class="btn btn-primary" data-dismiss="modal" />
        <input type="submit" value="Añadri al Carrito" id="" class="btn btn-primary" data-dismiss="modal" />
      </div>
    </div>
  </div>
</div>


 <footer class = "footer">
        <div id="cont"  class = "container col-12">
          <div class="row">
           <div  class="col-sm-12 text-center">
            <h2 id="titulo">¿ Cómo Comprar en Obsequiarte.co?</h2>
           </div>
           <div class="col-sm-4 text-center">
            <img id="img_footer" src="imagen/canino.jpg">
            <p id="mensajito">1. Solcitas el regalos que desas obsequiar. Nos Informas<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </p>
           </div>
           <div class="col-sm-4 text-center">
             <img id="img_footer" src="imagen/icono.png">
             <p id="mensajito">2. Define tu forma de pago
            </p>
           </div>
           <div class="col-sm-4 text-center">
             <img id="img_footer" src="imagen/1000.png">
             <p id="mensajito">3. Nosotros te lo enviamos a tu casa gratis
            </p>
           </div>
         </div>
        </div>
        <div id="cont2"  class = "container col-12">
          <div class="row">
           <div  class="col-sm-12 text-left">
            <h2 id="titulo2">Paquetes Especiales a tu Medida</h2>
         </div>
          <div class="col-sm-6 text-left">
            
            <p id="mensajito2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
           </div>
           <div class="col-sm-3 text-center">
             <img id="img_footer2" src="imagen/icono.png">
             <p id="mensajito">2. Define tu forma de pago
            </p>
           </div>
           <div class="col-sm-3 text-center">
             <img id="img_footer2" src="imagen/1000.png">
             <p id="mensajito">3. Nosotros te lo enviamos a tu casa gratis
            </p>
           </div>
        </div>
    </footer>

 <script src="js/indexjs.js"></script>
</body>
</html>