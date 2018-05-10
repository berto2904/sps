<?php
// include ($server.'/sps/helper/sessionValidation.php');
$server = ($_SERVER['DOCUMENT_ROOT']);
include ($server.'/sps/helper/consultaJsonHelper.php');
require ($server.'/sps/clases/Postulante.php');
require ($server.'/sps/clases/ConceptoVecinal.php');
require ($server.'/sps/clases/CuentaBancaria.php');
require ($server.'/sps/clases/Estudio.php');
require ($server.'/sps/clases/Familiar.php');
require ($server.'/sps/clases/Hobby.php');
require ($server.'/sps/clases/Idioma.php');
require ($server.'/sps/clases/InformacionSocioambiental.php');
require ($server.'/sps/clases/ReferenciaLaboral.php');
require ($server.'/sps/clases/TarjetaEntidad.php');
require ($server.'/sps/clases/Transporte.php');

$idEntrevista = $_POST["id_entrevista"];

echo '{';
echo jsonConverter('"Postulante":',Postulante::consultarPostulanteByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"ConceptosVecinales":',ConceptoVecinal::consultarConceptosVecinalesByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"CuentasBancarias":',CuentaBancaria::consultarCuentasBancariasByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"Estudios":',Estudio::consultarEstudiosByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"Familiares":',Familiar::consultarFamiliaresByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"HobbiesYPasatiempos":',Hobby::consultarHobbiesYPasatiemposByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"Idiomas":',Idioma::consultarIdiomasByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"Servicios":',InformacionSocioambiental::consultarServiciosByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"ReferenciasLaborales":',ReferenciaLaboral::consultarReferenciasLaboralesByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"TarjetasEntidades":',TarjetaEntidad::consultarTarjetasEntidadesByIdEntrevista($idEntrevista));
echo ',';
echo jsonConverterArray('"Transportes":',Transporte::consultarTransportesByIdEntrevista($idEntrevista));
echo '}';


?>
