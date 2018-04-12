<?php
  require_once('connQuery.php');

  Class Hobby{

    private $id_postulante;
    private $id_pregunta;
    private $respuesta;


    function __construct($id_postulante, $id_pregunta, $respuesta){
      $this->id_postulante=$id_postulante;
      $this->id_pregunta=$id_pregunta;
      $this->respuesta=$respuesta;
    }

    function registarHobby(){
      $cq = new connQuery();
      $sql = "INSERT INTO hobbies_pasatiempos (id_postulante, id_pregunta, respuesta) VALUES (?, ?, ?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iis",
      $this->id_postulante,
      $this->id_pregunta,
      $this->respuesta);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }

    public static function  consultarPreguntas(){
      $cq = new connQuery();
      $sql = "select  id_pregunta id, pregunta from pregunta where tipo = 'hp';";

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

  }
?>
