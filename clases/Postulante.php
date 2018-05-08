<?php
  require_once('connQuery.php');

  Class Postulante{

    private $id_postulante;
    private $nombres;
    private $apellido;
    private $fecha_de_nacimiento;
    private $expedida_por_B;
    private $licencia_conductor;
    private $lugar_nacimiento;
    private $nacionalidad;
    private $dni;
    private $id_estado_civil;
    private $id_informacion_socioambiental;
    private $id_informacion_economica;
    private $id_sexo;
    private $licencia_categoria;

    function __construct($nombres, $apellido, $fecha_de_nacimiento, $licencia_conductor, $lugar_nacimiento, $nacionalidad, $dni, $id_estado_civil, $id_informacion_socioambiental, $id_informacion_economica, $id_sexo, $licencia_categoria,$expedida_por_B){
    $this->nombres= $nombres;
    $this->apellido=$apellido;
    $this->fecha_de_nacimiento=$fecha_de_nacimiento;
    $this->expedida_por_B=$expedida_por_B;
    $this->licencia_conductor=$licencia_conductor;
    $this->lugar_nacimiento=$lugar_nacimiento;
    $this->nacionalidad=$nacionalidad;
    $this->dni=$dni;
    $this->id_estado_civil=$id_estado_civil;
    $this->id_informacion_socioambiental=$id_informacion_socioambiental;
    $this->id_informacion_economica=$id_informacion_economica;
    $this->id_sexo = $id_sexo;
    $this->licencia_categoria = $licencia_categoria;
    }

    function registrarPostulante(){
      $cq = new connQuery();
      $sql = "INSERT INTO postulante(
            nombres,
						apellido,
						fecha_de_nacimiento,
						licencia_conductor,
						lugar_nacimiento,
						nacionalidad,
            dni,
						id_estado_civil,
						id_informacion_socioambiental,
            id_informacion_economica,
            id_sexo,
            licencia_categoria,
            expedida_por_B) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
        "sssissiiiiiss",
        $this->nombres,
        $this->apellido,
        $this->fecha_de_nacimiento,
        $this->licencia_conductor,
        $this->lugar_nacimiento,
        $this->nacionalidad,
        $this->dni,
        $this->id_estado_civil,
        $this->id_informacion_socioambiental,
        $this->id_informacion_economica,
        $this->id_sexo,
        $this->licencia_categoria,
        $this->expedida_por_B);
      mysqli_stmt_execute($ps);
      $this->id_postulante = $cq->getUltimoId();
      return $this->id_postulante;
    }

  }
?>
