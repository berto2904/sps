<?php
session_start();

if (isset($_SESSION['usuario'])) {
  $idUsuario = $_SESSION['usuario'];

}
else {
  session_destroy();
  header("location: ../index.php");
}

 ?>
