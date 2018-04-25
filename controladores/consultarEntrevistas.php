<?php
$server = ($_SERVER['DOCUMENT_ROOT']);
require ('../clases/Entrevista.php');

// session_start();
//
// if (isset($_SESSION['usuario'])) {
//   $idUsuario = $_SESSION['usuario'];
//
// }
// else {
//   session_destroy();
//   header("location: ../index.php");
// }
echo "[";
foreach (Entrevista::consultarEntrevistas() as $key => $value) {
  utf8_encode_deep($value);
  echo json_encode($value,true);
  if ($key != count(Entrevista::consultarEntrevistas())-1) {
    echo ",";
  }
}
echo "]";

function utf8_encode_deep(&$input) {
    if (is_string($input)) {
        $input = utf8_encode($input);
    } else if (is_array($input)) {
        foreach ($input as &$value) {
            utf8_encode_deep($value);
        }
        unset($value);
    } else if (is_object($input)) {
        $vars = array_keys(get_object_vars($input));

        foreach ($vars as $var) {
            utf8_encode_deep($input->$var);
        }
    }
}
?>
