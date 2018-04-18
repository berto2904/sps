<?php
  require_once('connQuery.php');

  Class InformacionSocioambiental{

    private $id_informacion_socioambiental;
    private $id_domicilio;
    private $id_vivienda;

    function __construct($id_domicilio ,$id_vivienda){
       $this->id_domicilio = $id_domicilio;
       $this->id_vivienda = $id_vivienda;
    }
    function registrarInformacionSocioambiental(){
      $cq = new connQuery();
      $sql = "INSERT INTO informacion_socioambiental (id_domicilio, id_vivienda) VALUES (?,?);";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ii",
      $this->id_domicilio,
      $this->id_vivienda);

      mysqli_stmt_execute($ps);
      $this->id_informacion_socioambiental = $cq->getUltimoId();
      return $this->id_informacion_socioambiental;
    }

    function actualizarPostulante($idPsotulante){
      $cq = new connQuery();
      $sql = "UPDATE postulante
              SET id_informacion_socioambiental = ?
              WHERE id_postulante = ?";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ii",
      $this->id_informacion_socioambiental,
      $idPsotulante);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }
  }
?>
