<?php
require ("../clases/InformeLaboral.php");
require ("../clases/InformeLaboralPregunta.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');


 //Entrevista
$id_usuario = (int)$_SESSION["usuario"];

$refLaboral = $_POST['informeLaboral'];
$idEntrevista = $_POST['id_entrevista'];
utf8_decode_deep($refLaboral);

if (InformeLaboral::existeInformeLaboral($refLaboral['idRefLaboral'])) {
  actualizarInformeLaboral($refLaboral);
}else {
  crearInformeLaboral($refLaboral);
}

header("location: ../vistas/consultarAntecedentesLaborales/consultaAntecedentesLaborales.php?id_entrevista=".$idEntrevista);
// header("location: ../vistas/crear_postulante.php");


/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function crearInformeLaboral($refLaboral){
$id_referencias_laborales = $refLaboral['idRefLaboral'];
$puesto_al_ingresar = $refLaboral['puestoIngresar'];
$ultimo_puesto_ocupado = $refLaboral['puestoOcupado'];
$causa_de_egreso = $refLaboral['causasEgreso'];
$asistencia = $refLaboral['asistencia'];
$puntualidad = $refLaboral['puntualidad'];
$concepto_general = $refLaboral['conceptoGeneral'];

    $informeLaboral = new InformeLaboral($id_referencias_laborales, $puesto_al_ingresar, $ultimo_puesto_ocupado, $causa_de_egreso, $asistencia, $puntualidad, $concepto_general);
    $idInformeLaboral = $informeLaboral->registrarInformeLaboral();
    foreach ($refLaboral['pregunta'] as $id_pregunta_laboral => $respuesta) {
     $InfoLAboralPregunta = new InformeLaboralPregunta($idInformeLaboral, $id_pregunta_laboral, $respuesta);
     $InfoLAboralPregunta->registarPreguntaRespuestaInfoLaboral();
    }
}
function actualizarInformeLaboral($refLaboral){
$id_referencias_laborales = $refLaboral['idRefLaboral'];
$puesto_al_ingresar = $refLaboral['puestoIngresar'];
$ultimo_puesto_ocupado = $refLaboral['puestoOcupado'];
$causa_de_egreso = $refLaboral['causasEgreso'];
$asistencia = $refLaboral['asistencia'];
$puntualidad = $refLaboral['puntualidad'];
$concepto_general = $refLaboral['conceptoGeneral'];

    $informeLaboral = new InformeLaboral($id_referencias_laborales, $puesto_al_ingresar, $ultimo_puesto_ocupado, $causa_de_egreso, $asistencia, $puntualidad, $concepto_general);
    $idInformeLaboral = $informeLaboral->actualizarInformeLaboral();
    foreach ($refLaboral['pregunta'] as $id_pregunta_laboral => $respuesta) {
     $InfoLAboralPregunta = new InformeLaboralPregunta($idInformeLaboral, $id_pregunta_laboral, $respuesta);
     $InfoLAboralPregunta->actualizarPreguntaRespuestaInfoLaboral($id_referencias_laborales);
    }
}

 ?>
