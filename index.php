<?php

  require "common_page.php";
  HTMLbegin();
  HTMLheader();

  if(!isset($_GET["p"]))
    $_GET['p']=0;
  else if($_GET["p"]<0 || $_GET["p"]>3)
    $_GET['p']=0;
  HTMLnav($_GET["p"]);
  HTMLcontent($_GET["p"]);
  // include "content_page.html";
  HTMLfooter();
  HTMLend();

?>
