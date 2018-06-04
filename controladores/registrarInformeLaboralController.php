<?php
require ("../clases/InformeLaboral.php");
require ("../clases/InformeLaboralPregunta.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');


 //Entrevista
$id_usuario = (int)$_SESSION["usuario"];

$refLaboral = $_POST['informeLaboral'];
utf8_decode_deep($refLaboral);

// if (condition) {
// }

crearInformeLaboral($refLaboral);


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

 ?>
