<?php
class ConnQuery{

  // private $servidor ="localhost";
  // private $usuario = "root";
  // private $pass = "";
  // private $bd="sps";

  private $servidor ="mysql.hostinger.com.ar";	  
  private $usuario = "u678836941_root";	  
  private $pass = "admin2904";	  
  private $bd="u678836941_sps";
  private $conn;

  function __construct(){
    $this->conn = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->bd);
  }

  function ejecutarConsultaIsTrue($sql){
    $query = mysqli_query($this->conn,$sql);
    $resultado = mysqli_num_rows($query);
    mysqli_close($this->conn);
    return $resultado;
  }
  function ejecutarConsulta($sql){
    $query = mysqli_query($this->conn,$sql);
    mysqli_close($this->conn);
    return $query;
  }
  function ejecutarConsultaById($id,$sql){
    $stmt =  $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    mysqli_close($this->conn);
  }
  function getFila($sql){
    $query = mysqli_query($this->conn,$sql);
    $fila =  mysqli_fetch_assoc($query);
    mysqli_close($this->conn);
    return $fila;
  }
  function getFilaById($id,$sql){
    $stmt =  $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $fila = $stmt->get_result();

    mysqli_close($this->conn);
    return $fila->fetch_assoc();
  }

  function prepare($sql){
    $stmt = mysqli_prepare($this->conn, $sql);
    return $stmt;
  }
  function getUltimoId(){
    return mysqli_insert_id($this->conn);
  }

  function getFilasById($id,$sql){
    $listaGrande = [];
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
    mysqli_close($this->conn);
    return $listaGrande;
  }

}

?>
