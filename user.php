<?php

  // if(session_status()==PHP_SESSION_NONE)
  //   session_start();

  require "./php/users_common_page.php";
  UserHTMLbegin();
  if($_SESSION['login_user']){
    if(!isset($_GET["p"])){
      $_GET['p']=0;
    }
    else if($_GET["p"]<0 || $_GET["p"]>12){
      $_GET['p']=0;
    }

    UserHTMLheader($_GET["p"]);
    UserHTMLcontent($_GET["p"]);

    UserHTMLfooter();
    UserHTMLend();
  }
  else{
    header("location: index.php?p=0");
  }

?>
