<?php

function login($myusername, $mypassword, $db){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT name FROM users WHERE name= '$myusername' AND password='$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1){
      $_SESSION['login_user'] = $myusername;
      header("location: index.php?p=0&user=0");
    }
    else{
      return -1;
    }
  }
}

function logout($db){
  $result = mysqli_close($db);
  header("location: index.php?p=0");
  return result;
}

function create_user($name, $lastname, $password, $birth, $email){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "INSERT INTO users(name, lastname, password, birth, dni)
            VALUES($name, $lastname, $password, $birth, $dni)";
    $result = mysqli_query($db,$sql);
    if($result){
      return 1;
    }
    else{
      return -1;
    }
  }
}



?>
