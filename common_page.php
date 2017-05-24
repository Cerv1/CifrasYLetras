<?php

  function HTMLbegin($title){
    echo <<< HTML
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <title>$title</title>
    </head>
    <body>
    HTML;
  }

  function HTMLend(){
    echo <<< HTML
    </body>
    </html>
    HTML;
  }

  function HTMLnav($activo){
    echo <<< HTML
    <nav> <h1>Portada</h1> <ul>
    </ul>
    </nav>
    HTML;
  }

  function HTMLfooter(){
    echo <<< HTML
    <footer>
    <small>(C) Sergio Cervilla , Adrián Morente</small>
    </footer>
    HTML;
  }
?>
