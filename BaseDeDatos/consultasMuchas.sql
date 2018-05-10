use sps;

---------------------------------------------------------------------------------------------------------
SELECT *
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
where entrevista.id_entrevista = ?;
---------------------------------------------------------------------------------------------------------
select
	familiar_postulante.id_familiar_postulante		id_familiar_postulante,
	familiar_postulante.apellido_nombre						familiar_apellido_nombre,
	familiar_postulante.domicilio									familiar_domicilio,
	familiar_postulante.profesion									familiar_profesion,
	familiar_postulante.id_familiar_tipo					id_familiar_tipo,
	familiar_tipo.descripcion											familiar_tipo
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join familiar_postulante on familiar_postulante.id_postulante = postulante.id_postulante
left join familiar_tipo on familiar_tipo.id_familiar_tipo = familiar_postulante.id_familiar_tipo
where entrevista.id_entrevista = ?;

---------------------------------------------------------------------------------------------------------

SELECT
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
where entrevista.id_entrevista = ?;

--------------------------------------------------------------------------------

SELECT
			idioma.id_idioma										id_idioma,
			idioma.lee													id_lee,
			idioma.habla												id_habla,
			idioma.escribe											id_escribe,
			lee.descripcion											lee,
			habla.descripcion										habla,
			escribe.descripcion									escribe,
			idioma.id_idioma_tipo								id_idioma_tipo,
			idioma_tipo.descripcion							descripcion
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join idioma on idioma.id_postulante = postulante.id_postulante
left join clasificacion_idioma lee on lee.id_clasificacion_idioma = idioma.lee
left join clasificacion_idioma habla on habla.id_clasificacion_idioma = idioma.habla
left join clasificacion_idioma escribe on escribe.id_clasificacion_idioma = idioma.escribe
left join idioma_tipo on idioma_tipo.id_idioma_tipo = idioma.id_idioma_tipo
where entrevista.id_entrevista = ?;

---------------------------------------------------------------------------------------------------------
SELECT
			hobbies_pasatiempos.id_pregunta			id_pregunta,
			hobbies_pasatiempos.respuesta				respuesta,
			pregunta.pregunta										pregunta,
			pregunta.tipo												tipo
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join hobbies_pasatiempos on hobbies_pasatiempos.id_postulante = postulante.id_postulante
left join pregunta on pregunta.id_pregunta = hobbies_pasatiempos.id_pregunta
where entrevista.id_entrevista = ?;
---------------------------------------------------------------------------------------------------------
SELECT
			transporte.id_transporte								id_transporte,
			transporte.id_transporte_tipo						id_transporte_tipo,
			transporte.id_domicilio									id_domicilio,
			transporte.cuadras											cuadras,
			transporte_tipo.descripcion							transporte_tipo
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join informacion_socioambiental on informacion_socioambiental.id_informacion_socioambiental = postulante.id_informacion_socioambiental
left join domicilio on domicilio.id_domicilio = informacion_socioambiental.id_domicilio
left join transporte on transporte.id_domicilio = informacion_socioambiental.id_domicilio
left join transporte_tipo on transporte_tipo.id_transporte_tipo = transporte.id_transporte_tipo
where entrevista.id_entrevista = ?;
--------------------------------------------------------------------------------


SELECT
			vivienda_servicio.id_vivienda				id_vivienda,
			vivienda_servicio.id_servicio				id_servicio,
			servicio.descripcion								servicio
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join informacion_socioambiental on informacion_socioambiental.id_informacion_socioambiental = postulante.id_informacion_socioambiental
left join vivienda_servicio on vivienda_servicio.id_vivienda = informacion_socioambiental.id_vivienda
left join servicio on servicio.id_servicio = vivienda_servicio.id_servicio
where entrevista.id_entrevista = ?;


--------------------------------------------------------------------------------

SELECT
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
where entrevista.id_entrevista = ?;

--------------------------------------------------------------------------------
SELECT
			cuenta_bancaria.id_cuenta_bancaria							id_cuenta_bancaria,
			cuenta_bancaria.entidad													entidad_bancaria
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join cuenta_bancaria on cuenta_bancaria.id_informacion_economica = postulante.id_informacion_economica
where entrevista.id_entrevista = ?;

--------------------------------------------------------------------------------

SELECT
			tarjeta_entidad.id_tarjeta_entidad					id_tarjeta_entidad,
			tarjeta_entidad.tarjeta											tarjeta,
			tarjeta_entidad.entidad											entidad
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join tarjeta_credito_debito on tarjeta_credito_debito.id_informacion_economica = postulante.id_informacion_economica
left join tarjeta_entidad on tarjeta_entidad.id_tarjeta_credito_debito = tarjeta_credito_debito.id_tarjeta_credito_debito
where entrevista.id_entrevista = ?;

---------------------------------------------------------------------------------------------------------
SELECT
			referencias_laborales.id_referencias_laborales		id_referencias_laborales,
			referencias_laborales.empresa											empresa,
			referencias_laborales.domicilio										domicilio,
			referencias_laborales.desde												desde,
			referencias_laborales.hasta												hasta
FROM entrevista
left join postulante on entrevista.id_postulante  = postulante.id_postulante
left join referencias_laborales on referencias_laborales.id_postulante = postulante.id_postulante
where entrevista.id_entrevista = ?;
