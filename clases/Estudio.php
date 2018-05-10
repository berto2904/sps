<?php
  require_once('connQuery.php');

  Class Estudio{

    private $id_estudios;
    private $id_postulante;
    private $id_nivel_estudio;
    private $organizacion;
    private $titulo;
    private $desde;
    private $hasta;
    private $situacion;

    function __construct($id_postulante, $id_nivel_estudio, $organizacion, $titulo, $desde, $hasta, $situacion){
       $this->id_postulante = $id_postulante;
       $this->id_nivel_estudio = $id_nivel_estudio;
       $this->organizacion = $organizacion;
       $this->titulo = $titulo;
       $this->desde = $desde;
       $this->hasta = $hasta;
       $this->situacion = $situacion;
    }

    function registrarEstudio(){
      $cq = new connQuery();
      $sql = "INSERT INTO estudios(id_postulante, id_nivel_estudio, organizacion, titulo, desde, hasta, situacion)
                    VALUES (?,?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
      "iissiis",
      $this->id_postulante,
      $this->id_nivel_estudio,
      $this->organizacion,
      $this->titulo,
      $this->desde,
      $this->hasta,
      $this->situacion
      );

      mysqli_stmt_execute($ps);
      $this->id_estudios = $cq->getUltimoId();
      return $this->id_estudios;
    }
    
    public static function consultarEstudiosByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
      					estudios.id_estudios									id_estudios,
      					estudios.id_nivel_estudio							id_nivel_estudio,
      					nivel_estudio.descripcion							nivel_estudio,
      					estudios.organizacion									estudio_establecimiento,
      					estudios.desde												estudio_desde,
      					estudios.hasta												estudio_hasta,
      					estudios.situacion										estudio_situacion,
      					estudios.titulo												estudio_titulo_obtenido
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join estudios on estudios.id_postulante = postulante.id_postulante
      left join nivel_estudio on nivel_estudio.id_nivel_estudio = estudios.id_nivel_estudio
      where entrevista.id_entrevista = ?";

      return $cq->getFilasById($idEntrevista,$sql);
    }

  }
?>
