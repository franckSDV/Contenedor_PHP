<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="AJAX/funcion.js"></script>
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap.css">


  <title>Modifica Cliente</title>
</head>

<body>
  <div class="container-fluid">
    <form name="frm" class="row g-1" id="editaform" action="EditaCliente.php" method="POST">
      <br />
      <table width="95%" border="1" align="center">
        <tr>
          <th colspan="6" scope="col" align="left" bgcolor="#CFE8AA"><span class="Estilo1">Contacto</span></th>
        </tr>
        <tr>
          <td>ID Cliente</td>
          <td colspan="2"><input name="id" id="id_cli" type="text" size="60" ></td>
        </tr>
        <tr>
          <td>E-mail </td>
          <td colspan="2">
            <input name="Emailcli" id="emailCli" type="text" size="60" style="text-transform: lowercase;" required>
          </td>
        </tr>
        <tr>
          <td>Telefono (*) </td>
          <td colspan="2"><input name="Telefonocli" id="telCli" type="text" class="titulos_planilla" size="60" required></td>
        </tr>
        <tr>
          <td>Celular</td>
          <td colspan="2"><input name="Celularcli" id="celCli" type="text" size="60" required></td>
        </tr>
        <tr>
          <td>Direccion</td>
          <td colspan="2"><input name="Direccioncli" id="dirCli" type="text" size="60" required></td>
        </tr>
        <tr>
          <td>Comuna</td>
          <td colspan="2"><input name="Comunacli" id="comunaContactoCli" type="text" size="60" required></td>
        </tr>
        <tr>
          <td colspan="6" align="center" bgcolor="#CFE8AA"><button type="submit">Modificar</button></td>
        </tr>
      </table>
    </form>

  </div>
</body>

</html>