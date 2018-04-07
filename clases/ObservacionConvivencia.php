<?php
  require_once('connQuery.php');

  Class ObservacionConvivencia{

    private $id_observaciones_convivencia;
    private $observacionConvicencia;
    private $id_postulante;

    function __construct($observacionConvicencia,$id_postulante){
       $this->observacionConvicencia=$observacionConvicencia;
       $this->id_postulante=$id_postulante;
    }

    function registarObservacionConvivencia(){
      $cq = new connQuery();
      $sql = "INSERT INTO observaciones_convivencia(
                  observacion,
                  id_postulante)
                  VALUES (?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "si",
      $this->observacionConvicencia,
      $this->id_postulante);

      mysqli_stmt_execute($ps);
    }

  }
?>
