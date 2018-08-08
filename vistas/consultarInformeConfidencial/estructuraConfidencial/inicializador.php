<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ($server.'/sps/clases/Postulante.php');
require ($server.'/sps/clases/Familiar.php');
require ($server.'/sps/clases/InformeConfidencial.php');

$idEntrevista = $_GET['entrevista'];
$postulante = Postulante::consultarPostulanteByIdEntrevista($idEntrevista)[0][0] ? Postulante::consultarPostulanteByIdEntrevista($idEntrevista)[0][0] : '-';
$familiares = Familiar::consultarPadresByIdEntrevista($idEntrevista) ? Familiar::consultarPadresByIdEntrevista($idEntrevista) : '-';
$informeConf = InformeConfidencial::consultarInformeConfidencialByIdPostulante($postulante['id_postulante']) ? InformeConfidencial::consultarInformeConfidencialByIdPostulante($postulante['id_postulante']) : '-';

$apellido = $postulante['postulante_apellido'] ? $postulante['postulante_apellido'] : '-';
$nombres = $postulante['postulante_nombres'] ? $postulante['postulante_nombres'] : '-';
$nacionalidad = $postulante['postulante_nacionalidad'] ? $postulante['postulante_nacionalidad'] : '-';
$dni = $postulante['postulante_dni'] ? $postulante['postulante_dni'] : '-';
$padre = isset($familiares[0]['familiar_apellido_nombre']) ? $familiares[0]['familiar_apellido_nombre'] : '-';
$madre = isset($familiares[1]['familiar_apellido_nombre']) ? $familiares[1]['familiar_apellido_nombre'] : '-';
$observacion = $informeConf['respuesta'] ? $informeConf['respuesta'] : '-';
?>
