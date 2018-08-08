<?php
  $server = ($_SERVER['DOCUMENT_ROOT']);
  require ($server.'/sps/clases/Postulante.php');
  require ($server.'/sps/clases/Familiar.php');
  require ($server.'/sps/clases/InformeConfidencial.php');
  include ($server. "/sps/helper/utf8EncodeDecodeDeep.php");

  $postulante = Postulante::consultarPostulanteByIdEntrevista($idEntrevista)[0][0];
  $familiares = Familiar::consultarPadresByIdEntrevista($idEntrevista);
  $informeConf = InformeConfidencial::consultarInformeConfidencialByIdPostulante($postulante['id_postulante']);
  $existeInforme = InformeConfidencial::existeInformeConfidencial($postulante['id_postulante']);
  utf8_encode_deep($postulante);
  utf8_encode_deep($familiares);
  // utf8_encode_deep($informeConf);
?>
  <!-- <h3>Administracion de Informes Laborales</h3> -->
    <div class="formuInfoConfidencial row ">
      <div class="col-md-12" style=" display: flex; flex-direction: row; justify-content: space-around;">
         <div class="card col-md-6">
          <div class="empresaDescripcion">
            <b>Apellido:</b> <p><?php echo $postulante['postulante_apellido'] ?></p>
          </div>
          <div class="empresaDescripcion">
            <b>Nombres:</b> <p> <?php echo $postulante['postulante_nombres'] ?></p>
          </div>
          <div class="empresaDescripcion">
            <b>Nacionalidad:</b> <p> <?php echo $postulante['postulante_nacionalidad'] ?></p>
          </div>
          <div class="empresaDescripcion">
            <b>Documento:</b> <p> <?php echo $postulante['postulante_dni'] ?></p>
          </div>
          <?php
          if (!empty($familiares)) {
            foreach ($familiares as $familiar => $value) {
              ?>
              <div class="empresaDescripcion">
                <b><?php echo $value['familiar_tipo'] ?>:</b> <p> <?php echo $value['familiar_apellido_nombre'] ?></p>
              </div>
            <?php
            }
          }
           ?>
        </div>
        <?php if ($existeInforme) { ?>
          <div class="card col-md-6">
            <label>Consultadas fuentes fidedignas arrojaron que:</label>
            <div class="descripcionFidedigna">
              <p><?php echo $informeConf['respuesta'] ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <?php
        if (!$existeInforme) { ?>
          <div class="btn-group col-md-6 col-md-offset-4">
            <button type="button" class="btn btn-sm btn-success" onclick="crearInformeConfidencial(<?php echo $postulante['id_postulante'] ?>)"><i class="glyphicon glyphicon-plus"></i> Crear Informe Confidencial </button>
          </div>
        <?php }else{ ?>
          <div class="btn-group col-md-8 col-md-offset-4">
            <a class="btn btn-sm btn-primary" href="../controladores/crearInformeConfidencialPDF.php?entrevista=<?php echo $idEntrevista ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Imprimir </a>
            <button type="button" class="btn btn-sm btn-warning" onclick="crearInformeConfidencial(<?php echo $postulante['id_postulante'] ?>)"><i class="glyphicon glyphicon-edit"></i> Editar </button>
            <button type="button" class="btn btn-sm btn-danger"  onclick="eliminarInformeConfidencial(<?php echo $postulante['id_postulante'] ?>)"><i class="glyphicon glyphicon-trash"></i> Eliminar </button>
          </div>
          <?php } ?>
    </div>
  </div>
</div>
