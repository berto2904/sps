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

    public static function consultarPostulanteByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
            vivienda.id_tipo_vivienda                               id_tipo_vivienda,
            vivienda.aspecto_interior                               id_aspecto_interior,
            vivienda.aspecto_exterior                               id_aspecto_exterior,
            tipo_vivienda.descripcion                               tipo_vivienda,
            caspint.descripcion                                     aspecto_interior,
            caspext.descripcion                                     aspecto_exterior,
            vivienda.propietario                                    vivienda_propietario,
            vivienda.ambientes                                      vivienda_ambientes,
            vivienda.inquilino                                      vivienda_inquilino,
            vivienda.importe_alquiler                               vivienda_importe_alquiler,
            vivienda.accesibilidad                                  vivienda_accesibilidad
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join informacion_socioambiental on informacion_socioambiental.id_informacion_socioambiental = postulante.id_informacion_socioambiental
      left join vivienda on vivienda.id_vivienda = informacion_socioambiental.id_vivienda
      left join tipo_vivienda on tipo_vivienda.id_tipo_vivienda = vivienda.id_tipo_vivienda
      left join clasificacion caspint on caspint.id_clasificacion = vivienda.aspecto_interior
      left join clasificacion caspext on caspext.id_clasificacion = vivienda.aspecto_exterior
      where entrevista.id_entrevista = ?";

      $info[] = $cq->getFilasById($idEntrevista,$sql);
    return $info;
    }

  }
?>
