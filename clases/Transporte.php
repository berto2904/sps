<?php
  require_once('connQuery.php');

  Class Transporte{

    private $id_transporte;
    private $id_transporte_tipo;
    private $cuadras;
    private $id_domicilio;

    function __construct($id_domicilio,$tipo_transporte,$cuadras){
       $this->id_transporte_tipo =$tipo_transporte;
       $this->cuadras =$cuadras;
       $this->id_domicilio =$id_domicilio;
    }
    function registrarTransporte(){
      $cq = new connQuery();
      $sql = "INSERT INTO transporte (id_transporte_tipo, cuadras, id_domicilio) VALUES (?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iii",
      $this->id_transporte_tipo,
      $this->cuadras,
      $this->id_domicilio);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }

    public static function  consultarTransportes(){
      $cq = new connQuery();
      $sql = "select * from transporte_tipo;";

	    $filas = $cq->ejecutarConsulta($sql);
	    $transportes = array();

	    while ($fila =  mysqli_fetch_assoc($filas)) {
	      $transporte = array( 'id' => $fila['id_transporte_tipo'],
                            'descripcion'=> $fila['descripcion']
                          );

				$transportes[] = $transporte;
				}
			return $transportes;
    }

    public static function consultarTransportesByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
           transporte.id_transporte								   id_transporte,
           transporte.id_transporte_tipo					   id_transporte_tipo,
           transporte.cuadras											   cuadras,
           transporte_tipo.descripcion							 transporte_tipo
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join informacion_socioambiental on informacion_socioambiental.id_informacion_socioambiental = postulante.id_informacion_socioambiental
      left join domicilio on domicilio.id_domicilio = informacion_socioambiental.id_domicilio
      left join transporte on transporte.id_domicilio = informacion_socioambiental.id_domicilio
      left join transporte_tipo on transporte_tipo.id_transporte_tipo = transporte.id_transporte_tipo
      where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }

  }
?>
