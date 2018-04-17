<?php
  require_once('connQuery.php');

  Class Domicilio{

    private $id_domicilio;
    private $localidad;
    private $calle;
    private $numero;
    private $piso;
    private $departamento;
    private $gmap;
    private $telefono;
    private $referencia_util;
    private $codigo_postal;
    private $partido;

    function __construct($localidad, $calle, $numero, $piso, $departamento, $gmap, $telefono, $referencia_util, $codigo_postal, $partido){
       $this->localidad = $localidad;
       $this->calle = $calle;
       $this->numero = $numero;
       $this->piso = $piso;
       $this->departamento = $departamento;
       $this->gmap = $gmap;
       $this->telefono = $telefono;
       $this->referencia_util = $referencia_util;
       $this->codigo_postal = $codigo_postal;
       $this->partido = $partido;
    }

    function registrarDomicilio(){
      $cq = new connQuery();
      $sql = "INSERT INTO domicilio (localidad, calle, numero, piso, departamento, gmap, telefono, referencia_util, codigo_postal, partido) VALUES (?,?,?,?,?,?,?,?,?,?)";
      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ssiissssss",
      $this->localidad,
      $this->calle,
      $this->numero,
      $this->piso,
      $this->departamento,
      $this->gmap,
      $this->telefono,
      $this->referencia_util,
      $this->codigo_postal,
      $this->partido);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }

  }
?>
