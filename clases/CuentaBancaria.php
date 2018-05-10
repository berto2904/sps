
<?php
  require_once('connQuery.php');

  Class CuentaBancaria{

    private $id_cuenta_bancaria;
    private $id_informacion_economica;
    private $entidad;

    function __construct($id_informacion_economica, $entidad){
       $this->id_informacion_economica = $id_informacion_economica;
       $this->entidad = $entidad;
    }

    function registrarCuentaBancaria(){
      $cq = new connQuery();
      $sql = "INSERT INTO cuenta_bancaria (id_informacion_economica, entidad) VALUES (?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "is",
      $this->id_informacion_economica,
      $this->entidad);

      mysqli_stmt_execute($ps);
      $this->id_cuenta_bancaria = $cq->getUltimoId();
      return $this->id_cuenta_bancaria;
    }

    public static function consultarCuentasBancariasByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
      			cuenta_bancaria.id_cuenta_bancaria							id_cuenta_bancaria,
      			cuenta_bancaria.entidad													entidad_bancaria
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join cuenta_bancaria on cuenta_bancaria.id_informacion_economica = postulante.id_informacion_economica
      where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }

  }
?>
