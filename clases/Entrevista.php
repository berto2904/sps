<?php
  require_once('connQuery.php');
  include ('../helper/consultaGenerica.php');

  class Entrevista{
          private $id_entrevista;
          private $id_postulante;
          private $organizacion;
          private $puesto;
          private $fecha_hora;
          private $informacion_relevante;
          private $id_usuario;

    function __construct($id_postulante, $organizacion, $puesto, $fecha_hora, $informacion_relevante, $id_usuario){
       $this->id_postulante = $id_postulante;
       $this->organizacion = $organizacion;
       $this->puesto = $puesto;
       $this->fecha_hora = $fecha_hora;
       $this->informacion_relevante= $informacion_relevante;
       $this->id_usuario = $id_usuario;
        	}

    function registrarEntrevista(){
      $cq = new connQuery();
      $sql = "INSERT INTO entrevista (
						id_postulante,
						organizacion,
						puesto,
						fecha_hora,
						informacion_relevante,
						id_usuario) VALUES(?,?,?,?,?,?)";

      $ps = $cq->prepare($sql);
      mysqli_stmt_bind_param($ps,
        "issssi",
        $this->id_postulante,
				$this->organizacion,
				$this->puesto,
				$this->fecha_hora,
				$this->informacion_relevante,
				$this->id_usuario);

      mysqli_stmt_execute($ps);
      $registro = mysqli_stmt_fetch($ps);
      return $registro;
    }

    public static function consultarEntrevistas(){
      $sql = "SELECT 	en.id_entrevista                id_entrevista,
                  		en.organizacion                 organizacion,
                  		en.puesto                       puesto,
                  		en.fecha_hora					          fechaHoraEntrevista,
                  		en.informacion_relevante		    infoRelevante,
                  		p.id_postulante                 idPostulante,
                  		p.nombres                       nombres ,
                  		p.apellido                      apellido,
                  		p.fecha_de_nacimiento           fNacPostulante,
                  		p.licencia_conductor            licenciaConductor,
                  		p.lugar_nacimiento              lugarNacimiento,
                  		p.nacionalidad                  nacionalidad,
                  		p.dni                           dni,
                  		p.profesion                     profesion,
                  		p.licencia_categoria            licenciaCategoria,
                  		p.id_informacion_socioambiental informeSocioambiental,
                  		s.descripcion                   sexo,
                  		ec.descripcion				  	      estadoCivil,
                  		p.expedida_por_B                expedidaLicConducir
                  FROM entrevista en
                  join postulante p on en.id_postulante = p.id_postulante
                  left join sexo s on s.id_sexo = p.id_sexo
                  left join estado_civil ec on ec.id_estado_civil = p.id_estado_civil
                  order by id_entrevista";

    return consultaGenerica($sql);
    }

  }
?>
