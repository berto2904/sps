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
              <td><input type="number" class="form-control desdeHasta"  maxlength="70" name="referenciasLaborales[1][desde]"onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
              <td><input type="number" class="form-control desdeHasta"  maxlength="70" name="referenciasLaborales[1][hasta]"onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[2][empresa]"></td>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[2][domicilio]"></td>
              <td><input type="number" class="form-control desdeHasta"  maxlength="70" name="referenciasLaborales[2][desde]"onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
              <td><input type="number" class="form-control desdeHasta"  maxlength="70" name="referenciasLaborales[2][hasta]"onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[3][empresa]"></td>
              <td><input type="text" class="form-control"  maxlength="70" name="referenciasLaborales[3][domicilio]"></td>
              <td><input type="number" class="form-control desdeHasta"  maxlength="70" name="referenciasLaborales[3][desde]"onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
              <td><input type="number" class="form-control desdeHasta"  maxlength="70" name="referenciasLaborales[3][hasta]"onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
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
