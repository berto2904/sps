
<?php
  require_once('connQuery.php');

  Class TarjetaEntidad{

    private $id_tarjeta_entidad;
    private $id_tarjeta_credito_debito;
    private $tarjeta;
    private $entidad;

    function __construct($id_tarjeta_credito_debito, $tarjeta, $entidad){
        $this->id_tarjeta_credito_debito = $id_tarjeta_credito_debito;
        $this->tarjeta = $tarjeta;
        $this->entidad = $entidad;

    }
    function registrar(){
      $cq = new connQuery();
      $sql = "INSERT INTO tarjeta_entidad (id_tarjeta_credito_debito, tarjeta, entidad) VALUES (NULL, NULL, NULL);";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iss",
      $this->id_tarjeta_credito_debito,
      $this->tarjeta,
      $this->entidad);

      mysqli_stmt_execute($ps);
      $this->id_tarjeta_entidad = $cq->getUltimoId();
      return $this->id_tarjeta_entidad;
    }

  }
?>
