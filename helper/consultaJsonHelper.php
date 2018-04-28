<?php
include ('utf8EncodeDecodeDeep.php');

function echoJson($consultaDecoded){
    echo "[";
    foreach ($consultaDecoded as $key => $value) {
      utf8_encode_deep($value);
      echo json_encode($value,true);
      if ($key != count($consultaDecoded)-1) {
        echo ",";
      }
    }
    echo "]";
}
 ?>
