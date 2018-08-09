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
    function actualizarPreguntaRespuestaInfoLaboral($id_referencias_laborales){
      $cq = new connQuery();
      $sql = "UPDATE informe_laboral_pregunta
              SET respuesta = ?
              WHERE id_pregunta_laboral = ? AND id_informe_laboral = (select id_informe_laboral from informe_laboral where id_referencias_laborales = ?)";
      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "sii",
      $this->respuesta,
      $this->id_pregunta_laboral,
      $id_referencias_laborales);

      mysqli_stmt_execute($ps);
    }

    public static function  consultarInformeLaboralPreguntaByIdReferenciaLaboral($idReferenciaLaboral){
      $cq = new connQuery();
      $sql = "SELECT * FROM informe_laboral_pregunta
              WHERE id_informe_laboral = (SELECT id_informe_laboral FROM informe_laboral WHERE id_referencias_laborales = ?)";

      return $cq->getFilasById($idReferenciaLaboral,$sql);
    }

    public static function  eliminarInformeLaboralPreguntaByIdReferenciaLaboral($idReferenciaLaboral){
      $cq = new connQuery();
      $sql = "DELETE FROM informe_laboral_pregunta
              WHERE id_informe_laboral = (SELECT id_informe_laboral FROM informe_laboral WHERE id_referencias_laborales = ?)";

      $cq->ejecutarConsultaById($idReferenciaLaboral,$sql);
    }

    public static function consultarReferenciaPreguntaRespuestaByIdReferenciaLaboral($idReferenciaLaboral){
      $cq = new connQuery();
      $sql = "SELECT p.pregunta pregunta, ip.respuesta respuesta
      from informe_laboral_pregunta ip
      join pregunta p on p.id_pregunta = ip.id_pregunta_laboral
      where ip.id_informe_laboral = (select id_informe_laboral from informe_laboral where id_referencias_laborales = ?);";

      return $cq->getFilasById($idReferenciaLaboral,$sql);
    }

  }
?>
