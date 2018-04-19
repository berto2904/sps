
<?php
  require_once('connQuery.php');

  Class MovilidadPropia{

    private $id_movilidad_propia;
    private $id_vehiculo_tipo;
    private $marca;
    private $modelo;
    private $anio;
    private $titular;
    private $patente;


    function __construct($id_vehiculo_tipo, $marca, $modelo, $anio, $titular, $patente){

       $this->id_vehiculo_tipo = $id_vehiculo_tipo;
       $this->marca = $marca;
       $this->modelo = $modelo;
       $this->anio = $anio;
       $this->titular = $titular;
       $this->patente = $patente;

    }
    function registrarMovilidadPropia(){
      $cq = new connQuery();
      $sql = "INSERT INTO movilidad_propia (id_vehiculo_tipo, marca, modelo, anio, titular, patente) VALUES (?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ississ",
      $this->id_vehiculo_tipo,
      $this->marca,
      $this->modelo,
      $this->anio,
      $this->titular,
      $this->patente);

      mysqli_stmt_execute($ps);
      $this->id_movilidad_propia = $cq->getUltimoId();
      return $this->id_movilidad_propia;
    }

    public static function  consultarVehiculoTipo(){
      $cq = new connQuery();
      $sql = "select * from vehiculo_tipo";

	    $filas = $cq->ejecutarConsulta($sql);
	    $vehiculos = array();

	    while ($fila =  mysqli_fetch_assoc($filas)) {
	      $vehiculo = array( 'id' => $fila['id_vehiculo_tipo'],
                            'descripcion'=> $fila['descripcion']
                          );

				$vehiculos[] = $vehiculo;
				}
			return $vehiculos;
    }

  }
?>
