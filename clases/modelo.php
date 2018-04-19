
<?php
  require_once('connQuery.php');

  Class Modelo{

    private $id;

    function __construct(){
       // $this->atributo=$atributo;

    }
    function registrar(){
      $cq = new connQuery();
      $sql = "INSERT INTO tabla(apellido) VALUES (?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "s",
      $this->
      );

      mysqli_stmt_execute($ps);
      $this->id = $cq->getUltimoId();
      return $this->id;
    }

  }
?>
