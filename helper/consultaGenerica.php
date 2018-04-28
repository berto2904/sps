<?php
// Helper Solo para las clases
function consultaGenerica($sql){
  $cq = new connQuery();

  $filas = $cq->ejecutarConsulta($sql);
  $listaGrande = array();

  while ($fila =  mysqli_fetch_assoc($filas)) {
    $listaPeque = array();
    foreach ($fila as $indice => $value) {
      $listaPeque[$indice] = $value;
    }

    $listaGrande[] = $listaPeque;
  }
  return $listaGrande;
}

?>
