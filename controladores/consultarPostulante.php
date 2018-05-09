<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/Postulante.php');
require ('../clases/ConceptoVecinal.php');
// include ('../helper/sessionValidation.php');
include ('../helper/consultaJsonHelper.php');
$idEntrevista = $_POST["id_entrevista"];

echo '{';
echo jsonConverter('"Postulante":',Postulante::consultarPostulante($idEntrevista));
echo ',';
echo '"ConceptosVecinales":'.jsonConverterArray(ConceptoVecinal::consultarConceptoVecinalByIdEntrevista($idEntrevista));
// echo '"Hola":'.jsonConverter(Postulante::consultarPostulante($idEntrevista));
echo '}';


?>
