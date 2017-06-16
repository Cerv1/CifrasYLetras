<?php

  if(session_status()==PHP_SESSION_NONE)
    session_start();

  require "./php/common_page.php";
  require "./php/users_common_page.php";
  HTMLbegin();

  if(!isset($_GET["user"])){
    if(!isset($_GET["p"])){
      $_GET['p']=0;
    }
    else if($_GET["p"]<0 || $_GET["p"]>20){
      $_GET['p']=0;
    }
    HTMLheader($_GET["p"]);
    HTMLcontent($_GET["p"]);
  }
  else if($_GET["user"]==0){
    UserHTMLheader($_GET["p"]);
    UserHTMLcontent($_GET["p"]);
  }
  HTMLfooter();
  HTMLend();

?>
