<?php

  function HTMLbegin(){
    echo '
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
      <title>Cifras y Letras - Granada</title>
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

  function HTMLheader(){
    echo '<header>
      <div class="header-item" id="header-left">
        <h1>Cifras y Letras</h1>
        <h3>Centro de formación</h3>
      </div>
      <div class="header-item" id="header-center">
        <h2>C/Santa Rosalía Nº12</h2>
        <h3>¡Tu academia en el Zaidín!</h3>
      </div>
      <div class="header-item" id="header-right">
        <h2>Contacto</h2>
        <h3 class="info-telf">858.95.01.08</h3>
        <h3 class="info-telf">668.57.82.25</h3>
      </div>
    </header>';
  }

  function HTMLnav($activo) {
    echo '<nav><div id="menu"><ul>';
    $items = ["Inicio", "Formación", "Instalaciones", "Sobre nosotros", "Contacto"];
      foreach ($items as $k => $v)
        echo "<li".($k==$activo?" class='activo'":"").">"."<a href='index.php?p=".($k)."'>".$v."</a></li>";
    echo '</ul></div>
    <div id="login">
      <a href="#">LOGIN</a>
    </div></nav>';
  }

  function HTMLcontent($page){
    switch($page){
      case 0:
        HTMLIndex();
        break;
      case 1:
        HTMLFormation();
        break;
      case 2:
        HTMLFacilities();
        break;
      case 3:
        HTMLAboutUs();
        break;
      case 4:
        HTMLContact();
        break;
    }
    echo '
      <div id="content">

      </div>
    ';
  }

  function HTMLfooter(){
    echo'
    <footer>
    <small>(C) Sergio Cervilla , Adrián Morente</small>
    </footer>
    ';
  }

  function HTMLIndex(){
    echo 'index';
  }

  function HTMLFormation(){
    echo 'formation';
  }

  function HTMLFacilities(){
    echo 'facilities';
  }

  function HTMLAboutUs(){
    echo 'about us';
  }

  function HTMLContact(){
    echo 'contact';
  }
?>
