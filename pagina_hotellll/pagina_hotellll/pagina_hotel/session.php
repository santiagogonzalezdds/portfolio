<?php
session_start();
if(empty($_SESSION['nombre_usuario'])){
	header('Location: salir.php');
  }
?>
