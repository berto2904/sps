<?php
require ("../clases/InformeLaboral.php");
require ("../clases/InformeLaboralPregunta.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');


 //Entrevista
$idRefLaboral = $_POST['id_ref'];
$idEntrevista = $_POST['id_entrevista'];
utf8_decode_deep($idRefLaboral);


eliminarInformeLaboral($idRefLaboral);
header("location: ../vistas/consultarAntecedentesLaborales/consultaAntecedentesLaborales.php?id_entrevista=".$idEntrevista);
// header("location: ../vistas/crear_postulante.php");


/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function eliminarInformeLaboral($idRefLaboral){
  InformeLaboralPregunta::eliminarInformeLaboralPreguntaByIdReferenciaLaboral($idRefLaboral);
  InformeLaboral::eliminarInformeLaboralByIdReferenciaLaboral($idRefLaboral);
}

 ?>
