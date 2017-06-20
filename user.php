<?php
  include ("./php/users_common_page.php");
  include ("./php/common_page.php");
  HTMLbegin();
  if($_SESSION['login_user']){
    if(!isset($_GET["p"]))
      $_GET['p']=0;

    else if($_GET["p"]<0 || $_GET["p"]>13)
      $_GET['p']=0;

    UserHTMLheader($_GET["p"]);
    UserHTMLcontent($_GET["p"]);
    HTMLfooter();
    HTMLend();
  }
  else
    header("location: index.php?p=0");

?>
