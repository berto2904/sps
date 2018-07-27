<?php
  $idiomas = array("Ingles","Portugues","Frances","Otros");
  $postulanteIdiomas = array_column($estudiosIdiomas['Idiomas'], 'idioma_tipo');
  array_unshift($postulanteIdiomas,'valor0');
 ?>

<div class="titulo">
</div>
<h2><strong><em><u>Idiomas</u></em></strong></h2>
<div class="datosFamiliares margin0 both"style="height: 50%; ">
  <table class="informe">
      <thead>
        <tr>
          <th rowspan="2">Idioma</th>
          <th colspan="3">Lee</th>
          <th colspan="3">Habla</th>
          <th colspan="3">Escribe</th>
        </tr>
        <tr>
          <th>R</th>
          <th>B</th>
          <th>MB</th>
          <th>R</th>
          <th>B</th>
          <th>MB</th>
          <th>R</th>
          <th>B</th>
          <th>MB</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($idiomas as $idioma) {
          if ($key = array_search($idioma, $postulanteIdiomas)) {
          ?>
          <tr>
            <td class="tipoFamilia"><?php echo $idioma ?></td>
            <?php
              switch ($estudiosIdiomas['Idiomas'][$key-1]['habla']) {
                case 'Bien':
                 ?>
                 <td></td>
                 <td>X</td>
                 <td></td>
                 <?php
                break;
                case 'Regular':
                 ?>
                 <td>X</td>
                 <td></td>
                 <td></td>
                 <?php
                break;
                case 'Muy Bien':
                 ?>
                 <td></td>
                 <td></td>
                 <td>X</td>
                 <?php
                break;
                default:
                 ?>
                 <td>-</td>
                 <td>-</td>
                 <td>-</td>
                 <?php
                break;
              }
              switch ($estudiosIdiomas['Idiomas'][$key-1]['lee']) {
                case 'Bien':
                 ?>
                 <td></td>
                 <td>X</td>
                 <td></td>
                 <?php
                break;
                case 'Regular':
                 ?>
                 <td>X</td>
                 <td></td>
                 <td></td>
                 <?php
                break;
                case 'Muy Bien':
                 ?>
                 <td></td>
                 <td></td>
                 <td>X</td>
                 <?php
                break;
                default:
                 ?>
                 <td>-</td>
                 <td>-</td>
                 <td>-</td>
                 <?php
                break;
              }
              switch ($estudiosIdiomas['Idiomas'][$key-1]['escribe']) {
                case 'Bien':
                 ?>
                 <td></td>
                 <td>X</td>
                 <td></td>
                 <?php
                break;
                case 'Regular':
                 ?>
                 <td>X</td>
                 <td></td>
                 <td></td>
                 <?php
                break;
                case 'Muy Bien':
                 ?>
                 <td></td>
                 <td></td>
                 <td>X</td>
                 <?php
                break;
                default:
                 ?>
                 <td>-</td>
                 <td>-</td>
                 <td>-</td>
                 <?php
                break;
              }
              ?>
          </tr>

          <?php
        }else {
          ?>
          <tr>
            <td class="tipoFamilia"><?php echo $idioma ?></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <?php
        }
        }
        ?>
      </tbody>
  </table>
</div>
