<?php
  require_once('connQuery.php');

  Class Modelo{

    private $atributo;

    function __construct($atributo){
       $this->atributo=$atributo;

    }
    function registar(){
      $cq = new connQuery();
      $sql = "INSERT INTO tabla(apellido) VALUES (?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps, "s", $this->atributo);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }

  }
?>
