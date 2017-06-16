<?php

  function login($myusername, $mypassword, $db){
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "SELECT name FROM Teacher WHERE name= '$myusername' AND password='$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      if($count == 1){
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

  function isTeacher(){
    $activeUser = $_SESSION['login_user'];
    $isTeacher = "SELECT name FROM Teacher WHERE name='$activeUser'";
    $resultTeacher = $db->query($sql);
    if ($result->num_rows > 0)
      $isTeacher = true;
    else
      $isTeacher = false;
    return $isTeacher;
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
