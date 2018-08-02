<?php
require ("../clases/Entrevista.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');

 //Entrevista
$idEntrevista = $_POST['id_entrevista'];

eliminarEntrevista($idEntrevista);
// header("location: ../vistas/consultarInformeConfidencial/consultaInformeConfidencial.php?id_entrevista=".$idEntrevista);
header("location: ../vistas/consultar_entrevistas.php");
// header("location: ../vistas/crear_postulante.php");


/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function eliminarEntrevista($idEntrevista){
  Entrevista::eliminarPostulanteByIdEntrevista($idEntrevista);
}

 ?>
