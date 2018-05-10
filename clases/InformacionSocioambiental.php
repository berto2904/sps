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

    public static function consultarServiciosByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
      			vivienda_servicio.id_vivienda				id_vivienda,
      			vivienda_servicio.id_servicio				id_servicio,
      			servicio.descripcion								servicio
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join informacion_socioambiental on informacion_socioambiental.id_informacion_socioambiental = postulante.id_informacion_socioambiental
      left join vivienda_servicio on vivienda_servicio.id_vivienda = informacion_socioambiental.id_vivienda
      left join servicio on servicio.id_servicio = vivienda_servicio.id_servicio
      where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }
  }
?>
