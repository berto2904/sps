<?php
  require_once('connQuery.php');

  class Familiar{
          private $id_familiar_postulante;
          private $apellido_nombre;
          private $domicilio;
          private $profesion;
          private $id_postulante;
          private $id_familiar_tipo;
          private $id_domicilio;

    function __construct($apellido_nombre, $domicilio, $profesion, $id_postulante, $id_familiar_tipo, $id_domicilio){
       $this->apellido_nombre = $apellido_nombre;
       $this->domicilio = $domicilio;
       $this->profesion = $profesion;
       $this->id_postulante = $id_postulante;
       $this->id_familiar_tipo = $id_familiar_tipo;
       $this->id_domicilio = $id_domicilio;
        	}

    function registrarFamiliar(){
      $cq = new connQuery();
      $sql = "INSERT INTO familiar_postulante(
              apellido_nombre,
              domicilio,
              profesion,
              id_postulante,
              id_familiar_tipo,
              id_domicilio) VALUES(?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
        "sssiii",
        $this->apellido_nombre,
        $this->domicilio,
        $this->profesion,
        $this->id_postulante,
        $this->id_familiar_tipo,
        $this->id_domicilio
				);

      mysqli_stmt_execute($ps);
      $registro = mysqli_stmt_fetch($ps);
      return $registro;
    }

  }
?>
