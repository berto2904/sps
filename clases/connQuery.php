<?php
class ConnQuery{

  private $servidor ="localhost";
  private $usuario = "root";
  private $pass = "admin2904";
  private $bd="sps";
  private $conn;

  function __construct(){
    $this->conn = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->bd);
  }

  function ejecutarConsultaIsTrue($sql){
    $query = mysqli_query($this->conn,$sql);
    $resultado = mysqli_num_rows($query);
    return $resultado;
  }
  function ejecutarConsulta($sql){
    $query = mysqli_query($this->conn,$sql);
    return $query;
  }
  function getFila($sql){
    $query = mysqli_query($this->conn,$sql);
    $fila =  mysqli_fetch_assoc($query);
    return $fila;
  }
  function prepare($sql){
    $stmt = mysqli_prepare($this->conn, $sql);
    return $stmt;
  }
  function getUltimoId(){
    return mysqli_insert_id($this->conn);
  }

  function getFilasById($id,$sql){
    $stmt =  $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);
    // $stmt = mysqli_stmt_bind_param($ps, "i", $id);
    $stmt->execute();
    $filas = $stmt->get_result();
    while ($fila = $filas->fetch_assoc()) {
      $listaPeque = array();
      foreach ($fila as $indice => $value) {
        $listaPeque[$indice] = $value;
      }

      $listaGrande[] = $listaPeque;
     }
    return $listaGrande;
  }

}

?>
