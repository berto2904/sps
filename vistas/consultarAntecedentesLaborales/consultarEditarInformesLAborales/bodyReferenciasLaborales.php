<?php
  $server = ($_SERVER['DOCUMENT_ROOT']);
  require ($server.'/sps/clases/ReferenciaLaboral.php');
  require ($server.'/sps/clases/InformeLaboral.php');
  $refLaborales = ReferenciaLaboral::consultarReferenciasLaboralesByIdEntrevista($idEntrevista);
  // print_r($refLaborales);
  // die();
?>
<?php if ($refLaborales[0]['id_referencias_laborales'] != ""  ) { ?>
  <!-- <h3>Administracion de Informes Laborales</h3> -->
    <div class="formuInfoReferenciasLaborales row ">
      <div class="col-md-12" style=" display: flex; flex-direction: row; justify-content: space-around;">
        <?php
          foreach ($refLaborales as $key => $ref) {
          ?>
         <div id="empresa_<?php echo $key ?>" class="card col-md-4">
          <div class="empresaDescripcion">
            <b>Empresa:</b> <p id="empresa"></p>
          </div>
          <div class="empresaDescripcion">
            <b>Domicilio:</b> <p id="domicilio"></p>
          </div>
          <div class="empresaDescripcion">
            <b>Fecha de Ingreso:</b> <p id="desde" class="desdeHasta"></p>
          </div>
          <div class="empresaDescripcion">
            <b>Fecha de Egreso:</b> <p id="hasta" class="desdeHasta"></p>
          </div>
          <div class="btn-group btnCenterGroup">
            <?php $existeInforme = InformeLaboral::existeInformeLaboral($ref['id_referencias_laborales']);
            if($existeInforme) {
              ?>
              <a class="btn btn-sm btn-primary" href="../controladores/crearInformeLaboralPDF.php?idRefLaboral=<?php echo $ref['id_referencias_laborales'] ?>&entrevista=<?php echo $idEntrevista ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Imprimir </a>
              <button type="button" class="btn btn-sm btn-warning" onclick="crearInformeLaboral(<?php echo $ref['id_referencias_laborales'] ?>)"><i class="glyphicon glyphicon-edit"></i> Editar </button>
              <button type="button" class="btn btn-sm btn-danger"  onclick="eliminarInformeLaboral(<?php echo $ref['id_referencias_laborales'] ?>)"><i class="glyphicon glyphicon-trash"></i> Eliminar </button>
            <?php } else{ ?>
              <button type="button" class="btn btn-sm btn-success" onclick="crearInformeLaboral(<?php echo $ref['id_referencias_laborales'] ?>)"><i class="glyphicon glyphicon-plus"></i> Crear Informe Laboral </button>
            <?php } ?>
          </div>
        </div>
        <?php }
      }else {
        ?>
        <div class="alert alert-danger" role="alert">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          El postulante no dispone de referencias laborales
        </div>
        <?php
      }
        ?>
      </div>
    </div>
  </div>
</div>
