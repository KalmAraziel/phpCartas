

 <?php
 include(../php/conex.php);
 include(../php/registrar.php);
 $link = conectarse();
 $usuario = $_POST['nombre_usuario'];
 print_r($usuario);
 $pass = $_POST['clave_acceso'];
 print_r($pass);
 return false;
 /*  
 $result = mysql_query("SELECT * from usuarios where nombre_usuario='" . $usuario . "'");
  
 if($row = mysql_fetch_array($result)){
 if($row['Password'] == $pass){
 session_start();
 $_SESSION['nombre_usuario'] = $usuario;
 header("Location: menu_registros.html");
 exit();
 }
 }else{
  header("Location: index.html");
   exit();
}*/

