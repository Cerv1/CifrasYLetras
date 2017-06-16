function validateForm() {
    var x = document.forms["login-form"]["user"].value;
    var y = document.forms["login-form"]["pass"].value;

    if (x == "") {
        document.getElementById('user-info').textContent='Usuario no válido';
        return false;
    }
    else{
      document.getElementById('user-info').textContent='';
    }

    if (y == "") {
        document.getElementById('pass-info').textContent='Contraseña no válida';
        return false;
    }
    else{
      document.getElementById('pass-info').textContent='';
    }

    return true;
}
