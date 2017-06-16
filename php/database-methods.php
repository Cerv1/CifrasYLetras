<?php

  function login($myusername, $mypassword, $db){
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql_teacher = "SELECT name FROM Teacher WHERE name= '$myusername' AND password='$mypassword'";
      $result_teacher = mysqli_query($db,$sql_teacher);
      $row_teacher = mysqli_fetch_array($result_teacher,MYSQLI_ASSOC);
      $active_teacher = $row['active'];
      $count_teacher = mysqli_num_rows($result_teacher);

      $sql_student = "SELECT name FROM Student WHERE name= '$myusername' AND password='$mypassword'";
      $result_student = mysqli_query($db,$sql_student);
      $row_student = mysqli_fetch_array($result_student,MYSQLI_ASSOC);
      $active_student = $row['active'];
      $count_student = mysqli_num_rows($result_student);

      if($count_teacher == 1){
        $_SESSION['login_user'] = $myusername;
        header("location: user.php?p=0");
      }
      else if($count_student){
        $_SESSION['login_user'] = $myusername;
        header("location: user.php?p=0");
      }
      else{
        return -1;
      }
    }
  }

  function logout($db){
    $result = mysqli_close($db);
    session_destroy();
    header("location: index.php?p=0");
    return $result;
  }

<<<<<<< HEAD
  function isTeacher(){
    include("config-db.php");
    $activeUser = $_SESSION['login_user'];
    $sql = "SELECT name FROM Teacher WHERE name='$activeUser'";
    $resultTeacher = $db->query($sql);
    if ($resultTeacher->num_rows > 0)
      return true;
=======
  function isTeacher($db){
    $activeUser = $_SESSION['login_user'];
    $isTeacher = "SELECT name FROM Teacher WHERE name='$activeUser'";
    $resultTeacher = mysqli_query($db,$isTeacher);
    if ($resultTeacher->num_rows > 0)
      $isTeacher = true;
>>>>>>> master
    else
      return false;
  }

  function createStudent($name, $lastname, $emailStudent, $birth){
    if($db->connect_error)
      die("Connection failed...". $db->connect_error);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "INSERT INTO Student VALUES($name, $lastname, $emailStudent, $birth)";
      if ($db->query($sql) === TRUE)
        echo "New Student created successfully.";
      else
        echo "Error: " . $sql . "<br>" . $db->error;
    }
  }

  function createSubject($name, $lastname, $emailSubject, $birth){
    if($db->connect_error)
      die("Connection failed...". $db->connect_error);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "INSERT INTO Subject VALUES($name, $lastname, $emailSubject, $birth)";
      if ($db->query($sql) === TRUE)
        echo "New Subject created successfully.";
      else
        echo "Error: " . $sql . "<br>" . $db->error;
    }
  }

  function getUserAttributes($db){
    if($db->connect_error)
      die("Connection failed...". $db->connect_error);
    $active = $_SESSION['login_user'];
    $sql = "SELECT name, lastname, emailTeacher, birth FROM Teacher WHERE name='$active'";
    $result = $db->query($sql);

    if ($result->num_rows > 0){
      while($value = $result->fetch_assoc()){
        echo '<h3>Nombre:</h3>';
        echo '<li>'.$value['name'].'</li>';
        echo '<h3>Apellidos:</h3>';
        echo '<li>'.$value['lastname'].'</li>';
        echo '<h3>E-mail:</h3>';
        echo '<li>'.$value['emailTeacher'].'</li>';
        echo '<h3>Fecha de nacimiento:</h3>';
        echo '<li>'.$value['birth'].'</li>';
      }
    } else
      echo "0 results found...";
  }

?>
