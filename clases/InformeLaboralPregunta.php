<?php
  require_once('connQuery.php');

  Class InformeLaboralPregunta{

    private $id_informe_laboral;
    private $id_pregunta_laboral;
    private $respuesta;


    function __construct($id_informe_laboral, $id_pregunta_laboral, $respuesta){
      $this->id_informe_laboral=$id_informe_laboral;
      $this->id_pregunta_laboral=$id_pregunta_laboral;
      $this->respuesta=$respuesta;
    }

    function registarPreguntaRespuestaInfoLaboral(){
      $cq = new connQuery();
      $sql = "INSERT INTO informe_laboral_pregunta (id_informe_laboral, id_pregunta_laboral, respuesta) VALUES (?, ?, ?)";
      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iis",
      $this->id_informe_laboral,
      $this->id_pregunta_laboral,
      $this->respuesta);

      mysqli_stmt_execute($ps);
    }

  }
?>
