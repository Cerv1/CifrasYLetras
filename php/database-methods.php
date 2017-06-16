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
        include("session-methods.php");
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
    header("location: index.php?p=0");
    return $result;
  }

  function createUser($name, $lastname, $password, $birth, $email){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql = "INSERT INTO users(name, lastname, password, birth, dni)
              VALUES($name, $lastname, $password, $birth, $dni)";
      $result = mysqli_query($db,$sql);
      if($result)
        return 1;
      else
        return -1;
    }
  }

  function getUserAttributes($db){
    $active = $_SESSION['login_user'];
    $items = ["name", "lastname", "birth", "dni"];
    $sql = "SELECT name, lastname, birth, dni FROM Teacher WHERE name='$active'";
    $result = mysqli_query($db,$sql);
    while($row = mysqli_fetch_assoc($result)){
      foreach($row as $id => $value){
        echo "<li class='user-attribute'>".$value."</li>";
      }
    }
  }

?>
