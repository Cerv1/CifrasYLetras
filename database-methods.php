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
      header("location: index.php?p=0");
    }
    else{
      return -1;
    }
  }
}



?>
