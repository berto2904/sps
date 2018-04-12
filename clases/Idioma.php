<?php
  require_once('connQuery.php');

  Class Idioma{

    private $id_idioma;
    private $id_idioma_tipo;
    private $id_postulante;
    private $lee;
    private $habla;
    private $escribe;

    function __construct($id_postulante,$id_idioma_tipo, $lee, $habla, $escribe){
      $this->id_postulante = $id_postulante;
      $this->id_idioma_tipo = $id_idioma_tipo;
      $this->lee=$lee;
      $this->habla=$habla;
      $this->escribe=$escribe;
    }
    function registrarIdioma(){
      $cq = new connQuery();
      $sql = "INSERT INTO idioma (id_postulante, id_idioma_tipo, lee, habla, escribe) VALUES (?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iiiii",
      $this->id_postulante,
      $this->id_idioma_tipo,
      $this->lee,
      $this->habla,
      $this->escribe);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }

  }
?>
