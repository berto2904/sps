
<?php
  require_once('connQuery.php');

  Class ReferenciaLaboral{

    private $id_referencias_laborales;
    private $id_postulante;
    private $empresa;
    private $domicilio;
    private $desde;
    private $hasta;

    function __construct($id_postulante, $empresa, $domicilio, $desde, $hasta){
      $this->id_postulante = $id_postulante;
      $this->empresa = $empresa;
      $this->domicilio = $domicilio;
      $this->desde = $desde;
      $this->hasta = $hasta;

    }
    function registrarReferenciaLaboral(){
      $cq = new connQuery();
      $sql = "INSERT INTO referencias_laborales (id_postulante, empresa, domicilio, desde, hasta) VALUES (?, ?, ?, ?, ?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "issss",
      $this->id_postulante,
      $this->empresa,
      $this->domicilio,
      $this->desde,
      $this->hasta);

      mysqli_stmt_execute($ps);
      $this->id_referencias_laborales = $cq->getUltimoId();
      return $this->id_referencias_laborales;
    }

    public static function consultarReferenciasLaboralesByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
      			referencias_laborales.id_referencias_laborales		id_referencias_laborales,
      			referencias_laborales.empresa											empresa,
      			referencias_laborales.domicilio										domicilio,
      			referencias_laborales.desde												desde,
      			referencias_laborales.hasta												hasta
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join referencias_laborales on referencias_laborales.id_postulante = postulante.id_postulante
      where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }

  }
?>
