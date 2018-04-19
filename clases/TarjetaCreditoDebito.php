
<?php
  require_once('connQuery.php');

  Class TarjetaCreditoDebito{

    private $id_tarjeta_credito_debito;
    private $id_informacion_economica;
    private $otras_propiedades;
    private $seguro_de_vida;
    private $prendas;
    private $observaciones;

    function __construct($id_informacion_economica, $otras_propiedades, $seguro_de_vida, $prendas, $observaciones){
      $this->id_informacion_economica = $id_informacion_economica;
      $this->otras_propiedades = $otras_propiedades;
      $this->seguro_de_vida = $seguro_de_vida;
      $this->prendas = $prendas;
      $this->observaciones = $observaciones;

    }
    function registrar(){
      $cq = new connQuery();
      $sql = "INSERT INTO tarjeta_credito_debito (id_informacion_economica, otras_propiedades, seguro_de_vida, prendas, observaciones) VALUES (?, ?, ?, ?, ?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "issss",
      $this->id_informacion_economica,
      $this->otras_propiedades,
      $this->seguro_de_vida,
      $this->prendas,
      $this->observaciones);

      mysqli_stmt_execute($ps);
      $this->id_tarjeta_credito_debito = $cq->getUltimoId();
      return $this->id_tarjeta_credito_debito;
    }

  }
?>
