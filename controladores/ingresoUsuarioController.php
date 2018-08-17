<?php
// require ('../clases/ConnQuery.php');
require_once ('../clases/UsuarioClass.php');

$connQuery = new ConnQuery();
$usuarioIngreso = $_POST["user"];
// $passIngreso = $_POST["pass"];
$passIngreso = sha1($_POST["pass"],false);
var_dump($passIngreso);
die();


$resultadoConUserName = Usuario::ingresarUsuarioUser($usuarioIngreso,$passIngreso);
$idUsuario = null;
session_start();

if ($resultadoConUserName == true) {
  $query = 'select * from usuario where nombre_usuario ="'.$usuarioIngreso.'"';

  $usuario = $connQuery->getFila($query);
  $idUsuario = $usuario['id_usuario'];
  $usuarioNombre = $usuario['nombre'];
  $usuarioApellido = $usuario['apellido'];

  $_SESSION['usuario'] = $idUsuario;
  $_SESSION['usuarioNombre'] = $usuarioNombre;
  $_SESSION['usuarioApellido'] = $usuarioApellido;

  header("location: ../vistas/home.php");

} else {
    session_destroy();
    header("location: ../index.php");
    //echo "fallo ingreso";
  }

?>
