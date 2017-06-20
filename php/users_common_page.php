<?php
  require("./php/config-db.php");
  require("./php/database-methods.php");
  require("./php/common_page.php");

  function UserHTMLbegin(){
    session_start();
    echo '
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
      <script src="./js/contact-validator.js"></script>
      <script src="./js/subject-validator.js"></script>
      <script src="./js/delete-subject-validator.js"></script>
      <script src="./js/register-user.js"></script>
      <title>Cifras y Letras</title>
    </head>
    <body>
    ';
  }

  function UserHTMLend(){
    echo'
    </body>
    </html>
    ';
  }

  function UserHTMLheader($activo){
    echo '
    <div class="top-panel">
      <header>
        <div class="top-header">
          <a class="header-item" href="user.php?p=0"><div class="logo-header">
            <h1>Cifras y Letras - Academia de Formación</h1>
          </div></a>
          <a class="header-item link-item" href="#"><div class="login-header">
            <h4><a href="user.php?p=7">';
            $activeUser = $_SESSION['login_user'];
            echo "$activeUser";
            echo '</a></h4>
          </div></a>
        </div>
      </header>
      <nav>
        <div><ul class="link-item">';
        $items = ["Inicio", "Formación", "Instalaciones", "Sobre nosotros", "Contacto", "Gestión", "Mi cuenta"];
          foreach ($items as $k => $v)
            echo "<li".($k==$activo?" class='activo'":"").">"."<a href='user.php?p=".($k)."'>".$v."</a></li>";
        echo '</ul>
        </div>
      </nav>
    </div>';
  }

  function UserHTMLcontent($page){
    echo '<div id="content">';
    switch($page){
      case 0:
        HTMLIndex();
        break;
      case 1:
        HTMLFormation();
        break;
      case 2:
        HTMLFacilities();
        break;
      case 3:
        HTMLAboutUs();
        break;
      case 4:
        HTMLContact();
        break;
      case 5:
        UserHTMLSubject();
        break;
      case 6:
        UserHTMLLogin();
        break;
      case 7:
        UserHTMLLogin();
        break;
      case 8:
        SubjectCreateUser();
        break;
      case 9:
        CreateHTMLStudent();
        break;
      case 10:
        DeleteHTMLStudent();
        break;
      case 11:
        CreateHTMLSubject();
        break;
      case 12:
        DeleteHTMLSubject();
        break;
    }
    echo '</div>';
  }

  function UserHTMLfooter(){
    echo'
    <footer>
    <small>(C) Sergio Cervilla , Adrián Morente</small>
    </footer>
    ';
  }

  function UserHTMLSubject(){
    echo '
    <div class="general-content">
      <div class="facilities-title"><h1>Lista de asignaturas y material</h1></div>
      <div class="gallery-content">
        <div  id="subject-content" class="gallery-text">';
          getSubjectsList($db);
          echo '</div>';
        if(isTeacher($db)){
          echo '<div class="subject-buttons">
            <a href="user.php?p=9"><input type="button"  class="login login-submit" name="createUser" value="Añadir alumno" /></a>
            <a href="user.php?p=10"><input type="button"  class="login login-submit" name="deleteUser" value="Eliminar alumno" /></a>
            <a href="user.php?p=11"><input type="button" class="login login-submit" name="createSubject" value="Añadir asignatura" /></a>
            <a href="user.php?p=12"><input type="button"  class="login login-submit" name="deleteSubject" value="Eliminar asignatura" /></a>
          </div>';
        }
      echo '</div>
    </div>
    ';
  }

  function UserHTMLLogin(){
    echo '
    <div class="general-content" id="user-profile">
      <h1>Perfil de usuario</h1><br>
      <div class="gallery-content">
        <div class="gallery-image">
          <img src="./images/libros.jpg" alt="libros.jpg" />
        </div>
        <div class="gallery-text">
          <ul class="user-attributes">';
          getAttributes($db);
          echo '</ul>
          <div class="floatable-button">
            <form method="post">
              <input type="submit" formmethod="post" name="submit" class="login login-submit" value="Cerrar sesión">
            </form>
            <form method="post">
              <input type="submit" formmethod="post" name="gestion" class="login login-submit" value="Gestión general">
            </form>
          </div>
        </div>
      </div>
    </div>
    ';
    if(isset($_POST['submit'])){
      $result = logout($db);
      if($result == true)
        header("location: index.php");
    }
    if(isset($_POST['gestion']))
      header("location: user.php?p=5");
  }

  function CreateHTMLStudent(){
    echo '
    <div class="form-container">
      <div class="form">
        <h3>Registrar nuevo estudiante</h3>
        <form name="register-user-form" method="post" onsubmit="return validateUserRegister(this)">
          <div class="form-group">
            <input type="text" formmethod="post" name="student-name" class="form-control" placeholder="Nombre del alumno"/>
            <label class="input-field-icon icon-user" for="login-name"></label>
          </div>
          <div class="info" id="name-info"></div>
          <div class="form-group">
            <input type="text" formmethod="post" name="student-lastname" class="form-control" placeholder="Apellidos"/>
            <label class="input-field-icon icon-email" for="login-email"></label>
          </div>
          <div class="info" id="lastname-info"></div>
          <div class="form-group">
            <input type="text" formmethod="post" name="student-email" class="form-control" placeholder="Email"/>
            <label class="input-field-icon icon-email" for="login-email"></label>
          </div>
          <div class="info" id="email-info"></div>
          <div class="form-group">
            <input type="password" formmethod="post" name="student-password" class="form-control" placeholder="Contraseña"/>
            <label class="input-field-icon icon-email" for="login-email"></label>
          </div>
          <div class="info" id="password-info"></div>
          <div class="form-group">
            <input type="date" formmethod="post" name="student-date" class="form-control" placeholder="Fecha de nacimiento"/>
            <label class="input-field-icon icon-email" for="login-email"></label>
          </div>
          <div class="info" id="date-info"></div>
          <input type="submit" formmethod="post" name="submit" class="login login-submit" value="Crear usuario" onclick="return validateUserRegister();">
        </form>
      </div>
      <div class="form-image"><img src="./images/student.png"></div>
    </div>
    ';
    if(isset($_POST['submit'])){
      $result = createStudent($_POST["student-name"],$_POST['student-lastname'],$_POST['student-email'],$_POST['student-date'],$_POST['student-password']);
      echo $result;
    }
  }

  function CreateHTMLSubject(){
    echo '
    <div class="form-container">
      <div class="form">
        <h3>Registrar nueva asignatura</h3>
        <form method="post" name="create-subject-form" onsubmit="return validateSubject(this)">
          <div class="form-group">
            <input type="text" formmethod="post" name="name" class="form-control" placeholder="Nombre de la asignatura"/>
            <label class="input-field-icon icon-user" for="login-name"></label>
          </div>

          <div class="info" id="name-info"></div>

          <div class="form-group">
            <input type="text" formmethod="post" name="id" class="form-control" placeholder="Código identificador"/>
            <label class="input-field-icon icon-email" for="login-email"></label>
          </div>

          <div class="info" id="id-info"></div>

          <input type="submit" formmethod="post" name="submit" class="login login-submit" value="Crear asignatura" onclick="return validateSubject()">
        </form>
      </div>
      <div class="form-image">
        <img src="./images/book.png">
      </div>
    </div>';
    if(isset($_POST['submit'])){
      $result = createSubject($_POST["name"],$_POST["id"]);
      echo $result;
    }
  }

  function DeleteHTMLStudent(){
    echo '
    <div class="form-container">
      <div class="form">
        <h3>Eliminar usuario</h3>
        <form method="post">
          <div class="form-group">
            <input type="text" formmethod="post" name="id" class="form-control" value="" placeholder="Email del estudiante" />
            <label class="input-field-icon icon-user" for="login-name"></label>
          </div>
          <input type="submit" formmethod="post" name="submit" class="login login-submit" value="Eliminar estudiante/profesor">
        </form>
      </div>
      <div class="form-image">
        <img src="./images/libros.jpg">
      </div>
    </div>';
    if(isset($_POST['submit'])){
      $result = deleteStudent($_POST["id"]);
      echo $result;
    }
  }

  function DeleteHTMLSubject(){
    echo '
    <div class="form-container">
      <div class="form">
        <h3>Eliminar asignatura</h3>
        <form method="post" name="delete-subject-form" onsubmit="return validateSubjectDelete(this)">
          <div class="form-group">
            <input type="text" formmethod="post" name="id" class="form-control" value="" placeholder="Código identificador" />
            <label class="input-field-icon icon-user" for="login-name"></label>
          </div>
          <div class="info" id="id-info"></div>
          <input type="submit" formmethod="post" name="submit" class="login login-submit" value="Eliminar asignatura" onclick="return validateSubjectDelete()">
        </form>
      </div>
      <div class="form-image">
        <img src="./images/classroom-girls.jpg">
      </div>
    </div>';
    if(isset($_POST['submit'])){
      $result = deleteSubject($_POST["id"]);
      echo $result;
    }
  }

?>
