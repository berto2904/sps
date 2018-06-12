<?php
require ("../clases/InformeConfidencial.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');


 //Entrevista
$id_postulante = $_POST['id_postulante'];
$idEntrevista = $_POST['id_entrevista'];
utf8_decode_deep($id_postulante);


eliminarInformeLaboral($id_postulante);
header("location: ../vistas/consultarInformeConfidencial/consultaInformeConfidencial.php?id_entrevista=".$idEntrevista);
// header("location: ../vistas/crear_postulante.php");


/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function eliminarInformeLaboral($id_postulante){
  InformeConfidencial::eliminarInformeConfidencialByIdPostulante($id_postulante);
}

 ?>
