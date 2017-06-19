function validateSubject() {
  var name = document.forms["create-subject-form"]["name"].value;
  var id = document.forms["create-subject-form"]["id"].value;
  var errors = [];

  if (name == "") {
      document.getElementById('name-info').textContent='Nombre no válido';
      errors[errors.length] = "You must enter a valid name";
  }
  else{
    document.getElementById('name-info').textContent='';
  }

  if (id == "") {
      document.getElementById('id-info').textContent='Identificador no válido';
      errors[errors.length] = "You must enter a valid name";
  }
  else{
    document.getElementById('id-info').textContent='';
  }

  if(errors.length > 0)
    return false;
  else
    return true;

}
