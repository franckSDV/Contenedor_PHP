<?php

    include("Conexion.php");
    
    $comuna=$_POST['comuna'];
    $region=$_POST['region'];
    $pais=$_POST['pais'];

    //insertar comuna en BD
    $sqlstr="insert into Comuna value('".$comuna."','".$region."','".$pais."')";

    $resultado=mysqli_query($conexion,$sqlstr);

    if(!$resultado){
        //die();
        exit(mysqli_error($conexion));
    }
    echo("La Comuna ".$nombre." se ingreso correctamente");
    mysqli_close($conexion);

?>