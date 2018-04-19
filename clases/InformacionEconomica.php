<?php
  require_once('connQuery.php');

  Class InformacionEconomica{

    private $id_informacion_economica;
    private $id_movilidad_propia;

    function __construct($id_movilidad_propia){
       $this->id_movilidad_propia = $id_movilidad_propia;
    }

    function registrarInformacionEconomica(){
      $cq = new connQuery();
      $sql = "INSERT INTO informacion_economica (id_movilidad_propia) VALUES (?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "i",
      $this->id_movilidad_propia);

      mysqli_stmt_execute($ps);
      $this->id_informacion_economica= $cq->getUltimoId();
      return $this->id_informacion_economica;
    }

    function actualizarPostulante($idPsotulante){
      $cq = new connQuery();
      $sql = "UPDATE postulante
              SET id_informacion_economica = ?
              WHERE id_postulante = ?";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ii",
      $this->$id_informacion_economica,
      $idPsotulante);

      mysqli_stmt_execute($ps);
      $id = $cq->getUltimoId();
      return $id;
    }
  }
?>
