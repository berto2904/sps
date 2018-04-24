<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/UsuarioClass.php');
require ('../clases/Entrevista.php');

session_start();

if (isset($_SESSION['usuario'])) {
  $idUsuario = $_SESSION['usuario'];

}
else {
  session_destroy();
  header("location: ../index.php");
}

  echo json_encode((Entrevista::consultarEntrevistas()),true);
 ?>
