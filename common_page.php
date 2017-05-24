<?php

  function HTMLbegin($title){
    echo '
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <title>$title</title>
    </head>
    <body>
    ';
  }

  function HTMLend(){
    echo'
    </body>
    </html>
    ';
  }

  function HTMLnav($activo){
    echo'
    <nav> <h1>Portada</h1> <ul>
    </ul>
    </nav>
    ';
  }

  function HTMLfooter(){
    echo'
    <footer>
    <small>(C) Sergio Cervilla , Adrián Morente</small>
    </footer>
    ';
  }
?>
