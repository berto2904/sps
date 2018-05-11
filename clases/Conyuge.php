<?php
  require_once('connQuery.php');

  Class Conyuge{

    private $apellido_conyuge;
    private $nombres_conyuge;
    private $id_sexo_conyuge;
    private $fecha_de_nacimiento_conyuge;
    private $dni_conyuge;
    private $lugar_nacimiento_conyuge;
    private $nacionalidad_conyuge;
    private $profesion_conyuge;
    private $id_postulante;

    function __construct($apellido_conyuge, $nombres_conyuge, $id_sexo_conyuge, $fecha_de_nacimiento_conyuge, $dni_conyuge, $lugar_nacimiento_conyuge, $nacionalidad_conyuge, $profesion_conyuge,$id_postulante){
       $this->apellido_conyuge=$apellido_conyuge;
       $this->nombres_conyuge=$nombres_conyuge;
       $this->id_sexo_conyuge=$id_sexo_conyuge;
       $this->fecha_de_nacimiento_conyuge=$fecha_de_nacimiento_conyuge;
       $this->dni_conyuge=$dni_conyuge;
       $this->lugar_nacimiento_conyuge=$lugar_nacimiento_conyuge;
       $this->nacionalidad_conyuge=$nacionalidad_conyuge;
       $this->profesion_conyuge=$profesion_conyuge;
       $this->id_postulante=$id_postulante;

    }
    function registrarConyuge(){
      $cq = new connQuery();
      $sql = "INSERT INTO conyuge(
        apellido,
        nombres,
        id_sexo,
        fecha_nacimiento,
        dni,
        lugar_nacimiento,
        nacionalidad,
        profesion,
        id_postulante) VALUES (?,?,?,?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
        "ssisisssi",
        $this->apellido_conyuge,
        $this->nombres_conyuge,
        $this->id_sexo_conyuge,
        $this->fecha_de_nacimiento_conyuge,
        $this->dni_conyuge,
        $this->lugar_nacimiento_conyuge,
        $this->nacionalidad_conyuge,
        $this->profesion_conyuge,
        $this->id_postulante);

      mysqli_stmt_execute($ps);
      $id_conyuge = $cq->getUltimoId();
      return $id_conyuge;
    }
    public static function consultarPostulanteByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
            conyuge.id_conyuge                                      id_conyuge,
            conyuge.id_sexo                                         id_sexo_conyuge,
            observaciones_convivencia.id_observaciones_convivencia  id_observaciones_convivencia,
            conyuge.nombres                                         conyuge_nombres,
            conyuge.apellido                                        conyuge_apellido,
            conyuge.fecha_nacimiento                                conyuge_fecha_nacimiento,
            conyuge.lugar_nacimiento                                conyuge_lugar_nacimiento,
            conyuge.nacionalidad                                    conyuge_nacionalidad,
            conyuge.profesion                                       conyuge_profesion,
            conyuge.dni                                             conyuge_dni,
            observaciones_convivencia.observacion                   observaciones_convivencia,
            sc.descripcion                                          conyuge_sexo
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join conyuge on conyuge.id_postulante = postulante.id_postulante
      left join sexo sc on sc.id_sexo = conyuge.id_sexo
      left join observaciones_convivencia on observaciones_convivencia.id_postulante = postulante.id_postulante
      where entrevista.id_entrevista = ?";

      $info[] = $cq->getFilasById($idEntrevista,$sql);
    return $info;
    }

  }
?>
