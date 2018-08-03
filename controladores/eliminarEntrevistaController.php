<?php
require ("../clases/Entrevista.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');

 //Entrevista
$idEntrevista = $_POST['id_entrevista'];
eliminarEntrevista($idEntrevista);

/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function eliminarEntrevista($idEntrevista){
  Entrevista::eliminarPostulanteByIdEntrevista($idEntrevista);
}

 ?>
