<?php

include('Conexion.php');

$Nombre = $_POST['Nombrecli'];
$Email = $_POST['Emailcli'];
$Telefono = $_POST['Telefonocli'];
$Celular = $_POST['Celularcli'];
$Direccion = $_POST['Direccioncli'];
$Comuna = $_POST['Comunacli'];
$id = $_POST['id'];

$query = "UPDATE clientes SET Email='".$Email."',
                              Telefono='".$Telefono."',
                              Celular='".$Celular."',
                              Direccion='".$Direccion."',
                              Comuna='".$Comuna."' 
                              WHERE ID_CLI ='".$id."'";

$result = mysqli_query($conexion, $query);

if (!$result) {
  die('Query Failed.');
}
mysqli_close($conexion);

?>