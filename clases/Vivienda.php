<?php
  require_once('connQuery.php');

  Class Vivienda{

    private $id_vivienda;
    private $id_tipo_vivienda;
    private $aspecto_interior;
    private $propietario;
    private $ambientes;
    private $aspecto_exterior;
    private $inquilino;
    private $importe_alquiler;
    private $accesibilidad;

    function __construct($id_tipo_vivienda,$aspecto_interior,$propietario,$ambientes,$aspecto_exterior,$inquilino,$importe_alquiler,$accesibilidad){
    $this->id_tipo_vivienda=$id_tipo_vivienda;
    $this->aspecto_interior=$aspecto_interior;
    $this->propietario=$propietario;
    $this->ambientes=$ambientes;
    $this->aspecto_exterior=$aspecto_exterior;
    $this->inquilino=$inquilino;
    $this->importe_alquiler=$importe_alquiler;
    $this->accesibilidad=$accesibilidad;
    }

    function registrarVivienda(){
      $cq = new connQuery();
      $sql = "INSERT INTO vivienda (id_tipo_vivienda, aspecto_interior, propietario, ambientes, aspecto_exterior, inquilino, importe_alquiler, accesibilidad) VALUES (?,?,?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iisiisis",
      $this->id_tipo_vivienda,
      $this->aspecto_interior,
      $this->propietario,
      $this->ambientes,
      $this->aspecto_exterior,
      $this->inquilino,
      $this->importe_alquiler,
      $this->accesibilidad);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }

    public static function registrarViviendaServicio($idVivienda, $idServicio){
      $cq = new connQuery();
      $sql = "INSERT INTO vivienda_servicio (id_vivienda, id_servicio) VALUES (?, ?);";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ii",
      $idVivienda,
      $idServicio);
      mysqli_stmt_execute($ps);
    }

  }
?>
