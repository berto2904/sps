
<?php
  require_once('connQuery.php');

  Class InformeLaboral{

  private $id_informe_laboral;
  private $id_referencias_laborales;
  private $puesto_al_ingresar;
  private $ultimo_puesto_ocupado;
  private $causa_de_egreso;
  private $asistencia;
  private $puntualidad;
  private $concepto_general;

    function __construct($id_referencias_laborales, $puesto_al_ingresar, $ultimo_puesto_ocupado, $causa_de_egreso, $asistencia, $puntualidad, $concepto_general){
        $this->id_referencias_laborales = $id_referencias_laborales;
        $this->puesto_al_ingresar = $puesto_al_ingresar;
        $this->ultimo_puesto_ocupado = $ultimo_puesto_ocupado;
        $this->causa_de_egreso = $causa_de_egreso;
        $this->asistencia = $asistencia;
        $this->puntualidad = $puntualidad;
        $this->concepto_general = $concepto_general;
    }
    function registrarInformeLaboral(){
      $cq = new connQuery();
      $sql = "INSERT INTO informe_laboral (id_referencias_laborales, puesto_al_ingresar, ultimo_puesto_ocupado, causa_de_egreso, asistencia, puntualidad, concepto_general) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "issssss",
      $this->id_referencias_laborales,
      $this->puesto_al_ingresar,
      $this->ultimo_puesto_ocupado,
      $this->causa_de_egreso,
      $this->asistencia,
      $this->puntualidad,
      $this->concepto_general
      );

      mysqli_stmt_execute($ps);
      $this->id_informe_laboral = $cq->getUltimoId();
      return $this->id_informe_laboral;
    }

    function actualizarInformeLaboral(){
      $cq = new connQuery();
      $sql = "UPDATE informe_laboral
              SET puesto_al_ingresar = ?, ultimo_puesto_ocupado = ?, causa_de_egreso = ?, asistencia = ?, puntualidad = ?, concepto_general = ?
              WHERE id_referencias_laborales = ? ";
      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ssssssi",
      $this->puesto_al_ingresar,
      $this->ultimo_puesto_ocupado,
      $this->causa_de_egreso,
      $this->asistencia,
      $this->puntualidad,
      $this->concepto_general,
      $this->id_referencias_laborales
      );

      mysqli_stmt_execute($ps);
      $this->id_informe_laboral = $cq->getUltimoId();
      return $this->id_informe_laboral;
    }

    public static function  consultarPreguntas(){
      $cq = new connQuery();
      $sql = "select  id_pregunta id, pregunta from pregunta where tipo = 'pl'";

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

    public static function  consultarInformeLaboralByIdReferenciaLaboral($idReferenciaLaboral){
      $cq = new connQuery();
      $sql = "select * from informe_laboral where id_referencias_laborales = ?";

      return $cq->getFilaById($idReferenciaLaboral,$sql);
    }

    public static function  eliminarInformeLaboralByIdReferenciaLaboral($idReferenciaLaboral){
      $cq = new connQuery();
      $sql = "DELETE FROM informe_laboral where id_referencias_laborales = ?";

      $cq->ejecutarConsultaById($idReferenciaLaboral,$sql);
    }


    public static function  existeInformeLaboral($idReferenciaLaboral){
  		$cq = new connQuery();
  		$sql = "select * from informe_laboral where id_referencias_laborales = ?";
  		$ps = $cq->prepare($sql);

  		mysqli_stmt_bind_param($ps,
  		"i",
  		$idReferenciaLaboral);

  		mysqli_stmt_execute($ps);
  		$consultaIsTrue = mysqli_stmt_fetch($ps);

  		return $consultaIsTrue;
  	}

  }
?>
