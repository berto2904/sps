<?php
$referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
$serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
$server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;

require ("../clases/Postulante.php");
require ("../clases/Entrevista.php");
require ("../clases/Familiar.php");
require ("../clases/Conyuge.php");
require ("../clases/ObservacionConvivencia.php");
require ("../clases/Estudio.php");
require ("../clases/Idioma.php");
require ("../clases/Hobby.php");
require ("../clases/Domicilio.php");
require ("../clases/Transporte.php");
require ("../clases/Vivienda.php");
require ("../clases/InformacionSocioambiental.php");
require ("../clases/ConceptoVecinal.php");
require ("../clases/InformacionEconomica.php");
require ("../clases/CuentaBancaria.php");
require ("../clases/MovilidadPropia.php");
require ("../clases/TarjetaCreditoDebito.php");
require ("../clases/TarjetaEntidad.php");
require ("../clases/ReferenciaLaboral.php");
require ("../clases/ObservacionReferenciasLaborales.php");
include ('../helper/utf8EncodeDecodeDeep.php');
include ('../helper/sessionValidation.php');
include ('../helper/request_no_curl.php');


if (isset($_POST["id_entrevista"])) {
  postFunction2($server.'/sps/controladores/eliminarEntrevistaController.php','id_entrevista='.$_POST["id_entrevista"]);
}
 //Entrevista
$id_usuario = (int)$_SESSION["usuario"];

$organizacion = ($_POST["inputOrganizacion"] != "" ? $_POST["inputOrganizacion"] : Null);
// var_dump($organizacion);
// die();
$puesto = ($_POST["inputPuesto"] != "" ? $_POST["inputPuesto"] : Null);
$fechaEntrevista = ($_POST["inputFechaEntrevista"] != "" ? $_POST["inputFechaEntrevista"] : Null);
$informacionRelevante = ($_POST["infoRelevante"] != "" ? $_POST["infoRelevante"] : Null);;
//Postulante
$apellido = ($_POST["inputApellido"] != "" ? $_POST["inputApellido"] : Null);
$nombres = ($_POST["inputNombres"] != "" ? $_POST["inputNombres"] : Null);
$id_sexo = ($_POST["inputSexo"] != "" ? $_POST["inputSexo"] : Null);
$fecha_de_nacimiento = ($_POST["inputFechaNacimmiento"] != "" ? $_POST["inputFechaNacimmiento"] : Null);
$dni = ($_POST["inputDni"] != "" ? $_POST["inputDni"] : Null);
// $ci_numero = ($_POST["inputCiNumero"] != "" ? $_POST["inputCiNumero"] : Null);
// $expedida_por_A  = ($_POST["inputExpedidaPorA"] != "" ? $_POST["inputExpedidaPorA"] : Null);
$expedida_por_B  = ($_POST["inputExpedidaPorB"] != "" ? $_POST["inputExpedidaPorB"] : Null);
$licencia_conductor  = ($_POST["inputLicenciaConductor"] != "" ? $_POST["inputLicenciaConductor"] : Null);
$lugar_nacimiento  = ($_POST["inputLugarNacimiento"] != "" ? $_POST["inputLugarNacimiento"] : Null);
$nacionalidad  = ($_POST["inputNacionalidad"] != "" ? $_POST["inputNacionalidad"] : Null);
$id_estado_civil = ($_POST["inputEstadoCivil"] != "" ? $_POST["inputEstadoCivil"] : Null);
$categoria_conducir  = ($_POST["inputCategoriaConducir"] != "" ? $_POST["inputCategoriaConducir"] : Null);

  //Familiares
$familiares = array_chunk($_POST["infoFamiliar"], 4);
  // Conyuge
$apellido_conyuge = ($_POST["inputApellidoConyuge"] != "" ? $_POST["inputApellidoConyuge"] : Null);
$nombres_conyuge = ($_POST["inputNombresConyuge"] != "" ? $_POST["inputNombresConyuge"] : Null);
$id_sexo_conyuge = ($_POST["inputSexoConyuge"] != "" ? $_POST["inputSexoConyuge"] : Null);
$fecha_de_nacimiento_conyuge = ($_POST["inputFechaNacimmientoConyuge"] != "" ? $_POST["inputFechaNacimmientoConyuge"] : Null);
$dni_conyuge = ($_POST["inputDniConyuge"] != "" ? $_POST["inputDniConyuge"] : Null);
// $ci_numero_conyuge = ($_POST["inputCiNumeroConyuge"] != "" ? $_POST["inputCiNumeroConyuge"] : Null);
$lugar_nacimiento_conyuge  = ($_POST["inputLugarNacimientoConyuge"] != "" ? $_POST["inputLugarNacimientoConyuge"] : Null);
$nacionalidad_conyuge  = ($_POST["inputNacionalidadConyuge"] != "" ? $_POST["inputNacionalidadConyuge"] : Null);
$profesion_conyuge  = ($_POST["inputProfesionConyuge"] != "" ? $_POST["inputProfesionConyuge"] : Null);
  //Observaciones Convivencia
$observacionConvivencia  = ($_POST["inputObservacionesConvivencia"] != "" ? $_POST["inputObservacionesConvivencia"] : Null);

  //Educacion
$estudios = array_chunk($_POST["infoEstudios"], 4);

  //Idiomas
$idiomas=(isset($_POST["idioma"])?$_POST["idioma"] : Null);
  //Hobby Pasatiempos
$hobbies = $_POST["hobbyPreguntas"];

  //Socioambiental
$calle = ($_POST["calle"] != "" ? $_POST["calle"] :Null);
$gmap = ($_POST["latLng"] != "" ? $_POST["latLng"] :Null);
$numero = ($_POST["numero"] != "" ? $_POST["numero"] :Null);
$localidad = ($_POST["localidad"] != "" ? $_POST["localidad"] :Null);
$codigo_postal = ($_POST["cp"] != "" ? $_POST["cp"] :Null);
$partido = ($_POST["partido"] != "" ? $_POST["partido"] :Null);
$telefono = ($_POST["telefono"] != "" ? $_POST["telefono"] :Null);
$piso = ($_POST["piso"] != "" ? $_POST["piso"] :Null);
$departamento = ($_POST["depto"] != "" ? $_POST["depto"] :Null);
$referencia_util = ($_POST["referenciaUtilDomicilio"] != "" ? $_POST["referenciaUtilDomicilio"] :Null);
$transportes = ($_POST["trasporte"] != "" ? $_POST["trasporte"] :Null);

  //Vivienda
$vivienda = (isset($_POST["vivienda"])?$_POST["vivienda"] : Null);
  // Concepto Vecinal
$conceptoVecinal = (isset($_POST["conceptoVecinal"])?$_POST["conceptoVecinal"] : Null);

// Informacion Economica
$movilidadPropia = $_POST["movilidadPropia"];

$cuentasBancarias = $_POST["cuentasBancarias"]["entidades"];
$tCredDeb = $_POST["tCredDeb"];

// Referencia laborales
$refLaborales = $_POST["referenciasLaborales"];

$observacionesRefLaborales = $_POST["observacionesReferenciasLaborales"];

utf8_decode_deep($organizacion);
utf8_decode_deep($puesto);
utf8_decode_deep($fechaEntrevista);
utf8_decode_deep($informacionRelevante);
utf8_decode_deep($apellido);
utf8_decode_deep($nombres);
utf8_decode_deep($id_sexo);
utf8_decode_deep($fecha_de_nacimiento);
utf8_decode_deep($dni);
utf8_decode_deep($ci_numero);
utf8_decode_deep($expedida_por_A);
utf8_decode_deep($expedida_por_B);
utf8_decode_deep($licencia_conductor);
utf8_decode_deep($lugar_nacimiento);
utf8_decode_deep($nacionalidad);
utf8_decode_deep($id_estado_civil);
utf8_decode_deep($categoria_conducir);
utf8_decode_deep($familiares);
utf8_decode_deep($apellido_conyuge);
utf8_decode_deep($nombres_conyuge);
utf8_decode_deep($id_sexo_conyuge);
utf8_decode_deep($fecha_de_nacimiento_conyuge);
utf8_decode_deep($dni_conyuge);
utf8_decode_deep($ci_numero_conyuge);
utf8_decode_deep($lugar_nacimiento_conyuge);
utf8_decode_deep($nacionalidad_conyuge);
utf8_decode_deep($profesion_conyuge);
utf8_decode_deep($observacionConvivencia);
utf8_decode_deep($estudios);
utf8_decode_deep($idiomas);
utf8_decode_deep($hobbies);
utf8_decode_deep($calle);
utf8_decode_deep($gmap);
utf8_decode_deep($numero);
utf8_decode_deep($localidad);
utf8_decode_deep($codigo_postal);
utf8_decode_deep($partido);
utf8_decode_deep($telefono);
utf8_decode_deep($piso);
utf8_decode_deep($departamento);
utf8_decode_deep($referencia_util);
utf8_decode_deep($transportes);
utf8_decode_deep($vivienda);
utf8_decode_deep($conceptoVecinal);
utf8_decode_deep($movilidadPropia);
utf8_decode_deep($cuentasBancarias);
utf8_decode_deep($tCredDeb);
utf8_decode_deep($refLaborales);
utf8_decode_deep($observacionesRefLaborales);

try {
  if(is_float(count($_POST["infoFamiliar"])/4)){
    throw new Exception('Error en el formulario infoFamiliar');
  }
  if(is_float(count($_POST["infoEstudios"])/4)){
    throw new Exception('Error en el formulario infoEstudios');
  }
  if (isset($idiomas)) {
    foreach ($idiomas as $key => $idioma) {
      if (is_float(count($idioma)/4)) {
        throw new Exception('Error en el formulario idioma');
      }
    }
  }

  $idPostulante = crearPostulante($nombres, $apellido, $fecha_de_nacimiento, $licencia_conductor, $lugar_nacimiento, $nacionalidad, $dni, $id_estado_civil,$id_sexo,$categoria_conducir,$expedida_por_B);
  crearEntrevista($idPostulante, $organizacion, $puesto, $fechaEntrevista, $informacionRelevante, $id_usuario);

  if ($idPostulante != 0) {
    crearFamiliares($familiares,$idPostulante);
    crearConyuge($apellido_conyuge, $nombres_conyuge, $id_sexo_conyuge, $fecha_de_nacimiento_conyuge, $dni_conyuge, $lugar_nacimiento_conyuge, $nacionalidad_conyuge, $profesion_conyuge,$idPostulante);
    crearObservacionesConvivencia($observacionConvivencia,$idPostulante);
    crearEstudios($estudios,$idPostulante);
    crearIdiomas($idiomas,$idPostulante);
    crearHobbies($idPostulante,$hobbies);

    $id_domicilio = crearDomicilio($localidad, $calle, $numero, $piso, $departamento, $gmap, $telefono, $referencia_util, $codigo_postal, $partido);
    crearTransporte($id_domicilio,$transportes);

    $id_vivienda = crearVivienda($vivienda);
    $idInformeSocioambiental = crearInformeSocioambiental($idPostulante,$id_domicilio,$id_vivienda);

    crearConceptoVecinal($idInformeSocioambiental,$conceptoVecinal);

    $idMovilidadPropia = crearMovilidadPropia($movilidadPropia);
    $idInformacionEconomica = crearInformacionEconomica($idPostulante,$idMovilidadPropia);
    crearCuentasBancarias($idInformacionEconomica, $cuentasBancarias);
    crearTarjetaDeCreditoDebito($idInformacionEconomica, $tCredDeb);
    crearReferenciasLaborales($idPostulante, $refLaborales);
    crearObservacionesRefLaborales($observacionesRefLaborales,$idPostulante);
  }
  else {
    throw new Exception('Error en la creacion del postulante');
  }

} catch (Exception $e) {
  echo 'Excepcion capturada: ', $e->getMessage(),"\n";
  return;

}catch(ErrorException $e){
  echo 'ErrorException' . $e->getMessage();
  return;
}


if (isset($_POST["id_entrevista"])) {
  header("location: ../vistas/consultar_entrevistas.php");
}else {
  header("location: ../vistas/crear_postulante.php");
}


/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function crearObservacionesRefLaborales($observacionesRefLaborales,$idPostulante){
  if ($observacionesRefLaborales != Null) {
    $observacion = new ObservacionReferenciasLaborales($observacionesRefLaborales,$idPostulante);
    $observacion->registarObservacionInfoLaboral();
  }
}
function crearReferenciasLaborales($id_postulante, $refLaborales){
  foreach ($refLaborales as $indice => $refLaboral) {
    if ($refLaboral["empresa"] != "" || $refLaboral["domicilio"] != "" || $refLaboral["desde"] != "" || $refLaboral["hasta"] != "") {
      $refLaboral["desde"] = $refLaboral["desde"] != "" ? $refLaboral["desde"] : Null;
      $refLaboral["hasta"] = $refLaboral["hasta"] != "" ? $refLaboral["hasta"] : Null;
      $referenciaLaboral = new ReferenciaLaboral ($id_postulante, $refLaboral["empresa"], $refLaboral["domicilio"], $refLaboral["desde"], $refLaboral["hasta"]);
      $referenciaLaboral->registrarReferenciaLaboral();
    }
  }
}

function crearMovilidadPropia($movilidadPropia){
  if ($movilidadPropia["tipo"] != "" || $movilidadPropia["marca"] != ""  || $movilidadPropia["modelo"] != "" || $movilidadPropia["año"] != "" || $movilidadPropia["titular"] != ""  || $movilidadPropia["patente"] != "") {
    $movilidadPropia["tipo"] == "" ? $movilidadPropia["tipo"] = Null : $movilidadPropia["tipo"];
    $movPropia = new MovilidadPropia($movilidadPropia["tipo"], $movilidadPropia["marca"], $movilidadPropia["modelo"], (int)$movilidadPropia["año"], $movilidadPropia["titular"], $movilidadPropia["patente"]);
    $idMovilidadPropia = $movPropia->registrarMovilidadPropia();
    return $idMovilidadPropia;
    }
  }
  function crearInformacionEconomica($idPostulante,$idMovilidadPropia){
    // if ($idMovilidadPropia != "") {0
      $informacionEconomica = new InformacionEconomica($idMovilidadPropia);
      $id = $informacionEconomica->registrarInformacionEconomica();
      $informacionEconomica->actualizarPostulante($idPostulante);
      return $id;
    // }
  }

  function crearCuentasBancarias($idInformacionEconomica, $cuentasBancarias){
    if (isset($cuentasBancarias)) {
      foreach ($cuentasBancarias as $indice => $entidad) {
        $cuentaBancaria = new CuentaBancaria($idInformacionEconomica, $entidad);
        $cuentaBancaria->registrarCuentaBancaria();
        }
      }
    }
  function crearTarjetaDeCreditoDebito($idInformacionEconomica,$tCredDeb){
    $flagTarjetaEntidad = false;
    $idTarjetaCreditoDebito = "";

    foreach ($tCredDeb as $indice => $tarjEntidad) {
      if (isset($tarjEntidad["tarjetaEntidad"])) {
        $flagTarjetaEntidad = true;
      }
    }

    if ($flagTarjetaEntidad != false || $tCredDeb["otrasPropiedades"] != "" || $tCredDeb["segVida"] != "" || $tCredDeb["prendas"] != "" || $tCredDeb["observaciones"]) {
      $tarjetaCreditoDebito = new TarjetaCreditoDebito($idInformacionEconomica, $tCredDeb["otrasPropiedades"], $tCredDeb["segVida"], $tCredDeb["prendas"], $tCredDeb["observaciones"]);
      $idTarjetaCreditoDebito = $tarjetaCreditoDebito->registrarTarjetaCreditoDebito();
    }
    if ($flagTarjetaEntidad == true) {
      foreach ($tCredDeb as $indice => $tarjEntidad) {
        if (is_numeric($indice)) {
          if ( $tarjEntidad["tarjetaEntidad"]["tarjeta"] != "" || $tarjEntidad["tarjetaEntidad"]["entidad"]) {
            $tarjetaEntidad = new TarjetaEntidad ($idTarjetaCreditoDebito, $tarjEntidad["tarjetaEntidad"]["tarjeta"], $tarjEntidad["tarjetaEntidad"]["entidad"]);
            $id = $tarjetaEntidad->registrarTarjetaEntidad();
          }
        }
      }
    }
  }

function crearConceptoVecinal($idInformeSocioambiental,$conceptoVecinal){
  foreach ($conceptoVecinal as $indice => $vecino) {
  if ($vecino["apellido_mombre"] != "" || $vecino["afinidad"] != "" || $vecino["domicilio"] != "" || $vecino["tiempo_que_conoce"] != "") {
      $apellido_mombre = $vecino["apellido_mombre"];
      $conceptoEntrevistado = $vecino["conceptoEntrevistado"];
      $problemas_policiales = $vecino["problemas_policiales"];
      $afinidad = $vecino["afinidad"];
      $domicilio = $vecino["domicilio"];
      $tipo_de_amistades = $vecino["tipo_de_amistades"];
      $problemas_economicos = $vecino["problemas_economicos"];
      $tiempo_que_conoce = $vecino["tiempo_que_conoce"];

      $conVecinal = new ConceptoVecinal($idInformeSocioambiental, $apellido_mombre, $conceptoEntrevistado, $afinidad, $tipo_de_amistades, $problemas_policiales, $problemas_economicos, $tiempo_que_conoce, $domicilio);
      $conVecinal->registrarConceptoVecinal();
    }
  }
}

function crearInformeSocioambiental($idPostulante, $id_domicilio,$id_vivienda){
  $informeSocioambiental = new InformacionSocioambiental($id_domicilio ,$id_vivienda);
  $id = $informeSocioambiental->registrarInformacionSocioambiental();
  $informeSocioambiental->actualizarPostulante($idPostulante);
  return $id;
}

function crearVivienda($vivienda){
  $tipoVivienda = (int)$vivienda["tipo_vivienda"];
  $ambientes = (int)$vivienda["ambientes"];
  $aspectoInterior = (int)$vivienda["aspecto_interior"];
  $aspectoExterior = (int)$vivienda["aspecto_exterior"];
  $propietario = $vivienda["propietario"];
  $inquilino = $vivienda["inquilino"];
  $importeAlquiler = (int)$vivienda["importe_alquiler"];
  $accesibilidad = $vivienda["accesibilidad"];

  $vivie = new Vivienda($tipoVivienda,$aspectoInterior,$propietario,$ambientes,$aspectoExterior,$inquilino,$importeAlquiler,$accesibilidad);
  $idVivienda = $vivie->registrarVivienda();

  if (isset($vivienda["servicio"])) {
    foreach ($vivienda["servicio"] as $indice => $serv) {
      $serv = (int)$serv;
      Vivienda::registrarViviendaServicio($idVivienda,$serv);
    }
  }
    return $idVivienda;
  }

function crearTransporte($id_domicilio,$transportes){
  foreach ($transportes as $indice => $transporte) {
    if (isset($transporte[1])) {
      $tipo_transporte = (int)$transporte[1];
      $cuadras = (int)$transporte[2];
      $trans = new Transporte($id_domicilio,$tipo_transporte,$cuadras);
      $trans->registrarTransporte();
    }
  }
}

  function crearDomicilio($localidad, $calle, $numero, $piso, $departamento, $gmap, $telefono, $referencia_util, $codigo_postal, $partido){
    if($localidad != Null || $calle != Null || $numero != Null || $piso != Null || $departamento != Null || $gmap != Null || $telefono != Null || $referencia_util != Null || $codigo_postal != Null ||  $partido != Null){
      $domicilio = new Domicilio($localidad, $calle, $numero, $piso, $departamento, $gmap, $telefono, $referencia_util, $codigo_postal, $partido);
      $id = $domicilio->registrarDomicilio();
      return $id;
    }
  }

  function crearHobbies($idPostulante,$hobbies){
    foreach ($hobbies as $id_pregunta => $hobbie) {
      if ($hobbie != "") {
        $hobby = new Hobby($idPostulante, $id_pregunta, $hobbie);
        $hobby->registarHobby();
      }
    }
  }

  function crearIdiomas($idiomas,$idPostulante){
    if (isset($idiomas)) {
      foreach ($idiomas as $key => $idioma) {
        if ($idioma[0] != "") {
          $id_idioma_tipo=(int)$idioma[0];
          $lee=(int)$idioma[1];
          $habla=(int)$idioma[2];
          $escribe=(int)$idioma[3];
          $idioma = new Idioma($idPostulante,$id_idioma_tipo, $lee, $habla, $escribe);
          $idioma->registrarIdioma();
        }
      }
    }
  }

  function crearEstudios($estudios,$idPostulante){
    foreach ($estudios as $es => $estudio) {
      if ($estudio[1] != "" || $estudio[2] != "" || $estudio[3] != "") {
        $id_nivel_estudio = (int)$estudio[0];
        $organizacion = $estudio[1];
        $situacion = $estudio[2];
        $titulo = $estudio[3];

        $estudio = new Estudio($idPostulante, $id_nivel_estudio, $organizacion, $titulo, Null, Null, $situacion);
        $estudio->registrarEstudio();


      }
    }
  }

  function crearObservacionesConvivencia($observacionConvivencia,$idPostulante){
    if ($observacionConvivencia != Null) {
      $observacionesConvivencia = new ObservacionConvivencia($observacionConvivencia,$idPostulante);
      $observacionesConvivencia->registarObservacionConvivencia();
    }
  }

  function crearConyuge($apellido_conyuge, $nombres_conyuge, $id_sexo_conyuge, $fecha_de_nacimiento_conyuge, $dni_conyuge, $lugar_nacimiento_conyuge, $nacionalidad_conyuge, $profesion_conyuge,$idPostulante){
    if ($apellido_conyuge != Null || $nombres_conyuge != Null || $id_sexo_conyuge != Null || $fecha_de_nacimiento_conyuge != Null || $dni_conyuge != Null || $lugar_nacimiento_conyuge != Null || $nacionalidad_conyuge != Null || $profesion_conyuge != Null) {
      $conyuge = new Conyuge($apellido_conyuge, $nombres_conyuge, $id_sexo_conyuge, $fecha_de_nacimiento_conyuge, $dni_conyuge, $lugar_nacimiento_conyuge, $nacionalidad_conyuge, $profesion_conyuge,$idPostulante);
      $idConyuge =  $conyuge->registrarConyuge();
    }
  }

  function crearFamiliares($familiares,$idPostulante){
    foreach ($familiares as $fs => $fam) {
      if ($fam[0] != "") {
        $tFamiliar = $fam[0];
        $naFamiliar = $fam[1];
        $dFamiliar = $fam[2];
        $pFamiliar = $fam[3];
        $familiar = new Familiar($naFamiliar,$dFamiliar,$pFamiliar,$idPostulante,$tFamiliar);
        $familiar->registrarFamiliar();
      }
    }
  }

  function crearEntrevista($idPostulante, $organizacion, $puesto, $fechaEntrevista, $informacionRelevante, $id_usuario){
    if ($organizacion != Null) {
      $entrevista= new Entrevista($idPostulante, $organizacion, $puesto, $fechaEntrevista, $informacionRelevante, $id_usuario);
      $entrevista->registrarEntrevista();
    }
  }

  function crearPostulante($nombres, $apellido, $fecha_de_nacimiento, $licencia_conductor, $lugar_nacimiento, $nacionalidad, $dni, $id_estado_civil,$id_sexo,$categoria_conducir,$expedida_por_B){
    if ($nombres != Null && $apellido != Null && $fecha_de_nacimiento != Null && $dni != Null){
      $postulante = new Postulante($nombres, $apellido, $fecha_de_nacimiento, $licencia_conductor, $lugar_nacimiento, $nacionalidad, $dni, $id_estado_civil, Null, Null,$id_sexo,$categoria_conducir,$expedida_por_B);
      $idPostulante = $postulante->registrarPostulante();
      return $idPostulante;
    }
  }

 ?>
