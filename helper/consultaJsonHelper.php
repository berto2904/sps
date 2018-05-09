<?php
include ('utf8EncodeDecodeDeep.php');
function jsonConverter($key,$consultaDecoded){
  $string = "";

    // $string = "{";
    foreach ($consultaDecoded as $indice => $value) {
      foreach ($value as $indice2 => $value2) {
        utf8_encode_deep($value2);
        $string.= json_encode($value2);
        if ($indice2 != count($value)-1) {
          $string.= ",";
        }
      }
    }
    // $string.= "}";
    return $key.$string;
}
function jsonConverterArray($consultaDecoded){
  $string = "";
    $string .= "[";
    foreach ($consultaDecoded as $key => $value) {
        utf8_encode_deep($value);
        $string.= json_encode($value);
        if ($key != count($consultaDecoded)-1) {
          $string.= ",";
      }
    }
    $string.= "]";
    return $string;
}
 ?>
