<?php
  require_once('connQuery.php');

  Class InformeConfidencial{

    private $id_postulante;
    private $id_pregunta;
    private $respuesta;

    function __construct($id_postulante, $id_pregunta, $respuesta){
       $this->id_postulante = $id_postulante;
       $this->id_pregunta = $id_pregunta;
       $this->respuesta = $respuesta;
    }

    function registrarInformeConfidencial(){
      $cq = new connQuery();
      $sql = "INSERT INTO informe_confidencial (id_postulante, id_pregunta, respuesta) VALUES (?, ?, ?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iis",
      $this->id_postulante,
      $this->id_pregunta,
      $this->respuesta
      );

      mysqli_stmt_execute($ps);
      $this->id = $cq->getUltimoId();
      return $this->id;
    }

    public static function consultarPreguntasInfConfidencial(){
      $cq = new connQuery();
      $sql = "select  id_pregunta id, pregunta from pregunta where tipo = 'ic'";

	    $filas = $cq->ejecutarConsulta($sql);
	    $preguntas = array();

	    while ($fila =  mysqli_fetch_assoc($filas)) {
	      $pregunta = array( 'idPregunta' => $fila['id'],
                            'pregunta'=> $fila['pregunta']
                          );

				$preguntas[] = $pregunta;
				}
			return $preguntas;
    }

    function updateInformeConfidencial(){
      $cq = new connQuery();
      $sql = "UPDATE informe_confidencial SET respuesta = ? WHERE id_postulante = ?";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "si",
      $this->respuesta,
      $this->id_postulante
      );

      mysqli_stmt_execute($ps);
    }

    public static function  consultarInformeConfidencialByIdPostulante($idPostulante){
      $cq = new connQuery();
      $sql = "select * from informe_confidencial where id_postulante = ?";

      return $cq->getFilaById($idPostulante,$sql);
    }

    public static function  eliminarInformeConfidencialByIdPostulante($idPostulante){
      $cq = new connQuery();
      $sql = "DELETE FROM informe_confidencial where id_postulante = ?";

      $cq->ejecutarConsultaById($idPostulante,$sql);
    }

    public static function  existeInformeConfidencial($idPostulante){
  		$cq = new connQuery();
  		$sql = "select * from informe_confidencial where id_postulante = ?";
  		$ps = $cq->prepare($sql);

  		mysqli_stmt_bind_param($ps,
  		"i",
  		$idPostulante);

  		mysqli_stmt_execute($ps);
  		$consultaIsTrue = mysqli_stmt_fetch($ps);

  		return $consultaIsTrue;
  	}


  }
?>
