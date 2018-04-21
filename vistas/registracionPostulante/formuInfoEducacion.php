<div class="tab-pane" role="tabpanel" id="formuInfoEducacion" class="container">
  <h3>Estudios</h3>
    <div class="formuInfoEducacion ">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th data-field="stargazers_count"
            data-sortable="true" rowspan="2">Nivel</th>
            <th rowspan="2">Establecimiento</th>
            <th colspan="2">Fecha</th>
            <th rowspan="2">Situacion</th>
            <th rowspan="2">Titulo Obtenido</th>
          </tr>
          <tr>
            <th>Desde (Año)</th>
            <th>Hasta (Año)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label for="">Primario</label></td>
            <input type="hidden" name="infoEstudios[]" value="1">
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
          </tr>
          <tr>
            <td><label for="">Secundario</label></td>
            <input type="hidden" name="infoEstudios[]" value="2">
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
          </tr>
          <tr>
            <td><label for="">Terciario</label></td>
            <input type="hidden" name="infoEstudios[]" value="3">
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
          </tr>
          <tr>
            <td><label for="">Universitario</label></td>
            <input type="hidden" name="infoEstudios[]" value="4">
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
          </tr>
          <tr>
            <td><label for="">Otros</label></td>
            <input type="hidden" name="infoEstudios[]" value="5">
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="number" class="form-control desdeHasta"  name="infoEstudios[]" onKeyUp="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}" onmouseup="if(this.value>9999){this.value='';}else if(this.value < 0){this.value=''}"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
            <td><input type="text" class="form-control"  maxlength="70" name="infoEstudios[]"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
    <h3>Idiomas</h3>
      <div class="formuInfoEducacion row">
        <div class="col-md-12">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th rowspan="2">Idioma</th>
                <th colspan="3">Lee</th>
                <th colspan="3">Habla</th>
                <th colspan="3">Escribe</th>
                <th rowspan="2">Activo</th>
              </tr>
              <tr>
                <th>Regular</th>
                <th>Bien</th>
                <th>Muy Bien</th>
                <th>Regular</th>
                <th>Bien</th>
                <th>Muy Bien</th>
                <th>Regular</th>
                <th>Bien</th>
                <th>Muy Bien</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ingles</td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][1]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][1]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][1]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][2]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][2]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][2]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][3]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][3]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[1][3]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="switch">
                    <input type="checkbox" class = "activarIdioma" name="idioma[1][0]" checked value="1">
                    <span class="slider round"></span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Portugues</td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][1]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][1]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][1]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][2]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][2]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][2]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][3]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][3]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[2][3]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="switch">
                    <input type="checkbox" class = "activarIdioma" name="idioma[2][0]" checked value="2">
                    <span class="slider round"></span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Frances</td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][1]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][1]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][1]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][2]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][2]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][2]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][3]" value="1">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][3]" value="2">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="containerRadio">
                    <input type="radio" name="idioma[3][3]" value="3">
                    <span class="checkmark"></span>
                  </label>
                </td>
                <td>
                  <label class="switch">
                    <input type="checkbox" class = "activarIdioma" name="idioma[3][0]" checked value="3">
                    <span class="slider round"></span>
                  </label>
                </td>
              </tr>
            </tbody>
          </table>
          <div>
        </div>
      </div>
    </div>
</div>
