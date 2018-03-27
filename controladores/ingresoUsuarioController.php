<?php
// require ('../clases/ConnQuery.php');
require_once ('../clases/UsuarioClass.php');

$connQuery = new ConnQuery();
$usuarioIngreso = $_POST["user"];
$passIngreso = $_POST["pass"];

$resultadoConUserName = Usuario::ingresarUsuarioUser($usuarioIngreso,$passIngreso);
$idUsuario = null;
session_start();

if ($resultadoConUserName == true) {
  $query = 'select * from usuario where nombre_usuario ="'.$usuarioIngreso.'"';
  $idUsuario = $connQuery->getFila($query)['id_usuario'];

  $_SESSION['usuario'] = $idUsuario;
  header("location: ../vistas/home.php");

} else {
    session_destroy();
    header("location: ../index.php");
    //echo "fallo ingreso";
  }

?>
