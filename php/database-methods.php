<?php

  function login($myemail, $mypassword, $db){
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql_teacher = "SELECT emailTeacher FROM Teacher WHERE emailTeacher= '$myemail' AND password='$mypassword'";
      $result_teacher = mysqli_query($db,$sql_teacher);
      $row_teacher = mysqli_fetch_array($result_teacher,MYSQLI_ASSOC);
      $count_teacher = mysqli_num_rows($result_teacher);

      $sql_student = "SELECT emailStudent FROM Student WHERE emailStudent= '$myemail' AND password='$mypassword'";
      $result_student = mysqli_query($db,$sql_student);
      $row_student = mysqli_fetch_array($result_student,MYSQLI_ASSOC);
      $count_student = mysqli_num_rows($result_student);
      if($count_teacher == 1){
        $_SESSION['login_user'] = $myemail;
        header("location: user.php?p=0");
      }
      else if($count_student){
        $_SESSION['login_user'] = $myemail;
        header("location: user.php?p=0");
      }
      else{

      }
    }
  }

  function logout($db){
    $result = mysqli_close($db);
    session_destroy();
    header("location: index.php?p=0");
    return $result;
  }

  function isTeacher($db){
    $activeUser = $_SESSION['login_user'];
    $isTeacher = "SELECT emailTeacher FROM Teacher WHERE emailTeacher='$activeUser'";
    $resultTeacher = mysqli_query($db,$isTeacher);
    if ($resultTeacher->num_rows > 0)
      $isTeacher = true;
    else
      $isTeacher = false;
    return $isTeacher;
  }

  function createStudent($name, $lastname, $emailStudent, $birth, $password){
    include("config-db.php");
    if($db->connect_error)
      die("Connection failed...". $db->connect_error);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "INSERT INTO Student() VALUES('$name', '$lastname', '$emailStudent', '$birth', '$password')";
      if ($db->query($sql) === TRUE)
        echo "Estudiante añadido correctamente.";
      else
        echo "ERROR: El estudiante ya existe.";
    }
  }

  function deleteStudent($emailStudent){
    include("config-db.php");
    if($db->connect_error)
      die("Connection failed...". $db->connect_error);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql_teacher = "DELETE FROM Teacher WHERE emailTeacher='$emailStudent'";
      $result_teacher = mysqli_query($db,$sql_teacher);
      $row_teacher = mysqli_fetch_array($result_teacher,MYSQLI_ASSOC);
      $count_teacher = mysqli_num_rows($result_teacher);

      $sql_student = "DELETE FROM Student WHERE emailStudent='$emailStudent'";
      $result_student = mysqli_query($db,$sql_student);
      $row_student = mysqli_fetch_array($result_student,MYSQLI_ASSOC);
      $count_student = mysqli_num_rows($result_student);

      if($count_teacher == 1){
        if($db->query($sql_teacher) === TRUE)
          echo "Teacher deleted successfully.";
        else
          echo "Error: " . $sql_teacher . "<br>" . $db->error;
      }
      else if($count_student){
        if($db->query($sql_student) === TRUE)
          echo "Student deleted successfully.";
        else
          echo "Error: " . $sql_student . "<br>" . $db->error;
      }
    }
  }

  function alterStudent(){

  }

  function createSubject($name, $idSubject){
    include("config-db.php");
    $emailTeacher = $_SESSION['login_user'];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "INSERT INTO Subject VALUES('$name', '$idSubject', '$emailTeacher')";
      if ($db->query($sql) === TRUE){
        echo "<div class='general-content'>Asignatura añadida correctamente.</div>";
      }
      else
        echo "Error: " . $sql . "<br>" . $db->error;
    }
  }

  function deleteSubject($idSubject){
    include("config-db.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "DELETE FROM Subject WHERE idSubject='$idSubject'";
      if($db->query($sql) === TRUE)
        echo "Subject deleted successfully.";
      else
        echo "Error: " . $sql . "<br>" . $db->error;
    }
  }

  function getSubjectsList($db){
    $active = $_SESSION['login_user'];
    if(isTeacher($db))
      $sql = "SELECT idSubject FROM Subject WHERE emailTeacher='$active'";
    else
      $sql = "SELECT idSubject FROM StudentSubject WHERE emailStudent='$active'";
    $result = $db->query($sql);
    if($result->num_rows > 0){
      echo '<div class="subjectsList"><ul>';
      while($value = $result->fetch_assoc())
        echo'<li>'.$value['idSubject'].'</li>';
      echo '</ul></div>';
    }
  }

  function getAttributes(){
    include("config-db.php");
    $active = $_SESSION['login_user'];
    $isTeacher = isTeacher($db);
    if($isTeacher)
      $sql = "SELECT name, lastname, emailTeacher, birth FROM Teacher WHERE emailTeacher='$active'";
    else
      $sql = "SELECT name, lastname, emailStudent, birth FROM Student WHERE emailStudent='$active'";
    $result = $db->query($sql);
    if ($result->num_rows > 0){
      while($value = $result->fetch_assoc()){
        echo '<h3>Nombre:</h3>';
        echo '<li>'.$value['name'].'</li>';
        echo '<h3>Apellidos:</h3>';
        echo '<li>'.$value['lastname'].'</li>';
        echo '<h3>E-mail:</h3>';
        if($isTeacher)
          echo '<li>'.$value['emailTeacher'].'</li>';
        else
          echo '<li>'.$value['emailStudent'].'</li>';
        echo '<h3>Fecha de nacimiento:</h3>';
        echo '<li>'.$value['birth'].'</li>';
      }
    }
  }

?>
