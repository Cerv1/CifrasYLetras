<?php

  require "common_page.php";
  HTMLbegin();

  if(!isset($_GET["p"]))
    $_GET['p']=0;
  else if($_GET["p"]<0 || $_GET["p"]>4)
    $_GET['p']=0;
  HTMLheader($_GET["p"]);
  HTMLcontent($_GET["p"]);
  // include "content_page.html";
  HTMLfooter();
  HTMLend();

?>
