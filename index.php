<?php

  require "./php/common_page.php";
  HTMLbegin();

  if(!isset($_GET["p"])){
    $_GET['p']=0;
  }
  else if($_GET["p"]<0 || $_GET["p"]>13){
    $_GET['p']=0;
  }
  HTMLheader($_GET["p"]);
  HTMLcontent($_GET["p"]);

  HTMLfooter();
  HTMLend();

?>
