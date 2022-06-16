<?php

	include("conexion.php");

	echo 
	'
		<table class="table table-hover">
	    <tr>
            <th scope="col">id</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">Ape Paterno</th>
            <th scope="col">Ape Materno</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Celular</th>
            <th scope="col">Direccion</th>
            <th scope="col">Comuna</th>
            <th scope="col">Borrar</th>
            <th scope="col">Editar</th>
	    </tr>
	';

	$accion = $_POST['accion'];


		if($accion == 1){$tabla = $tabla_db1;}

	  //CONSULTAR
	  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla");
	  while($consulta = mysqli_fetch_array($resultados))
	  {
	    echo 
	    '
			<tr idcli="'.$consulta['ID_Cli'].'">
                <td>'.$consulta['ID_Cli'].'</td>
                <td>'.$consulta['Nombre'].'</td>
                <td>'.$consulta['aPaterno'].'</td>
                <td>'.$consulta['aMaterno'].'</td>
                <td>'.$consulta['Email'].'</td>
                <td>'.$consulta['Telefono'].'</td>
                <td>'.$consulta['Celular'].'</td>
                <td>'.$consulta['Direccion'].'</td>
                <td>'.$consulta['Comuna'].'</td>
                <td><input type="image" src="imagenes/borrar.png" alt="Submit" class="delete_cliente" style="float:right" width="38" height="38"></td>
                <td><input type="image" src="imagenes/editar.png" alt="Submit" class="edit_cliente" style="float:right" width="38" height="38"></td>
		    </tr>
		    </tr>
	    ';
	  }

  echo '</table>';