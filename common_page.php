<?php

  function HTMLbegin(){
    echo '
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
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
      <div id="logo">AQUÍ VA EL PUTO LOGO</div>
      <div id="contacto">Dirección: aquí.<br>Teléfono: 7</div>
    </header>';
  }

  function HTMLnav($activo) {
    echo '<nav><div id="menu"><ul>';
    $items = ["Inicio", "Formación", "Instalaciones", "Sobre nosotros"];
      foreach ($items as $k => $v)
        echo "<li".($k==$activo?" class='activo'":"").">"."<a href='index.php?p=".($k)."'>".$v."</a></li>";
    echo '</ul></div>
    <div id="login">
      <a href="#">LOGIN</a>
    </div></nav>';
  }

  function HTMLcontent($page){
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

  function HTMLFormacion($param){

  }
?>
