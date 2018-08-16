<div class="tab-pane" role="tabpanel" id="formuInfoFamiliar">
  <div class="formuInfoFamiliar">
    <div class="form-inline">
      <div class="addDamiliarPanel">
        <h3>Datos Familiares</h3>
        <button type="button" name="button" class="btn btn-sm btn-primary" id="addfamiliar">Agregar Familiar</button>
      </div>
    </div>
    <div class="row form-inline" id="datosFamiliares">

    </div>
    <hr>
    <h3>Datos del Cónyuge</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="conyuge_apellido" name="inputApellidoConyuge" placeholder="Apellido" maxlength="70">
          </div>
          <div class="col-md-6">
            <label for="inputNombres">Nombres</label>
            <input type="text" class="form-control" id="conyuge_nombres" name="inputNombresConyuge" placeholder="Nombres" maxlength="70">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="inputFechaNacimmiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="conyuge_fecha_nacimiento" name="inputFechaNacimmientoConyuge" placeholder="Fecha de Nacimmiento">
          </div>
          <div class="col-md-6">
            <label for="inputLugarNacimiento">Lugar de Nacimiento</label>
            <input type="text" class="form-control" id="conyuge_lugar_nacimiento" name="inputLugarNacimientoConyuge" placeholder="Lugar de Nacimiento" maxlength="70">
          </div>
        </div>

        <label for="inputProfesion">Profesion</label>
        <input type="text" class="form-control" id="conyuge_profesion" name="inputProfesionConyuge" placeholder="Profesion" maxlength="70">
      </div>
      <div class="col-md-6">
        <label for="inputSexo">Sexo</label>
        <select class="form-control" id="id_sexo_conyuge" name="inputSexoConyuge" placeholder="Sexo">
          <option value="">Sexo</option>
          <option value=1>Masculino</option>
          <option value=2>Femenino</option>
        </select>

        <label for="inputDni">DNI</label>
        <input type="number" class="form-control" id="conyuge_dni" name="inputDniConyuge" placeholder="DNI" min="0" max="999999999">

        <label for="inputNacionalidad">Nacionalidad</label>
        <input type="text" class="form-control" id="conyuge_nacionalidad" name="inputNacionalidadConyuge" placeholder="Nacionalidad" maxlength="70">

      </div>
    </div>
    <hr>
    <h3>Otras personas que conviven con el entrevistado</h3>
    <div class="row">
      <div class="col-md-12">
        <textarea name="inputObservacionesConvivencia" id="observaciones_convivencia" class="form-control" rows="4" cols="80" maxlength="250"></textarea>
      </div>
    </div>
  </div>
</div>
