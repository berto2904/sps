<?php
require ($server. "/sps/clases/Transporte.php");
$transportes = Transporte::consultarTransportes();

?>
<div class="tab-pane" role="tabpanel" id="formuInfoSocioambiental">
  <div class="formuInfoSocioambiental">
    <div class="row">
      <h3>Domicilio</h3>
      <div class="col-md-6" id="googleMapDireccion">
        <input id="autocomplete" class="controls" type="text" placeholder="Ingresar direccion">
        <div id="map"> </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-9">
            <label for="">Calle</label>
            <input type="text" class="form-control" id="route" name="calle" placeholder="Calle" value="" maxlength="70">
            <input type="hidden" name="latLng" id="gmap" value="">
          </div>
          <div class="col-md-3">
            <label for="">Numero</label>
            <input type="number" class="form-control" id="street_number" name="numero" placeholder="Numero" value="" min="1">
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <label for="">Localidad</label>
            <input type="text" class="form-control" id="locality" name="localidad" placeholder="Localidad" value="" maxlength="70">
          </div>
          <div class="col-md-3">
            <label for="">Codigo Postal</label>
            <input type="text" class="form-control" id="postal_code" name="cp" placeholder="CP" value="" maxlength="70">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="">Partido</label>
            <input type="text" class="form-control" id="administrative_area_level_2" name="partido" placeholder="Partido" value="" maxlength="70">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Tel:" value="" style="" maxlength="70">
          </div>
          <div class="col-md-3">
            <label for="">Piso</label>
            <input type="number" class="form-control" id="piso" name="piso" placeholder="Piso" value="" style=" width: 5em;" min="1">
          </div>
          <div class="col-md-3">
            <label for="">Departamento</label>
            <input type="text" class="form-control" id="depto" name="depto" placeholder="Depto." value="" style="width: 5em;" maxlength="70">
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <label class="tituloLabel">Transporte:</label>
        <?php foreach ($transportes as $key => $transporte) {?>
          <div class="row col-md-12">
            <div class="col-md-1">
              <label><?php echo $transporte['descripcion']?></label>
            </div>
            <div class="col-md-1">
              <label class="switch">
                <input type="checkbox" class = "form-control transporte"  id="transporte_<?php echo $transporte['id']?>_1" name="trasporte[<?php echo $transporte['id']?>][1]" value="<?php echo $transporte['id']?>">
                <span class="slider round"></span>
              </label>
            </div>
            <div class="col-md-10">
              <label>Distancia del domicilio: </label>
              <input class="form-group" type="number" id="transporte_<?php echo $transporte['id']?>_2" name="trasporte[<?php echo $transporte['id']?>][2]" value="" style="width: 3em;" min="1">
              <label>cuadra/s</label>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
          <label for="[object Object]">Referencia útil (hospital, escuela, estación, avenida):</label>
          <textarea id="referencia_util" name="referenciaUtilDomicilio" class="form-control" rows="2" cols="20" maxlength="250"></textarea>
        </div>
    </div>
    <hr>
    <div class="row">
      <h3>Vivienda</h3>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-9">
            <label for="tipo_vivienda">Tipo de vivienda</label>
            <select id="id_tipo_vivienda" class="form-control" name="vivienda[tipo_vivienda]" placeholder="">
              <option value=""></option>
              <option value="1">Material</option>
              <option value="2">Prefabricada</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="tipo_vivienda">Ambientes</label>
            <input id="vivienda_ambientes" class="form-control" type="number" name="vivienda[ambientes]" value="" min="1">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="aspecto_interior">Aspecto Interior</label>
            <select id="id_aspecto_interior" class="form-control" name="vivienda[aspecto_interior]" placeholder="">
              <option value=""></option>
              <option value="1">Muy Bueno</option>
              <option value="2">Bueno</option>
              <option value="3">Regular</option>
              <option value="4">Malo</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="aspecto_interior">Aspecto Exterior</label>
            <select id="id_aspecto_exterior" class="form-control" name="vivienda[aspecto_exterior]" placeholder="">
              <option value=""></option>
              <option value="1">Muy Bueno</option>
              <option value="2">Bueno</option>
              <option value="3">Regular</option>
              <option value="4">Malo</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label for="">Propietario</label>
            <select id="vivienda_propietario" class="form-control" name="vivienda[propietario]">
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="">Inquilino</label>
            <select id="vivienda_inquilino" class="form-control" name="vivienda[inquilino]">
              <option value=""></option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="">Importe de Alquiler</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
              <input  id="vivienda_importe_alquiler" class="form-control" type="number" name="vivienda[importe_alquiler]" value="" min="1">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="">Servicios:  </label>
        <div class="row serviciosVivienda">
          <div class="col-md-6">
            <label class="containerRadio">Luz
              <input id="id_servicio_1" type="checkbox" name="vivienda[servicio][1]" value="1">
              <span class="checkmark"></span>
            </label>
            <label class="containerRadio">Gas
              <input id="id_servicio_2" type="checkbox" name="vivienda[servicio][2]" value="2">
              <span class="checkmark"></span>
            </label>
            <label class="containerRadio">Agua Corriente
              <input id="id_servicio_3" type="checkbox" name="vivienda[servicio][3]" value="3">
              <span class="checkmark"></span>
            </label>
            <label class="containerRadio">Telefono
              <input id="id_servicio_4" type="checkbox" name="vivienda[servicio][4]" value="4">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="col-md-6">
            <label class="containerRadio">TV por Cable
              <input id="id_servicio_5" type="checkbox" name="vivienda[servicio][5]" value="5">
              <span class="checkmark"></span>
            </label>
            <label class="containerRadio">Cloacas
              <input id="id_servicio_6" type="checkbox" name="vivienda[servicio][6]" value="6">
              <span class="checkmark"></span>
            </label>
            <label class="containerRadio">Pavimento
              <input id="id_servicio_7" type="checkbox" name="vivienda[servicio][7]" value="7">
              <span class="checkmark"></span>
            </label>
            <label class="containerRadio">Vigilancia Privada
              <input id="id_servicio_8" type="checkbox" name="vivienda[servicio][8]" value="8">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="">Accesibiliad</label>
        <textarea id="vivienda_accesibilidad" name="vivienda[accesibilidad]" class="form-control" rows="2" cols="20" maxlength="250"></textarea>
      </div>
    </div>
    <hr>
    <div class="row">
      <h3>Concepto Vecinal</h3>
      <div id="vecino_0" class="col-md-6" style="border-right: 2px dashed;">
        <h4 class="tituloLabel">Vecino 1:</h4>
        <div class="col-md-6">
          <label for="">Nombre Y Apellido</label>
          <input type="text" id="vecino_nombre_apellido" class="form-control" name="conceptoVecinal[1][apellido_mombre]" placeholder="Apellido y Nombre" value="" maxlength="70">

          <label for="">Concepto del Entrevistado</label>
          <select id="id_concepto_del_entrevistado"class="form-control" name="conceptoVecinal[1][conceptoEntrevistado]">
            <option value=""></option>
            <option value="1">Muy Bueno</option>
            <option value="2">Bueno</option>
            <option value="3">Regular</option>
            <option value="4">Malo</option>
          </select>

          <label for="">Problemas Policiales</label>
          <select id="problemas_policiales"class="form-control" name="conceptoVecinal[1][problemas_policiales]">
            <option value=""></option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>

          <label for="">Afinidad</label>
          <input type="text" id="afinidad" class="form-control" name="conceptoVecinal[1][afinidad]" placeholder="Afinidad" value="" maxlength="70">
        </div>
        <div class="col-md-6">
          <label for="">Domicilio</label>
          <input type="text" id="vecino_domicilio" class="form-control" name="conceptoVecinal[1][domicilio]" placeholder="Domicilio" value="" maxlength="70">

          <label for="">Tipo de amistades</label>
          <select id="tipo_de_amistades"class="form-control" name="conceptoVecinal[1][tipo_de_amistades]">
            <option value=""></option>
            <option value="Buenas">Buenas</option>
            <option value="Malas">Malas</option>
          </select>

          <label for="">Problemas Economicos</label>
          <select id="problemas_economicos"class="form-control" name="conceptoVecinal[1][problemas_economicos]">
            <option value=""></option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>

          <label for="">Tiempo que lo conoce</label>
          <input type="text" id="tiempo_que_conoce" class="form-control" name="conceptoVecinal[1][tiempo_que_conoce]" placeholder="Tiempo que lo conoce" value="" maxlength="70">
        </div>
      </div>
      <div  id="vecino_1" class="col-md-6">
        <h4 class="tituloLabel">Vecino 2:</h4>
        <div class="col-md-6" >
          <label for="">Nombre Y Apellido</label>
          <input type="text" id="vecino_nombre_apellido" class="form-control" name="conceptoVecinal[2][apellido_mombre]" placeholder="Apellido y Nombre" value="" maxlength="70">

          <label for="">Concepto del Entrevistado</label>
          <select id="id_concepto_del_entrevistado"class="form-control" name="conceptoVecinal[2][conceptoEntrevistado]">
            <option value=""></option>
            <option value="1">Muy Bueno</option>
            <option value="2">Bueno</option>
            <option value="3">Regular</option>
            <option value="4">Malo</option>
          </select>

          <label for="">Problemas Policiales</label>
          <select id="problemas_policiales"class="form-control" name="conceptoVecinal[2][problemas_policiales]">
            <option value=""></option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>

          <label for="">Afinidad</label>
          <input type="text" id="afinidad" class="form-control" name="conceptoVecinal[2][afinidad]" placeholder="Afinidad" value="" maxlength="70">
        </div>
        <div class="col-md-6">
          <label for="">Domicilio</label>
          <input type="text" id="vecino_domicilio" class="form-control" name="conceptoVecinal[2][domicilio]" placeholder="Domicilio" value="" maxlength="70">

          <label for="">Tipo de amistades</label>
          <select id="tipo_de_amistades"class="form-control" name="conceptoVecinal[2][tipo_de_amistades]">
            <option value=""></option>
            <option value="Buenas">Buenas</option>
            <option value="Malas">Malas</option>
          </select>

          <label for="">Problemas Economicos</label>
          <select id="problemas_economicos"class="form-control" name="conceptoVecinal[2][problemas_economicos]">
            <option value=""></option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>

          <label for="">Tiempo que lo conoce</label>
          <input type="text" id="tiempo_que_conoce" class="form-control" name="conceptoVecinal[2][tiempo_que_conoce]" placeholder="Tiempo que lo conoce" value="" maxlength="70">
        </div>
      </div>
    </div>
  </div>
</div>
