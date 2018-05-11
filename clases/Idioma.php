<?php
  require_once('connQuery.php');

  Class Idioma{

    private $id_idioma;
    private $id_idioma_tipo;
    private $id_postulante;
    private $lee;
    private $habla;
    private $escribe;

    function __construct($id_postulante,$id_idioma_tipo, $lee, $habla, $escribe){
      $this->id_postulante = $id_postulante;
      $this->id_idioma_tipo = $id_idioma_tipo;
      $this->lee=$lee;
      $this->habla=$habla;
      $this->escribe=$escribe;
    }
    function registrarIdioma(){
      $cq = new connQuery();
      $sql = "INSERT INTO idioma (id_postulante, id_idioma_tipo, lee, habla, escribe) VALUES (?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iiiii",
      $this->id_postulante,
      $this->id_idioma_tipo,
      $this->lee,
      $this->habla,
      $this->escribe);

      mysqli_stmt_execute($ps);
      $id_atributo = $cq->getUltimoId();
      return $id_atributo;
    }
    public static function consultarIdiomasByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
      			idioma.id_idioma										id_idioma,
      			idioma.lee													id_lee,
      			idioma.habla												id_habla,
      			idioma.escribe											id_escribe,
      			lee.descripcion											lee,
      			habla.descripcion										habla,
      			escribe.descripcion									escribe,
      			idioma.id_idioma_tipo								id_idioma_tipo,
      			idioma_tipo.descripcion							idioma_tipo
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join idioma on idioma.id_postulante = postulante.id_postulante
      left join clasificacion_idioma lee on lee.id_clasificacion_idioma = idioma.lee
      left join clasificacion_idioma habla on habla.id_clasificacion_idioma = idioma.habla
      left join clasificacion_idioma escribe on escribe.id_clasificacion_idioma = idioma.escribe
      left join idioma_tipo on idioma_tipo.id_idioma_tipo = idioma.id_idioma_tipo
      where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }

  }
?>
