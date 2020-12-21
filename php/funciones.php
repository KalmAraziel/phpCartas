<?php

function obtenerContactos() {
     include ("conex.php");
     try{
          return $conn->query("SELECT id_usuario, nombre, appat, apmat FROM datos_personales");
     } catch(Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}

// Obtiene un contacto toma un id.

function obtenerContacto($id) {
     include  ("conex.php");
     try{
          return $conn->query("SELECT id_usuario, nombre, appat, apmat FROM datos_personales WHERE id_usuario = $id");
     } catch(Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}