
<?php
  require_once('connQuery.php');

  Class TarjetaEntidad{

    private $id_tarjeta_entidad;
    private $id_tarjeta_credito_debito;
    private $tarjeta;
    private $entidad;

    function __construct($id_tarjeta_credito_debito, $tarjeta, $entidad){
        $this->id_tarjeta_credito_debito = $id_tarjeta_credito_debito;
        $this->tarjeta = $tarjeta;
        $this->entidad = $entidad;

    }
    function registrarTarjetaEntidad(){
      $cq = new connQuery();
      $sql = "INSERT INTO tarjeta_entidad (id_tarjeta_credito_debito, tarjeta, entidad) VALUES (?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iss",
      $this->id_tarjeta_credito_debito,
      $this->tarjeta,
      $this->entidad);

      mysqli_stmt_execute($ps);
      $this->id_tarjeta_entidad = $cq->getUltimoId();
      return $this->id_tarjeta_entidad;
    }

    public static function consultarTarjetasEntidadesByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
           tarjeta_entidad.id_tarjeta_entidad					id_tarjeta_entidad,
           tarjeta_entidad.tarjeta											tarjeta,
           tarjeta_entidad.entidad											entidad
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join tarjeta_credito_debito on tarjeta_credito_debito.id_informacion_economica = postulante.id_informacion_economica
      left join tarjeta_entidad on tarjeta_entidad.id_tarjeta_credito_debito = tarjeta_credito_debito.id_tarjeta_credito_debito
      where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }

  }
?>
