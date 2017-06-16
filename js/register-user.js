function validateUserRegister(){
  var name = document.forms["register-user-form"]["student-name"].value;
  var lastname = document.forms["register-user-form"]["student-lastname"].value;
  var email = document.forms["register-user-form"]["student-email"].value;
  var password = document.forms["register-user-form"]["student-password"].value;
  var date = document.forms["register-user-form"]["student-date"].value;

  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var errors = [];

  if (name == "") {
      document.getElementById('name-info').textContent='Nombre no válido';
      errors[errors.length] = "You must enter a valid name";
  }
  else{
    document.getElementById('name-info').textContent='';
  }

  if (lastname == "") {
      document.getElementById('lastname-info').textContent='Apellido no válido';
      errors[errors.length] = "You must enter a valid last name";
  }
  else{
    document.getElementById('lastname-info').textContent='';
  }

  if (regex.test(email)) {
    document.getElementById('email-info').textContent='';
  }
  else{
    document.getElementById('email-info').textContent='Email no válido';
    errors[errors.length] = "You must enter a valid email";
  }

  if (password == "") {
      document.getElementById('password-info').textContent='Contraseña no válida';
      errors[errors.length] = "You must enter a valid password";
  }
  else{
    document.getElementById('password-info').textContent='';
  }

  if(errors.length > 0)
    return false;
  else
    return true;
}
