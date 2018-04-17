<?php
  require_once('connQuery.php');

  Class Transporte{

    private $id_transporte;
    private $id_transporte_tipo;
    private $cuadras;
    private $id_domicilio;

    function __construct($id_domicilio,$tipo_transporte,$cuadras){
       $this->id_transporte_tipo =$tipo_transporte;
       $this->cuadras =$cuadras;
       $this->id_domicilio =$id_domicilio;
    }
    function registrarTransporte(){
      $cq = new connQuery();
      $sql = "INSERT INTO transporte (id_transporte_tipo, cuadras, id_domicilio) VALUES (?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iii",
      $this->id_transporte_tipo,
      $this->cuadras,
      $this->id_domicilio);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }

  }
?>
