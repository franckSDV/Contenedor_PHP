
$(document).on('click', '.delete_cliente', function () {
  let element = $(this)[0].parentElement.parentElement;
  let id = $(element).attr('idcli');
  alert('Cliente Eliminado')
  $.post('EliminaCliente.php', { id }, function (response) {
    console.log(response);
  })
})

$(document).on('click', '.edit_cliente', function () {
  let element = $(this)[0].parentElement.parentElement;
  let id = $(element).attr('idcli');
  $.post('Single.php', { id }, function (response) {
    const task = JSON.parse(response);
    $('#id_cli').val(task.id);
    $('#editEmail').val(task.email);
    $('#editTel').val(task.telefono);
    $('#editCel').val(task.celular);
    $('#editDir').val(task.direccion);
    $('#editCom').val(task.comuna);
  })
  $('.modal').fadeIn();
})


$('#edit_cli').submit(e => {
  e.preventDefault();
  const postData = {
    id : $('#id_cli').val(),
    email: $('#editEmail').val(),
    telefono: $('#editTel').val(),
    celular: $('#editCel').val(),
    direccion: $('#editDir').val(),
    comuna: $('#editCom').val(),
  };
  const url = 'EditaCliente.php';
  console.log(postData, url);
  $.post(url, postData, (response) => {
    console.log(response);
    $('#editaform').trigger('reset');
    fetchTasks();
  });
});



$(document).on('click')

function closeModal(){
  $('.modal').fadeOut();      
}


/*  let edit = false;

$('#registroForm').submit(e => {
  e.preventDefault();
  const postData = {
    name: $('#nombre').val(),
    apePaterno: $('#aPaterno').val(),
    apeMaterno: $('#aMaterno').val(),
    email: $('#email').val(),
    telefono: $('#tel').val(),
    celular: $('#cel').val(),
    direccion: $('#dir').val(),
    comuna: $('#comunaContacto').val(),
  };
  const url = 'RegistroCliente.php';
  console.log(postData, url);
  $.post(url, postData, (response) => {
    console.log(response);
    $('#registroForm').trigger('reset');
    fetchTasks();
  });
});

$('#editaform').submit(e => {
  e.preventDefault();
  const postData = {
    id : $('#id_cli').val(),
    name: $('#nombreCLI').val(),
    apePaterno: $('#aPaternoCLI').val(),
    apeMaterno: $('#aMaternoCLI').val(),
    email: $('#emailCLI').val(),
    telefono: $('#telCLI').val(),
    celular: $('#celCLI').val(),
    direccion: $('#dirCLI').val(),
    comuna: $('#comunaContactoCLI').val(),
  };
  const url = 'EditaCliente.php';
  console.log(postData, url);
  $.post(url, postData, (response) => {
    console.log(response);
    $('#editaform').trigger('reset');
    fetchTasks();
  });
}); */


