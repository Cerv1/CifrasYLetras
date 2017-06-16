<?php

  // if(session_status()==PHP_SESSION_NONE)
  //   session_start();

  require "./php/users_common_page.php";
  UserHTMLbegin();

  if(!isset($_GET["p"])){
    $_GET['p']=0;
  }
  else if($_GET["p"]<0 || $_GET["p"]>9){
    $_GET['p']=0;
  }

  UserHTMLheader($_GET["p"]);
  UserHTMLcontent($_GET["p"]);

  UserHTMLfooter();
  UserHTMLend();

?>
