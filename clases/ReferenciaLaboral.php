
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
      "issii",
      $this->id_postulante,
      $this->empresa,
      $this->domicilio,
      $this->desde,
      $this->hasta);

      mysqli_stmt_execute($ps);
      $this->id_referencias_laborales = $cq->getUltimoId();
      return $this->id_referencias_laborales;
    }

  }
?>
