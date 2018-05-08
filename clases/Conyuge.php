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

  }
?>
