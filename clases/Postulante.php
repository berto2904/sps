<?php
  require_once('connQuery.php');

  Class Postulante{

    private $id_postulante;
    private $nombres;
    private $apellido;
    private $fecha_de_nacimiento;
    private $ci_numero;
    private $expedida_por_A;
    private $expedida_por_B;
    private $licencia_conductor;
    private $lugar_nacimiento;
    private $nacionalidad;
    private $dni;
    private $profesion;
    private $id_estado_civil;
    private $id_informacion_socioambiental;
    private $id_informacion_economica;
    private $id_sexo;
    private $licencia_categoria;

    function __construct($nombres, $apellido, $fecha_de_nacimiento, $ci_numero, $expedida_por_A, $licencia_conductor, $lugar_nacimiento, $nacionalidad, $dni, $profesion, $id_estado_civil, $id_informacion_socioambiental, $id_informacion_economica, $id_sexo, $licencia_categoria,$expedida_por_B){
    $this->nombres= $nombres;
    $this->apellido=$apellido;
    $this->fecha_de_nacimiento=$fecha_de_nacimiento;
    $this->ci_numero=$ci_numero;
    $this->expedida_por_A=$expedida_por_A;
    $this->expedida_por_B=$expedida_por_B;
    $this->licencia_conductor=$licencia_conductor;
    $this->lugar_nacimiento=$lugar_nacimiento;
    $this->nacionalidad=$nacionalidad;
    $this->dni=$dni;
    $this->profesion=$profesion;
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
						ci_numero,
            expedida_por_A,
						licencia_conductor,
						lugar_nacimiento,
						nacionalidad,
            dni,
						profesion,
						id_estado_civil,
						id_informacion_socioambiental,
            id_informacion_economica,
            id_sexo,
            licencia_categoria,
            expedida_por_B) VALUES (?,?,?,?   ,?,?,?,?    ,?,?,?,?    ,?,?,?,?  )";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
        "sssisissisiiiiss",
        $this->nombres,
        $this->apellido,
        $this->fecha_de_nacimiento,
        $this->ci_numero,
        $this->expedida_por_A,
        $this->licencia_conductor,
        $this->lugar_nacimiento,
        $this->nacionalidad,
        $this->dni,
        $this->profesion,
        $this->id_estado_civil,
        $this->id_informacion_socioambiental,
        $this->id_informacion_economica,
        $this->id_sexo,
        $this->licencia_categoria,
        $this->expedida_por_B);
      mysqli_stmt_execute($ps);
      $id_postulante = $cq->getUltimoId();
      return $id_postulante;
    }

  }
?>
