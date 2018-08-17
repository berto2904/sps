<?php
  require_once('connQuery.php');

  Class ObservacionReferenciasLaborales{

    private $id_observaciones_infolaboral;
    private $observacionInfoLaboral;
    private $id_postulante;

    function __construct($observacionInfoLaboral,$id_postulante){
       $this->observacionInfoLaboral=$observacionInfoLaboral;
       $this->id_postulante=$id_postulante;
    }

    function registarObservacionInfoLaboral(){
      $cq = new connQuery();
      $sql = "INSERT INTO observaciones_infolaboral(observacion, id_postulante)
                  VALUES (?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "si",
      $this->observacionInfoLaboral,
      $this->id_postulante);

      mysqli_stmt_execute($ps);
    }

  }
?>
