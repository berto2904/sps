<?php
  require_once('connQuery.php');

  Class InformacionEconomica{

    private $id_informacion_economica;
    private $id_movilidad_propia;

    function __construct($id_movilidad_propia){
       $this->id_movilidad_propia = $id_movilidad_propia;
    }

    function registrarInformacionEconomica(){
      $cq = new connQuery();
      $sql = "INSERT INTO informacion_economica (id_movilidad_propia) VALUES (?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "i",
      $this->id_movilidad_propia);

      mysqli_stmt_execute($ps);
      $this->id_informacion_economica = $cq->getUltimoId();
      return $this->id_informacion_economica;
    }

    function actualizarPostulante($idPostulante){
      $cq = new connQuery();
      $sql = "UPDATE postulante
              SET id_informacion_economica = ?
              WHERE id_postulante = ?";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "ii",
      $this->id_informacion_economica,
      $idPostulante);

      mysqli_stmt_execute($ps);
      $id = $cq->getUltimoId();
      return $id;
    }

    public static function consultarPostulanteByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
            postulante.id_informacion_economica                     id_informacion_economica,
            movilidad_propia.id_vehiculo_tipo                       id_vehiculo_tipo,
            informacion_economica.id_movilidad_propia               id_movilidad_propia,
            tarjeta_credito_debito.id_tarjeta_credito_debito        id_tarjeta_credito_debito,
            vehiculo_tipo.descripcion                               vehiculo,
            movilidad_propia.marca                                  marca,
            movilidad_propia.modelo                                 modelo,
            movilidad_propia.anio                                   anio,
            movilidad_propia.titular                                titular,
            movilidad_propia.patente                                patente,
            tarjeta_credito_debito.otras_propiedades                otras_propiedades,
            tarjeta_credito_debito.seguro_de_vida                   seguro_de_vida,
            tarjeta_credito_debito.prendas                          prendas,
            tarjeta_credito_debito.observaciones                    cre_deb_observaciones
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join informacion_economica on informacion_economica.id_informacion_economica = postulante.id_informacion_economica
      left join movilidad_propia on movilidad_propia.id_movilidad_propia = informacion_economica.id_movilidad_propia
      left join vehiculo_tipo on vehiculo_tipo.id_vehiculo_tipo = movilidad_propia.id_vehiculo_tipo
      left join tarjeta_credito_debito on tarjeta_credito_debito.id_informacion_economica = postulante.id_informacion_economica
      where entrevista.id_entrevista = ?";

      $info[] = $cq->getFilasById($idEntrevista,$sql);
    return $info;
    }
  }
?>
