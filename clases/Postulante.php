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
        "ssssssiiiiiss",
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

    // public static function consultarPostulanteByIdEntrevista($idEntrevista){
    //   $cq = new connQuery();
    //   $sql = "SELECT
    //         entrevista.id_entrevista                                id_entrevista,
    //         entrevista.organizacion                                 organizacion,
    //         entrevista.puesto                                       puesto,
    //         entrevista.fecha_hora                                   entrevista_fechaHora,
    //         entrevista.informacion_relevante                        informacion_relevante,
    //         entrevista.id_usuario                                   id_usuario,
    //         postulante.id_postulante                                id_postulante,
    //         postulante.nombres                                      postulante_nombres,
    //         postulante.apellido                                     postulante_apellido,
    //         postulante.fecha_de_nacimiento                          postulante_fecha_de_nacimiento,
    //         postulante.licencia_conductor                           licencia_conductor,
    //         postulante.lugar_nacimiento                             postulante_lugar_nacimiento,
    //         postulante.nacionalidad                                 postulante_nacionalidad,
    //         postulante.dni                                          postulante_dni,
    //         postulante.profesion                                    postulante_profesion,
    //         postulante.licencia_categoria                           licencia_categoria,
    //         postulante.id_sexo                                      postulante_id_sexo,
    //         sp.descripcion                                          postulante_sexo,
    //         postulante.id_estado_civil                              id_estado_civil,
    //         postulante.expedida_por_B                               expedida_lic_conducir,
    //         estado_civil.descripcion                                postulante_estado_civil,
    //         estado_civil.tipo                                       postulante_estado_civil_tipo,
    //         conyuge.id_conyuge                                      id_conyuge,
    //         conyuge.nombres                                         conyuge_nombres,
    //         conyuge.apellido                                        conyuge_apellido,
    //         conyuge.fecha_nacimiento                                conyuge_fecha_nacimiento,
    //         conyuge.lugar_nacimiento                                conyuge_lugar_nacimiento,
    //         conyuge.nacionalidad                                    conyuge_nacionalidad,
    //         conyuge.profesion                                       conyuge_profesion,
    //         conyuge.dni                                             conyuge_dni,
    //         conyuge.id_sexo                                         conyuge_id_sexo,
    //         observaciones_convivencia.id_observaciones_convivencia  id_observaciones_convivencia,
    //         observaciones_convivencia.observacion                   observaciones_convivencia,
    //         sc.descripcion                                          conyuge_sexo,
    //         postulante.id_informacion_socioambiental                id_informacion_socioambiental,
    //         informacion_socioambiental.id_domicilio                 id_domicilio,
    //         informacion_socioambiental.id_vivienda                  id_vivienda,
    //         postulante.id_informacion_economica                     id_informacion_economica,
    //         informacion_economica.id_movilidad_propia               id_movilidad_propia,
    //         domicilio.localidad                                     localidad,
    //         domicilio.calle                                         calle,
    //         domicilio.numero                                        numero,
    //         domicilio.piso                                          piso,
    //         domicilio.departamento                                  departamento,
    //         domicilio.gmap                                          gmap,
    //         domicilio.telefono                                      telefono,
    //         domicilio.referencia_util                               referencia_util,
    //         domicilio.codigo_postal                                 codigo_postal,
    //         domicilio.partido                                       partido,
    //         movilidad_propia.id_vehiculo_tipo                       id_vehiculo_tipo,
    //         vehiculo_tipo.descripcion                               vehiculo,
    //         movilidad_propia.marca                                  marca,
    //         movilidad_propia.modelo                                 modelo,
    //         movilidad_propia.anio                                   anio,
    //         movilidad_propia.titular                                titular,
    //         movilidad_propia.patente                                patente,
    //         tarjeta_credito_debito.id_tarjeta_credito_debito        id_tarjeta_credito_debito,
    //         tarjeta_credito_debito.otras_propiedades                otras_propiedades,
    //         tarjeta_credito_debito.seguro_de_vida                   seguro_de_vida,
    //         tarjeta_credito_debito.prendas                          prendas,
    //         tarjeta_credito_debito.observaciones                    cre_deb_observaciones,
    //         vivienda.id_tipo_vivienda                               id_tipo_vivienda,
    //         tipo_vivienda.descripcion                               tipo_vivienda,
    //         vivienda.aspecto_interior                               id_aspecto_interior,
    //         caspint.descripcion                                     aspecto_interior,
    //         vivienda.aspecto_exterior                               id_aspecto_exterior,
    //         caspext.descripcion                                     aspecto_exterior,
    //         vivienda.propietario                                    vivienda_propietario,
    //         vivienda.ambientes                                      vivienda_ambientes,
    //         vivienda.inquilino                                      vivienda_inquilino,
    //         vivienda.importe_alquiler                               vivienda_importe_alquiler,
    //         vivienda.accesibilidad                                  vivienda_accesibilidad
    //   FROM entrevista
    //   left join postulante on entrevista.id_postulante  = postulante.id_postulante
    //   left join sexo sp on sp.id_sexo = postulante.id_sexo
    //   left join estado_civil on estado_civil.id_estado_civil = postulante.id_estado_civil
    //   left join conyuge on conyuge.id_postulante = postulante.id_postulante
    //   left join sexo sc on sc.id_sexo = conyuge.id_sexo
    //   left join informacion_economica on informacion_economica.id_informacion_economica = postulante.id_informacion_economica
    //   left join informacion_socioambiental on informacion_socioambiental.id_informacion_socioambiental = postulante.id_informacion_socioambiental
    //   left join domicilio on domicilio.id_domicilio = informacion_socioambiental.id_domicilio
    //   left join movilidad_propia on movilidad_propia.id_movilidad_propia = informacion_economica.id_movilidad_propia
    //   left join vehiculo_tipo on vehiculo_tipo.id_vehiculo_tipo = movilidad_propia.id_vehiculo_tipo
    //   left join tarjeta_credito_debito on tarjeta_credito_debito.id_informacion_economica = postulante.id_informacion_economica
    //   left join vivienda on vivienda.id_vivienda = informacion_socioambiental.id_vivienda
    //   left join tipo_vivienda on tipo_vivienda.id_tipo_vivienda = vivienda.id_tipo_vivienda
    //   left join clasificacion caspint on caspint.id_clasificacion = vivienda.aspecto_interior
    //   left join clasificacion caspext on caspext.id_clasificacion = vivienda.aspecto_exterior
    //   left join observaciones_convivencia on observaciones_convivencia.id_postulante = postulante.id_postulante
    //   where entrevista.id_entrevista = ?";
    //
    //   $postulante[] = $cq->getFilasById($idEntrevista,$sql);
    // return $postulante;
    // }

    public static function consultarPostulanteByIdEntrevista($idEntrevista){
      $cq = new connQuery();
      $sql = "SELECT
            postulante.id_sexo                                      id_sexo_postulante,
            postulante.id_estado_civil                              id_estado_civil,
            postulante.nombres                                      postulante_nombres,
            postulante.apellido                                     postulante_apellido,
            postulante.fecha_de_nacimiento                          postulante_fecha_de_nacimiento,
            postulante.licencia_conductor                           licencia_conductor,
            postulante.nacionalidad                                 postulante_nacionalidad,
            postulante.dni                                          postulante_dni,
            postulante.lugar_nacimiento                             postulante_lugar_nacimiento,
            postulante.profesion                                    postulante_profesion,
            postulante.licencia_categoria                           licencia_categoria,
            sp.descripcion                                          postulante_sexo,
            postulante.expedida_por_B                               expedida_lic_conducir,
            estado_civil.descripcion                                postulante_estado_civil,
            estado_civil.tipo                                       postulante_estado_civil_tipo
      FROM entrevista
      left join postulante on entrevista.id_postulante  = postulante.id_postulante
      left join sexo sp on sp.id_sexo = postulante.id_sexo
      left join estado_civil on estado_civil.id_estado_civil = postulante.id_estado_civil
      where entrevista.id_entrevista = ?";

      $info[] = $cq->getFilasById($idEntrevista,$sql);
    return $info;
    }

  }
?>
