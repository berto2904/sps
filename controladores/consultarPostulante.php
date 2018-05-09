<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ($server.'/sps/clases/Postulante.php');
require ($server.'/sps/clases/ConceptoVecinal.php');
// include ($server.'/sps/helper/sessionValidation.php');
include ($server.'/sps/helper/consultaJsonHelper.php');

$idEntrevista = $_POST["id_entrevista"];

echo '{';
echo jsonConverter('"Postulante":',Postulante::consultarPostulante($idEntrevista));
echo ',';
echo '"ConceptosVecinales":'.jsonConverterArray(ConceptoVecinal::consultarConceptoVecinalByIdEntrevista($idEntrevista));
// echo '"Hola":'.jsonConverter(Postulante::consultarPostulante($idEntrevista));
echo '}';


?>
