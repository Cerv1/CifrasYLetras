<?php

  function HTMLbegin(){
    echo '
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
      <link href="https://fonts.googleapisº.com/css?family=Patrick+Hand" rel="stylesheet">
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
    echo '<div id="content">';
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
    echo '</div>';
  }

  function HTMLfooter(){
    echo'
    <footer>
    <small>(C) Sergio Cervilla , Adrián Morente</small>
    </footer>
    ';
  }

  function HTMLIndex(){
    echo '
      <div class="general-content">
        <h1> Nuestro centro </h1>
        <p>
          Cifras y Letras nace con la idea de <b>apoyar</b> a las familias en el duro trabajo de la <b>educación</b> de sus hijos.
          Ayudandolos en la <b>formación académica</b> que va desde la mejora de calificaciones al aprendizaje de nuevos idiomas
          tan importantes en el día de hoy.
          <br><br>
          <b>Cifras y Letras Centro de Formación</b> se caracteriza por:
          <ul>
            <li>
              Estudio y evaluación del alumno/a para ver que metodologia adoptar para el máximo rendimiento.
            </li>
            <li>
              Un equipo de profesionales  implicados en la consecución de los objetivos fijados para cada uno de
              nuestros alumnos/as.
            </li>
            <li>
              Grupos de trabajo reducido (máx 7 alumnos) de su misma edad.
            </li>
          </ul>
        </p>
      </div>
    ';
  }

  function HTMLFormation(){
    echo '

      <div class="left-navbar">
        <ul>
          <li>Apoyo Escolar
          <ul>
            <li>Primaria</li>
            <li>ESO</li>
            <li>Bachillerato</li>
            <li>Preparación graduado ESO</li>
            <li>Preparación título Bachillerato</li>
            <li>Preparación Selectividad</li>
          </ul></li>

          <li>Pruebas de Acceso
          <ul>
            <li>Acceso a grado medio y superior</li>
            <li>Acceso a Universidad (+25 años)</li>
          </ul></li>

          <li>Cursos de Inglés
          <ul>
            <li>Preparación para el B1, B2 y C1</li>
          </ul></li>
        </ul>
      </div>

      <div class="main-content">
        <div class="general-content">
          <h2>Apoyo escolar</h2>

          <h4>Primaria</h4>
          <div class="general-content">
            <p>¿Notas en tu hijo problemas en el estudio? ¿Necesita refuerzo
            en alguna asignatura?</p>
            <p>Los primeros años en la educación de todo niño
            son los más importantes. En Academia Cifras y Letras les formamos
            con una buena base educativa para que puedan resolver problemas y
            valerse por ellos mismos.</p>
            <p>Grupos reducidos y atención personalizada para un mayor rendimiento</p>
          </div>

          <h4>ESO</h4>
          <div class="general-content">
            <p>TEXTASO</p>
          </div>

          <h4>Bachillerato</h4>
          <div class="general-content">
            <p>TEXTASO</p>
          </div>

          <h4>Preparación y graduado ESO</h4>
          <div class="general-content">
            <p>TEXTASO</p>
          </div>

          <h4>Preparación título Bachillerato</h4>
          <div class="general-content">
            <p>TEXTASO</p>
          </div>

          <h4>Preparación Selectividad</h4>
          <div class="general-content">
            <p>TEXTASO</p>
          </div>

        </div>

        <div class="general-content">
          <h2>Pruebas de Acceso</h2>
        </div>

        <div class="general-content">
          <h2>Cursos de Inglés</h2>
        </div>
      </div>

    ';
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
