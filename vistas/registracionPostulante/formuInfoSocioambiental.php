<div class="tab-pane" role="tabpanel" id="formuInfoSocioambiental">
  <div class="formuInfoSocioambiental">
    <div class="row">
      <h3>Domiclio</h3>
      <div class="col-md-6" id="googleMapDireccion">
        <input id="autocomplete" class="controls" type="text" placeholder="Ingresar direccion">
        <div id="map"> </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-9">
            <label for="">Calle</label>
            <input type="text" class="form-control" id="route" name="calle" placeholder="Calle" value="">
            <input type="hidden" name="latLng" id="gmap" value="">
          </div>
          <div class="col-md-3">
            <label for="">Numero</label>
            <input type="number" class="form-control" id="street_number" name="numero" placeholder="Numero" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <label for="">Localidad</label>
            <input type="text" class="form-control" id="locality" name="localidad" placeholder="Localidad" value="">
          </div>
          <div class="col-md-3">
            <label for="">Codigo Postal</label>
            <input type="text" class="form-control" id="postal_code" name="cp" placeholder="CP" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="">Partido</label>
            <input type="text" class="form-control" id="administrative_area_level_2" name="partido" placeholder="Partido" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Telefono</label>
            <input type="tel" class="form-control" id="" name="telefono" placeholder="Tel:" value="" style="">
          </div>
          <div class="col-md-3">
            <label for="">Piso</label>
            <input type="number" class="form-control" id="" name="piso" placeholder="Piso" value="" style=" width: 5em;">
          </div>
          <div class="col-md-3">
            <label for="">Departamento</label>
            <input type="text" class="form-control" id="" name="depto" placeholder="Depto." value="" style="width: 5em;">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <h3>Transporte</h3>
      <div class="row col-md-12">
        <div class="col-md-2">
          <label>Colectivos</label>
          <label class="switch">
            <input type="checkbox" class = "form-control" name="trasporte[1][1]" checked value="1">
            <span class="slider round"></span>
          </label>
        </div>
        <div class="col-md-10">
          <label>Distancia del domicilio: </label>
          <input class="form-group"type="number" name="trasporte[1][2]" value="" style="width: 3em;">
          <label>cuadra/s</label>
        </div>
      </div>
      <div class="row col-md-12">
        <div class="col-md-2">
          <label>Ferrocarril</label>
          <label class="switch">
            <input type="checkbox" class = "form-control" name="trasporte[2][1]" checked value="2">
            <span class="slider round"></span>
          </label>
        </div>
        <div class="col-md-10">
          <label>Distancia del domicilio: </label>
          <input class="form-group"type="number" name="trasporte[2][2]" value="" style="width: 3em;">
          <label>cuadra/s</label>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <h3>Referencia útil (hospital, escuela, estación, avenida): </h3>
        <div class="col-md-12">
          <textarea name="referenciaUtilDomicilio" class="form-control" rows="4" cols="80" maxlength="100"></textarea>
        </div>
    </div>
  </div>
</div>
