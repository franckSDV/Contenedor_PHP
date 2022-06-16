<?php

include("conexion.php");

if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($conexion, $_POST['id']);

  $query = "select * from clientes WHERE ID_Cli = {$id}";

  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($conexion));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['ID_Cli'],
      'name' => $row['Nombre'],
      'apePaterno' => $row['aPaterno'],
      'apeMaterno' => $row['aMaterno'],
      'email' => $row['Email'],
      'telefono' => $row['Telefono'],
      'celular' => $row['Celular'],
      'direccion' => $row['Direccion'],
      'comuna' => $row['Comuna']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>