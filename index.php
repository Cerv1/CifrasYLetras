<?php

  require "common_page.php";
  HTMLbegin();
  HTMLheader();

  if(!isset($_GET["p"]))
    $_GET['p']=0;
  else if($_GET["p"]<0 || $_GET["p"]>3)
    $_GET['p']=0;
  HTMLnav($_GET["p"]);
  switch($_GET['p']){
    case 0: break;
    case 1: break;
    case 2: break;
    case 3: break;
  }

  include "content_page.html";
  HTMLfooter();
  HTMLend();

?>
