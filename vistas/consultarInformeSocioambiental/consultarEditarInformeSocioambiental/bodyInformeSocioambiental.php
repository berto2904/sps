<?php
  $serverDocument = ($_SERVER['DOCUMENT_ROOT']);
  $referer = (isset($_SERVER['HTTPS']) ? "https" : "http");
  $serverPort = (isset($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] :'');
  $server = $referer.'://'.$_SERVER['SERVER_NAME'].$serverPort;
  $fileUrl = $server."/sps/vistas/consultarInformeSocioambiental/informeLecturaRapida.php?entrevista=".$idEntrevista;

  include ($serverDocument.'/sps/helper/request_no_curl.php');
  require ($serverDocument.'/sps/clases/Postulante.php');
  require ($serverDocument.'/sps/clases/Familiar.php');
  require ($serverDocument.'/sps/clases/InformeConfidencial.php');


  $fileContent = curl_get_contents($fileUrl);

  $postulante = Postulante::consultarPostulanteByIdEntrevista($idEntrevista)[0][0];
  $familiares = Familiar::consultarPadresByIdEntrevista($idEntrevista);
  $informeConf = InformeConfidencial::consultarInformeConfidencialByIdPostulante($postulante['id_postulante']);
  $existeInforme = InformeConfidencial::existeInformeConfidencial($postulante['id_postulante']);
?>
  <!-- <h3>Administracion de Informes Laborales</h3> -->
    <div class="formuInfoConfidencial row ">
      <div class="col-md-12" style=" display: flex; flex-direction: row; justify-content: space-around;">
         <div class="card col-md-12">
           <?php
              echo $fileContent;
            ?>
         </div>
      </div>
          <div class="btn-group col-md-7 col-md-offset-5">
           <a class="btn btn-sm btn-primary" href="../controladores/crearInformeSocioambientalPDF.php?entrevista=<?php echo $idEntrevista ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Imprimir </a>
          </div>
    </div>
  </div>
</div>
