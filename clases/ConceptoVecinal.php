
<?php
  require_once('connQuery.php');

  Class ConceptoVecinal{

    private $id_concepto_vecinal;
    private $id_informacion_socioambiental;
    private $nombre_apellido;
    private $concepto_del_entrevistado;
    private $afinidad;
    private $tipo_de_amistades;
    private $problemas_policiales;
    private $problemas_economicos;
    private $tiempo_que_conoce;
    private $domicilio;

    function __construct($id_informacion_socioambiental, $nombre_apellido, $concepto_del_entrevistado, $afinidad, $tipo_de_amistades, $problemas_policiales, $problemas_economicos, $tiempo_que_conoce, $domicilio){
       $this->id_informacion_socioambiental = $id_informacion_socioambiental;
       $this->nombre_apellido = $nombre_apellido;
       $this->concepto_del_entrevistado = $concepto_del_entrevistado;
       $this->afinidad = $afinidad;
       $this->tipo_de_amistades = $tipo_de_amistades;
       $this->problemas_policiales = $problemas_policiales;
       $this->problemas_economicos = $problemas_economicos;
       $this->tiempo_que_conoce = $tiempo_que_conoce;
       $this->domicilio = $domicilio;

    }
    function registrarConceptoVecinal(){
      $cq = new connQuery();
      $sql = "INSERT INTO concepto_vecinal (id_informacion_socioambiental, nombre_apellido, concepto_del_entrevistado, afinidad, tipo_de_amistades, problemas_policiales, problemas_economicos, tiempo_que_conoce, domicilio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "isissssss",
      $this->id_informacion_socioambiental,
      $this->nombre_apellido,
      $this->concepto_del_entrevistado,
      $this->afinidad,
      $this->tipo_de_amistades,
      $this->problemas_policiales,
      $this->problemas_economicos,
      $this->tiempo_que_conoce,
      $this->domicilio);

      mysqli_stmt_execute($ps);
      $this->id_concepto_vecinal = $cq->getUltimoId();
      return $this->id_concepto_vecinal;
    }


    public static function consultarConceptosVecinalesByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
       			concepto_vecinal.id_concepto_vecinal							id_concepto_vecinal,
       			concepto_vecinal.nombre_apellido									vecino_nombre_apellido,
       			concepto_vecinal.afinidad													afinidad,
       			concepto_vecinal.tipo_de_amistades								tipo_de_amistades,
       			concepto_vecinal.problemas_policiales							problemas_policiales,
       			concepto_vecinal.problemas_economicos							problemas_economicos,
       			concepto_vecinal.tiempo_que_conoce								tiempo_que_conoce,
       			concepto_vecinal.domicilio												vecino_domicilio,
       			concepto_vecinal.concepto_del_entrevistado				id_concepto_del_entrevistado,
       			concepto_del_entrevistado.descripcion							concepto_del_entrevistado
       FROM entrevista
       left join postulante on entrevista.id_postulante  = postulante.id_postulante
       left join concepto_vecinal on concepto_vecinal.id_informacion_socioambiental = postulante.id_informacion_socioambiental
       left join clasificacion concepto_del_entrevistado on concepto_del_entrevistado.id_clasificacion = concepto_vecinal.concepto_del_entrevistado
       where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }

  }
?>
