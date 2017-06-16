function validateContact(){
  var name = document.forms["contact-form"]["name"].value;
  var email = document.forms["contact-form"]["email"].value;
  var msg = document.forms["contact-form"]["msg"].value;

  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var errors = [];

  if (name == "") {
      document.getElementById('name-info').textContent='Nombre no válido';
      errors[errors.length] = "You must enter a valid name";
  }
  else{
    document.getElementById('name-info').textContent='';
  }

  if (regex.test(email)) {
    document.getElementById('email-info').textContent='';
  }
  else{
    document.getElementById('email-info').textContent='Email no válido';
    errors[errors.length] = "You must enter a valid email";
  }

  if (msg == "") {
      document.getElementById('msg-info').textContent='No puede dejar el mensaje vacío.';
      errors[errors.length] = "You must enter a valid msg";
  }
  else{
    document.getElementById('msg-info').textContent='';
  }

  if(errors.length > 0)
    return false;
  else
    return true;
}
