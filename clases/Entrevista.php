<?php
  require_once('connQuery.php');

  class Entrevista{
          private $id_entrevista;
          private $id_postulante;
          private $organizacion;
          private $puesto;
          private $fecha_hora;
          private $informacion_relevante;
          private $id_usuario;

    function __construct($id_postulante, $organizacion, $puesto, $fecha_hora, $informacion_relevante, $id_usuario){
       $this->id_postulante = $id_postulante;
       $this->organizacion = $organizacion;
       $this->puesto = $puesto;
       $this->fecha_hora = $fecha_hora;
       $this->informacion_relevante= $informacion_relevante;
       $this->id_usuario = $id_usuario;
        	}

    function registrarEntrevista(){
      $cq = new connQuery();
      $sql = "INSERT INTO entrevista (
						id_postulante,
						organizacion,
						puesto,
						fecha_hora,
						informacion_relevante,
						id_usuario) VALUES(?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
        "issssi",
        $this->id_postulante,
				$this->organizacion,
				$this->puesto,
				$this->fecha_hora,
				$this->informacion_relevante,
				$this->id_usuario);

      mysqli_stmt_execute($ps);
      $registro = mysqli_stmt_fetch($ps);
      return $registro;
    }

  }
?>
