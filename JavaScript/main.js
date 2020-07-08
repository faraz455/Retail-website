$('#password, #c_password').on('keyup', function () {
  if ($('#password').val() == $('#c_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});