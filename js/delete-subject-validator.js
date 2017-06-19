function validateSubjectDelete() {
  var id = document.forms["delete-subject-form"]["id"].value;
  var errors = [];

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
