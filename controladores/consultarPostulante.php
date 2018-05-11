<?php
// include ($server.'/sps/helper/sessionValidation.php');
$server = ($_SERVER['DOCUMENT_ROOT']);
include ($server.'/sps/helper/consultaJsonHelper.php');
require ($server.'/sps/clases/ConceptoVecinal.php');
require ($server.'/sps/clases/CuentaBancaria.php');
require ($server.'/sps/clases/Estudio.php');
require ($server.'/sps/clases/Familiar.php');
require ($server.'/sps/clases/Hobby.php');
require ($server.'/sps/clases/Idioma.php');
require ($server.'/sps/clases/ReferenciaLaboral.php');
require ($server.'/sps/clases/TarjetaEntidad.php');
require ($server.'/sps/clases/Transporte.php');

require ($server.'/sps/clases/Conyuge.php');
require ($server.'/sps/clases/Entrevista.php');
require ($server.'/sps/clases/InformacionEconomica.php');
require ($server.'/sps/clases/InformacionSocioambiental.php');
require ($server.'/sps/clases/Postulante.php');
require ($server.'/sps/clases/Vivienda.php');

$idEntrevista = $_POST["id_entrevista"];
echo '{';
  echo '"Postulante":{';
    echo jsonConverter('"DatosDeEntrevistas":',Entrevista::consultarPostulanteByIdEntrevista($idEntrevista)).',';
    echo jsonConverter('"DatosPersonales":',Postulante::consultarPostulanteByIdEntrevista($idEntrevista)).',';
    echo '"DatosFamiliares":{';
    echo jsonConverterArray('"Familiares":',Familiar::consultarFamiliaresByIdEntrevista($idEntrevista)).',';
      echo jsonConverterTrimed('',Conyuge::consultarPostulanteByIdEntrevista($idEntrevista));
      echo '},';
    echo '"EstudiosIdiomas":{';
      echo jsonConverterArray('"Estudios":',Estudio::consultarEstudiosByIdEntrevista($idEntrevista)).',';
      echo jsonConverterArray('"Idiomas":',Idioma::consultarIdiomasByIdEntrevista($idEntrevista));
      echo '},';
    echo jsonConverterArray('"HobbiesYPasatiempos":',Hobby::consultarHobbiesYPasatiemposByIdEntrevista($idEntrevista)).',';
    echo '"InformacionSocioambiental":{';
      echo jsonConverterTrimed('',InformacionSocioambiental::consultarPostulanteByIdEntrevista($idEntrevista)).',';
      echo jsonConverterArray('"Transportes":',Transporte::consultarTransportesByIdEntrevista($idEntrevista)).',';
      echo jsonConverterTrimed('',Vivienda::consultarPostulanteByIdEntrevista($idEntrevista)).',';
      echo jsonConverterArray('"Servicios":',InformacionSocioambiental::consultarServiciosByIdEntrevista($idEntrevista)).',';
      echo jsonConverterArray('"ConceptosVecinales":',ConceptoVecinal::consultarConceptosVecinalesByIdEntrevista($idEntrevista));
      echo '},';
    echo '"InformacionEconomica":{';
      echo jsonConverterTrimed('',InformacionEconomica::consultarPostulanteByIdEntrevista($idEntrevista)).',';
      echo jsonConverterArray('"CuentasBancarias":',CuentaBancaria::consultarCuentasBancariasByIdEntrevista($idEntrevista)).',';
      echo jsonConverterArray('"TarjetasEntidades":',TarjetaEntidad::consultarTarjetasEntidadesByIdEntrevista($idEntrevista));
      echo '},';
    echo jsonConverterArray('"ReferenciasLaborales":',ReferenciaLaboral::consultarReferenciasLaboralesByIdEntrevista($idEntrevista));
    echo '}';
echo'}';
?>
