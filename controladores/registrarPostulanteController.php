<?php
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



  session_start();
  //Entrevista
$id_usuario = (int)$_SESSION["usuario"];

$organizacion = ($_POST["inputOrganizacion"] != "" ? $_POST["inputOrganizacion"] : Null);  utf8_decode_deep($organizacion);
$puesto = ($_POST["inputPuesto"] != "" ? $_POST["inputPuesto"] : Null);  utf8_decode_deep($puesto);
$fechaEntrevista = ($_POST["inputFechaEntrevista"] != "" ? $_POST["inputFechaEntrevista"] : Null); utf8_decode_deep($fechaEntrevista);
$informacionRelevante = Null;  utf8_decode_deep($informacionRelevante);
  //Postulante
$apellido = ($_POST["inputApellido"] != "" ? $_POST["inputApellido"] : Null);  utf8_decode_deep($apellido);
$nombres = ($_POST["inputNombres"] != "" ? $_POST["inputNombres"] : Null); utf8_decode_deep($nombres);
$id_sexo = ($_POST["inputSexo"] != "" ? $_POST["inputSexo"] : Null); utf8_decode_deep($id_sexo);
$fecha_de_nacimiento = ($_POST["inputFechaNacimmiento"] != "" ? $_POST["inputFechaNacimmiento"] : Null); utf8_decode_deep($fecha_de_nacimiento);
$dni = ($_POST["inputDni"] != "" ? $_POST["inputDni"] : Null); utf8_decode_deep($dni);
$ci_numero = ($_POST["inputCiNumero"] != "" ? $_POST["inputCiNumero"] : Null); utf8_decode_deep($ci_numero);
$expedida_por_A  = ($_POST["inputExpedidaPorA"] != "" ? $_POST["inputExpedidaPorA"] : Null); utf8_decode_deep($expedida_por_A);
$expedida_por_B  = ($_POST["inputExpedidaPorB"] != "" ? $_POST["inputExpedidaPorB"] : Null); utf8_decode_deep($expedida_por_B);
$licencia_conductor  = ($_POST["inputLicenciaConductor"] != "" ? $_POST["inputLicenciaConductor"] : Null); utf8_decode_deep($licencia_conductor);
$lugar_nacimiento  = ($_POST["inputLugarNacimiento"] != "" ? $_POST["inputLugarNacimiento"] : Null); utf8_decode_deep($lugar_nacimiento);
$nacionalidad  = ($_POST["inputNacionalidad"] != "" ? $_POST["inputNacionalidad"] : Null); utf8_decode_deep($nacionalidad);
$id_estado_civil = ($_POST["inputEstadoCivil"] != "" ? $_POST["inputEstadoCivil"] : Null); utf8_decode_deep($id_estado_civil);
$categoria_conducir  = ($_POST["inputCategoriaConducir"] != "" ? $_POST["inputCategoriaConducir"] : Null); utf8_decode_deep($categoria_conducir);

  //Familiares
$familiares = array_chunk($_POST["infoFamiliar"], 4);  utf8_decode_deep($familiares);
  // Conyuge
$apellido_conyuge = ($_POST["inputApellidoConyuge"] != "" ? $_POST["inputApellidoConyuge"] : Null);  utf8_decode_deep($apellido_conyuge);
$nombres_conyuge = ($_POST["inputNombresConyuge"] != "" ? $_POST["inputNombresConyuge"] : Null); utf8_decode_deep($nombres_conyuge);
$id_sexo_conyuge = ($_POST["inputSexoConyuge"] != "" ? $_POST["inputSexoConyuge"] : Null); utf8_decode_deep($id_sexo_conyuge);
$fecha_de_nacimiento_conyuge = ($_POST["inputFechaNacimmientoConyuge"] != "" ? $_POST["inputFechaNacimmientoConyuge"] : Null); utf8_decode_deep($fecha_de_nacimiento_conyuge);
$dni_conyuge = ($_POST["inputDniConyuge"] != "" ? $_POST["inputDniConyuge"] : Null); utf8_decode_deep($dni_conyuge);
$ci_numero_conyuge = ($_POST["inputCiNumeroConyuge"] != "" ? $_POST["inputCiNumeroConyuge"] : Null); utf8_decode_deep($ci_numero_conyuge);
$lugar_nacimiento_conyuge  = ($_POST["inputLugarNacimientoConyuge"] != "" ? $_POST["inputLugarNacimientoConyuge"] : Null); utf8_decode_deep($lugar_nacimiento_conyuge);
$nacionalidad_conyuge  = ($_POST["inputNacionalidadConyuge"] != "" ? $_POST["inputNacionalidadConyuge"] : Null); utf8_decode_deep($nacionalidad_conyuge);
$profesion_conyuge  = ($_POST["inputProfesionConyuge"] != "" ? $_POST["inputProfesionConyuge"] : Null);  utf8_decode_deep($profesion_conyuge);
  //Observaciones Convivencia
$observacionConvivencia  = ($_POST["inputObservacionesConvivencia"] != "" ? $_POST["inputObservacionesConvivencia"] : Null); utf8_decode_deep($observacionConvivencia);

  //Educacion
$estudios = array_chunk($_POST["infoEstudios"], 6);  utf8_decode_deep($estudios);
  //Idiomas
$idiomas=(isset($_POST["idioma"])?$_POST["idioma"] : Null);  utf8_decode_deep($idiomas);
  //Hobby Pasatiempos
$hobbies = $_POST["hobbyPreguntas"]; utf8_decode_deep($hobbies);
  // $id_informacion_economica = $_POST["inputInformacionEconomica"];
  // $id_informacion_socioambiental = $_POST["inputInformacionSocioambiental"];

  //Socioambiental
$calle = ($_POST["calle"] != "" ? $_POST["calle"] :Null);  utf8_decode_deep($calle);
$gmap = ($_POST["latLng"] != "" ? $_POST["latLng"] :Null); utf8_decode_deep($gmap);
$numero = ($_POST["numero"] != "" ? $_POST["numero"] :Null); utf8_decode_deep($numero);
$localidad = ($_POST["localidad"] != "" ? $_POST["localidad"] :Null);  utf8_decode_deep($localidad);
$codigo_postal = ($_POST["cp"] != "" ? $_POST["cp"] :Null);  utf8_decode_deep($codigo_postal);
$partido = ($_POST["partido"] != "" ? $_POST["partido"] :Null);  utf8_decode_deep($partido);
$telefono = ($_POST["telefono"] != "" ? $_POST["telefono"] :Null); utf8_decode_deep($telefono);
$piso = ($_POST["piso"] != "" ? $_POST["piso"] :Null); utf8_decode_deep($piso);
$departamento = ($_POST["depto"] != "" ? $_POST["depto"] :Null); utf8_decode_deep($departamento);
$referencia_util = ($_POST["referenciaUtilDomicilio"] != "" ? $_POST["referenciaUtilDomicilio"] :Null);  utf8_decode_deep($referencia_util);
$transportes = ($_POST["trasporte"] != "" ? $_POST["trasporte"] :Null);  utf8_decode_deep($transportes);

  //Vivienda
$vivienda = (isset($_POST["vivienda"])?$_POST["vivienda"] : Null); utf8_decode_deep($vivienda);
  // Concepto Vecinal
$conceptoVecinal = (isset($_POST["conceptoVecinal"])?$_POST["conceptoVecinal"] : Null);  utf8_decode_deep($conceptoVecinal);

// Informacion Economica
$movilidadPropia = $_POST["movilidadPropia"]; utf8_decode_deep($movilidadPropia);
$cuentasBancarias = $_POST["cuentasBancarias"]["entidades"]; utf8_decode_deep($cuentasBancarias);
$tCredDeb = $_POST["tCredDeb"]; utf8_decode_deep($tCredDeb);

// Referencia laborales
$refLaborales = $_POST["referenciasLaborales"]; utf8_decode_deep($refLaborales);

try {
  if(is_float(count($_POST["infoFamiliar"])/4)){
    throw new Exception('Error en el formulario infoFamiliar');
  }
  if(is_float(count($_POST["infoEstudios"])/6)){
    throw new Exception('Error en el formulario infoEstudios');
  }
  if (isset($idiomas)) {
    foreach ($idiomas as $key => $idioma) {
      if (is_float(count($idioma)/4)) {
        throw new Exception('Error en el formulario idioma');
      }
    }
  }
  $postulante = new Postulante($nombres, $apellido, $fecha_de_nacimiento, $ci_numero, $expedida_por_A, $licencia_conductor, $lugar_nacimiento, $nacionalidad, $dni, $id_estado_civil, Null, Null,$id_sexo,$categoria_conducir,$expedida_por_B);
  $idPostulante = $postulante->registrarPostulante();

  if ($idPostulante != 0) {
    crearEntrevista($idPostulante, $organizacion, $puesto, $fechaEntrevista, $informacionRelevante, $id_usuario);
    crearFamiliares($familiares,$idPostulante);
    crearConyuge($apellido_conyuge, $nombres_conyuge, $id_sexo_conyuge, $fecha_de_nacimiento_conyuge, $dni_conyuge, $ci_numero_conyuge, $lugar_nacimiento_conyuge, $nacionalidad_conyuge, $profesion_conyuge,$idPostulante);
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
  }

} catch (Exception $e) {
  echo 'Excepcion capturada: ', $e->getMessage(),"\n";
  return;

}catch(ErrorException $e){
  echo 'ErrorException' . $e->getMessage();
  return;
}

header("location: ../vistas/crear_postulante.php");


/*----------------------------------------------------FUNCIONES------------------------------------------------*/
function crearReferenciasLaborales($id_postulante, $refLaborales){
  foreach ($refLaborales as $indice => $refLaboral) {
    if ($refLaboral["empresa"] != "" || $refLaboral["domicilio"] != "" || $refLaboral["desde"] != "" || $refLaboral["hasta"]) {
      $referenciaLaboral = new ReferenciaLaboral ($id_postulante, $refLaboral["empresa"], $refLaboral["domicilio"], $refLaboral["desde"], $refLaboral["hasta"]);
      $referenciaLaboral->registrarReferenciaLaboral();
    }
  }
}

function crearMovilidadPropia($movilidadPropia){
  if ($movilidadPropia["tipo"] != "" || $movilidadPropia["marca"] != ""  || $movilidadPropia["modelo"] != "" || $movilidadPropia["año"] != "" || $movilidadPropia["titular"] != ""  || $movilidadPropia["patente"]) {
    $movPropia = new MovilidadPropia((int)$movilidadPropia["tipo"], $movilidadPropia["marca"], $movilidadPropia["modelo"], (int)$movilidadPropia["año"], $movilidadPropia["titular"], $movilidadPropia["patente"]);
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
      if ($estudio[1] != "" || $estudio[2] != "" || $estudio[3] != "" || $estudio[4] != "" || $estudio[5] != "") {

        $id_nivel_estudio = (int)$estudio[0];
        $organizacion = $estudio[1];
        $desde = (int)$estudio[2];
        $hasta = (int)$estudio[3];
        $situacion = $estudio[4];
        $titulo = $estudio[5];

        $estudio = new Estudio($idPostulante, $id_nivel_estudio, $organizacion, $titulo, $desde, $hasta, $situacion);
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

  function crearConyuge($apellido_conyuge, $nombres_conyuge, $id_sexo_conyuge, $fecha_de_nacimiento_conyuge, $dni_conyuge, $ci_numero_conyuge, $lugar_nacimiento_conyuge, $nacionalidad_conyuge, $profesion_conyuge,$idPostulante){
    if ($apellido_conyuge != Null || $nombres_conyuge != Null || $id_sexo_conyuge != Null || $fecha_de_nacimiento_conyuge != Null || $dni_conyuge != Null || $ci_numero_conyuge != Null || $lugar_nacimiento_conyuge != Null || $nacionalidad_conyuge != Null || $profesion_conyuge != Null) {
      $conyuge = new Conyuge($apellido_conyuge, $nombres_conyuge, $id_sexo_conyuge, $fecha_de_nacimiento_conyuge, $dni_conyuge, $ci_numero_conyuge, $lugar_nacimiento_conyuge, $nacionalidad_conyuge, $profesion_conyuge,$idPostulante);
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
    if ($organizacion != Null || $puesto != Null || $fechaEntrevista != Null || $informacionRelevante != Null) {
      $entrevista= new Entrevista($idPostulante, $organizacion, $puesto, $fechaEntrevista, $informacionRelevante, $id_usuario);
      $entrevista->registrarEntrevista();
    }
  }


//-------------------------------------------------------
function utf8_decode_deep(&$input) {
    if (is_string($input)) {
        $input = utf8_decode($input);
    } else if (is_array($input)) {
        foreach ($input as &$value) {
            utf8_decode_deep($value);
        }
        unset($value);
    } else if (is_object($input)) {
        $vars = array_keys(get_object_vars($input));

        foreach ($vars as $var) {
            utf8_decode_deep($input->$var);
        }
    }
}

 ?>
