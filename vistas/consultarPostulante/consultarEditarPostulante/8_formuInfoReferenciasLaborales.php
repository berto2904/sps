<div class="tab-pane" role="tabpanel" id="formuInfoReferenciasLaborales" class="container">
  <h3>Referencias Laborales</h3>
    <div class="formuInfoReferenciasLaborales row">
      <div class="col-md-12">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th rowspan="2">Empresa</th>
              <th rowspan="2">Domicilio</th>
              <th colspan="2">Periodo</th>
            </tr>
            <tr>
              <th>Desde</th>
              <th>Hasta</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[1][empresa]"></td>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[1][domicilio]"></td>
              <td><input type="date" class="form-control desdeHasta"  name="referenciasLaborales[1][desde]"></td>
              <td><input type="date" class="form-control desdeHasta"  name="referenciasLaborales[1][hasta]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[2][empresa]"></td>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[2][domicilio]"></td>
              <td><input type="date" class="form-control desdeHasta"  name="referenciasLaborales[2][desde]"></td>
              <td><input type="date" class="form-control desdeHasta"  name="referenciasLaborales[2][hasta]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[3][empresa]"></td>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[3][domicilio]"></td>
              <td><input type="date" class="form-control desdeHasta"  name="referenciasLaborales[3][desde]"></td>
              <td><input type="date" class="form-control desdeHasta"  name="referenciasLaborales[3][hasta]"></td>
            </tr>
          </tbody>
        </table>
        <div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <textarea name="referenciasLaborales[]" class="form-control" rows="4" cols="80" maxlength="250"></textarea>
      </div>
    </div>
  </div>
</div>
