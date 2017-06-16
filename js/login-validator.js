  function validateLogin() {
    var email = document.forms["login-form"]["user"].value;
    var password = document.forms["login-form"]["pass"].value;
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var errors = [];

    if (regex.test(email)) {
      document.getElementById('user-info').textContent='';
    }
    else{
      document.getElementById('user-info').textContent='Email no válido';
      errors[errors.length] = "You must enter a valid email";
    }

    if (password == "") {
        document.getElementById('pass-info').textContent='Contraseña no válida';
        errors[errors.length] = "You must enter a valid password";
    }
    else{
      document.getElementById('pass-info').textContent='';
    }

    if(errors.length > 0)
      return false;
    else
      return true;

  }
