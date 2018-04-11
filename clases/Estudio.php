<?php
  require_once('connQuery.php');

  Class Estudio{

    private $id_estudios;
    private $id_postulante;
    private $id_nivel_estudio;
    private $organizacion;
    private $titulo;
    private $desde;
    private $hasta;
    private $situacion;

    function __construct($id_postulante, $id_nivel_estudio, $organizacion, $titulo, $desde, $hasta, $situacion){
       $this->id_postulante = $id_postulante;
       $this->id_nivel_estudio = $id_nivel_estudio;
       $this->organizacion = $organizacion;
       $this->titulo = $titulo;
       $this->desde = $desde;
       $this->hasta = $hasta;
       $this->situacion = $situacion;
    }

    function registrarEstudio(){
      $cq = new connQuery();
      $sql = "INSERT INTO estudios(id_postulante, id_nivel_estudio, organizacion, titulo, desde, hasta, situacion)
                    VALUES (?,?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iissiis",
      $this->id_postulante,
      $this->id_nivel_estudio,
      $this->organizacion,
      $this->titulo,
      $this->desde,
      $this->hasta,
      $this->situacion
      );

      mysqli_stmt_execute($ps);
      $registro = mysqli_stmt_fetch($ps);
      return $registro;
    }

  }
?>
