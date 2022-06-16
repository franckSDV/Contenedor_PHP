<?php

  include('Conexion.php');

  # echo $_POST['name'] . ', ' . $_POST['description'];
    $Nombre = $_POST['Nombre'];
    $aPaterno = $_POST['aPaterno'];
    $aMaterno = $_POST['aMaterno'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Celular = $_POST['Celular'];
    $Direccion = $_POST['Direccion'];
    $Comuna = $_POST['Comuna'];

     //insertar cliente en BD
    $sqlstr="insert into clientes(Nombre,aPaterno,aMaterno,Email,Telefono,Celular,Direccion,Comuna)
      value('".$Nombre."','".$aPaterno."','".$aMaterno."','".$Email."','".$Telefono."','".$Celular."','".$Direccion."','".$Comuna."')";

    $resultado=mysqli_query($conexion,$sqlstr);

    if(!$resultado){
      //die();
          exit(mysqli_error($conexion));
      }
      echo("El cliente".$Nombre." se ingreso correctamente");
      mysqli_close($conexion);
?>
