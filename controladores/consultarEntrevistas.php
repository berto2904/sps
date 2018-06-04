<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/Entrevista.php');
include ('../helper/sessionValidation.php');
include ('../helper/consultaJsonHelper.php');

// echoJson(Entrevista::consultarEntrevistas());
echo jsonConverterArray("",Entrevista::consultarEntrevistas());
?>
