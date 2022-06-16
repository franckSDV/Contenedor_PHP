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


  <title>Registro de Clientes</title>
</head>


<body id=".id_cli">
  <div class="container-sm form-control-sm">
    <form name="frm" id="registroForm" action="RegistroClientes.php" method="POST">
      <br />
      <table class="table table-sm" width="30%" border="3" align="center">
        <tr>
          <th colspan="6" scope="col" align="left"><span class="Estilo1">Contacto</span></th>
        </tr>
        <tr>
          <td>Nombre (*) </td>
          <td colspan="2"><input name="Nombre" id="nombre" type="text" class="titulos_planilla" size="60" required></td>
        </tr>
        <tr>
          <td>Apellido Paterno </td>
          <td colspan="2"><input name="aPaterno" id="aPaterno" type="text" size="60" required></td>
        </tr>
        <tr>
          <td>Apellido Materno </td>
          <td colspan="2"><input name="aMaterno" id="aMaterno" type="text" size="60" required></td>
        </tr>
        <tr>
          <td>E-mail </td>
          <td colspan="2"><input name="Email" id="email" type="text" size="60" style="text-transform: lowercase;" required></td>
        </tr>
        <tr>
          <td>Telefono (*) </td>
          <td colspan="2"><input name="Telefono" id="tel" type="text" class="titulos_planilla" size="60" required></td>
        </tr>
        <tr>
          <td>Celular</td>
          <td colspan="2"><input name="Celular" id="cel" type="text" size="60" required></td>
        </tr>
        <tr>
          <td>Direccion</td>
          <td colspan="2"><input name="Direccion" id="dir" type="text" size="60" required></td>
        </tr>
        <tr>
          <td>Comuna</td>
          <td colspan="2"><input name="Comuna" id="comunaContacto" type="text" size="60" required></td>
        </tr>
        <tr>
          <td colspan="6" align="center" bgcolor="#CFE8AA"><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </td>
        </tr>
      </table>
    </form>

  </div>
  <div class="container-fluid">
    <hr>
    <div class="row text-center">
      <div class="col"><input type="button" class="btn btn-primary" value="LISTAR" onclick="listar(1);"></div>
    </div>

    <hr>
    <h3 class="text-center">LISTAS DETALLADAS</h3>
    <div class="container-sm">
      <div class="col-auto">
        <div id="mostrar_mensaje"></div>
      </div>
    </div>
  </div>


  <div class="modal">
    <div class="modal-content">
      <form action="" method="POST" name="editCliente" id="edit_cli" onsubmit="event.defaultPrevented()">
        <table border="1" align="center">
          <tr>
            <th colspan="6" scope="col" align="left" bgcolor="#CFE8AA"><span class="Estilo1">Contacto</span></th>
          </tr>
          <tr>
            <td>ID Cliente</td>
            <td colspan="2"><input name="id" id="id_cli" type="text" size="60"></td>
          </tr>
          <tr>
            <td>E-mail </td>
            <td colspan="2">
              <input name="Emailcli" id="editEmail" type="text" size="60" style="text-transform: lowercase;" required>
            </td>
          </tr>
          <tr>
            <td>Telefono (*) </td>
            <td colspan="2"><input name="Telefonocli" id="editTel" type="text" class="titulos_planilla" size="60" required></td>
          </tr>
          <tr>
            <td>Celular</td>
            <td colspan="2"><input name="Celularcli" id="editCel" type="text" size="60" required></td>
          </tr>
          <tr>
            <td>Direccion</td>
            <td colspan="2"><input name="Direccioncli" id="editDir" type="text" size="60" required></td>
          </tr>
          <tr>
            <td>Comuna</td>
            <td colspan="2"><input name="Comunacli" id="editCom" type="text" size="60" required></td>
          </tr>
          <tr>
            <td colspan="6" align="center" bgcolor="#CFE8AA">
              <button type="submit" class="btn btn-primary modifica_cliente">Modificar</button>
              <button class="btn btn-primary" onclick="closeModal();">Cerrar</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <!-- ----------------- EMPIEZA CODIGO AJAX --------------------------------->
  <script>
    function listar(boton) {
      accion = boton;
      var parametros = {
        "accion": accion
      };

      $.ajax({
        data: parametros,
        url: 'Listar.php',
        type: 'POST',

        beforesend: function() {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje) {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
  </script>

</body>

</html>