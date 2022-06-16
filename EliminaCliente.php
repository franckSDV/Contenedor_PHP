<?php

    include("conexion.php");

    if(isset($_POST['id'])){
        $cl = $_POST['id'];

        $query="DELETE FROM clientes WHERE ID_Cli = $cl";

        $result = mysqli_query($conexion,$query);

        
        if(!$result){
            //die();
                exit(mysqli_error($conexion));
            }
            mysqli_close($conexion);
        }
        echo "Cliente eliminado"
    

?>