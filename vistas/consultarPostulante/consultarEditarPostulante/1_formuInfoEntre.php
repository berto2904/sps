<div class="tab-pane active" role="tabpanel" id="formuInfoEntre">
  <div class="formuInfoEntre">
    <h3>Datos de entrevista</h3>
    <div class="row">
      <div class="col-md-6">
          <label for="">Organizacion</label>
          <input type="text" required class="form-control" id="organizacion" name="inputOrganizacion" placeholder="Organizacion" maxlength="70">
      </div>
      <div class="col-md-3 col-md-offset-3">
        <label for="">Fecha y Hora de entrevista</label>
        <input type="datetime-local" class="form-control" id="entrevista_fechaHora" name="inputFechaEntrevista" placeholder="Fecha y Hora de entrevista">
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <label for="">Puesto</label>
          <input type="text" class="form-control" id="puesto" name="inputPuesto" placeholder="Puesto" maxlength="70">
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label>Informacion Relevante</label>
        <textarea name="infoRelevante" id="informacion_relevante" class="form-control" rows="2" cols="80" maxlength="250"></textarea>
      </div>
    </div>
  </div>
</div>
