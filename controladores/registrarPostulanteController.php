<?php
  require ("../clases/Postulante.php");
  require ("../clases/Entrevista.php");

  session_start();
  //Entrevista
  $id_usuario = (int)$_SESSION["usuario"];
  $organizacion = ($_POST["inputOrganizacion"] != "" ? $_POST["inputOrganizacion"] : Null);
  $puesto = ($_POST["inputPuesto"] != "" ? $_POST["inputPuesto"] : Null);
  $fechaEntrevista = ($_POST["inputFechaEntrevista"] != "" ? $_POST["inputFechaEntrevista"] : Null);

  //Postulante
  $apellido = ($_POST["inputApellido"] != "" ? $_POST["inputApellido"] : Null);
  $nombres = ($_POST["inputNombres"] != "" ? $_POST["inputNombres"] : Null);
  $id_sexo = ($_POST["inputSexo"] != "" ? $_POST["inputSexo"] : Null);
  $fecha_de_nacimiento = ($_POST["inputFechaNacimmiento"] != "" ? $_POST["inputFechaNacimmiento"] : Null);
  $dni = ($_POST["inputDni"] != "" ? $_POST["inputDni"] : Null);
  $ci_numero = ($_POST["inputCiNumero"] != "" ? $_POST["inputCiNumero"] : Null);
  $expedida_por_A  = ($_POST["inputExpedidaPorA"] != "" ? $_POST["inputExpedidaPorA"] : Null);
  $expedida_por_B  = ($_POST["inputExpedidaPorB"] != "" ? $_POST["inputExpedidaPorB"] : Null);
  $licencia_conductor  = ($_POST["inputLicenciaConductor"] != "" ? $_POST["inputLicenciaConductor"] : Null);
  $lugar_nacimiento  = ($_POST["inputLugarNacimiento"] != "" ? $_POST["inputLugarNacimiento"] : Null);
  $nacionalidad  = ($_POST["inputNacionalidad"] != "" ? $_POST["inputNacionalidad"] : Null);
  $profesion  = ($_POST["inputProfesion"] != "" ? $_POST["inputProfesion"] : Null);
  $id_estado_civil = ($_POST["inputEstadoCivil"] != "" ? $_POST["inputEstadoCivil"] : Null);
  $categoria_conducir  = ($_POST["inputCategoriaConducir"] != "" ? $_POST["inputCategoriaConducir"] : Null);

  //Familiares
  $familiares = array_chunk($_POST["infoFamiliar"], 4);

  // $id_informacion_economica = $_POST["inputInformacionEconomica"];
  // $id_informacion_socioambiental = $_POST["inputInformacionSocioambiental"];
try {
  if(is_float(count($_POST["infoFamiliar"])/4)){
    throw new Exception('Error Procesamiento');
  }
  $postulante = new Postulante($nombres, $apellido, $fecha_de_nacimiento, $ci_numero, $expedida_por_A, $licencia_conductor, $lugar_nacimiento, $nacionalidad, $dni, $profesion, $id_estado_civil, Null, Null,$id_sexo,$categoria_conducir,$expedida_por_B);
  $idPostulante = $postulante->registrarPostulante();
  var_dump($idPostulante);
  die();

  if ($idPostulante != 0) {
    crearFamiliares($familiares,$idPostulante);
    $entrevista= new Entrevista($idPostulante, $organizacion, $puesto, $fechaEntrevista, "", $id_usuario);
    $entrevista->registrarEntrevista();
  }

} catch (Exception $e) {
  echo 'Excepcion capturada:', $e->getMessage(),"\n";
}

header("location: ../vistas/crear_postulante.php");


  function crearFamiliares($familiares,$idPostulante){
      foreach ($familiares as $fs => $fam) {
          $naFamiliar = $fam[0];
          $dFamiliar = $fam[1];
          $pFamiliar = $fam[2];
          $tFamiliar = $fam[3];
          $familiar = new Familiar($naFamiliar,$dFamiliar,$pFamiliar,$tFamiliar,$idPostulante);
        }
  }

 ?>
