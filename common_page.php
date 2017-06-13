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
      <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
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

  function HTMLheader($activo) {
    echo '
    <header>
      <nav class="nav-extended">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Login</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="#">Login</a></li>
          </ul>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#$activo">Inicio</a></li>
            <li class="tab"><a href="#$activo">Formación</a></li>
            <li class="tab"><a href="#$activo">Instalaciones</a></li>
            <li class="tab"><a href="#$activo">Sobre nosotros</a></li>
            <li class="tab"><a href="#$activo">Contacto</a></li>
          </ul>
        </div>
      </nav>
      <div id="test1" class="col s12">Test 1</div>
      <div id="test2" class="col s12">Test 2</div>
      <div id="test3" class="col s12">Test 3</div>
      <div id="test4" class="col s12">Test 4</div>
    </header>';
    echo '<nav><div id="menu"><ul>';
    $items = ["Inicio", "Formación", "Instalaciones", "Sobre nosotros", "Contacto"];
      foreach ($items as $k => $v)
        echo "<li".($k==$activo?" class='activo'":"").">"."<a href='index.php?p=".($k)."'>".$v."</a></li>";
    echo '</ul></div></nav>';
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
    <h1>Cifras y Letras - Academia de Formación</h1>
    <small>(C) Sergio Cervilla , Adrián Morente</small>
    </footer>
    ';
  }

  function HTMLIndex(){
    echo '
      <div class="general-content">
        <h1> Nuestro centro </h1>
        <img src="./images/diploma.png">
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
          <h1>Apoyo escolar</h1>

          <div class="general-content">
            <h2>Primaria</h2>
            <p>¿Notas en tu hijo problemas en el estudio? ¿Necesita refuerzo
            en alguna asignatura?</p>
            <p>Los primeros años en la educación de todo niño
            son los más importantes. En Academia Cifras y Letras les formamos
            con una buena base educativa para que puedan resolver problemas y
            valerse por ellos mismos.</p>
            <p>Grupos reducidos y atención personalizada para un mayor rendimiento</p>
          </div>

          <div class="general-content">
            <h2>ESO</h2>
            <p>Obtener el graduado en ESO es el requisito mínimo obligatorio para
            todo estudiante. Si tienes dificultades con las asignaturas, en Academia
            Cifras y Letras te ofrecemos las herramientas necesarias para que sea
            todo más fácil.</p>
            <p>Además de motivar y trabajar con los alumnos de forma personalizada,
            les damos la formación necesaria para alcanzar los objetivos del curso
            con buenos resultados. <strong>Impartimos clases todo el año</strong></p>
          </div>

          <div class="general-content">
            <h2>Bachillerato</h2>
            <p>Los dos cursos de Bachillerato son fundamentales si quieres cursar
            una carrera universitaria. La media de la nota obtenida junto con la de
            Selectividad determinará la titulación universitaria a la que puedas
            acceder.</p>
            <p>Te preparamos para conseguir los mejores resultados y los objetivos
            que te has marcado. <strong>¡No lo pienses más, podemos ayudarte!</strong>
            </p>
          </div>

          <div class="general-content">
            <h2>Preparación graduado ESO</h2>
            <p>El Graduado en ESO es un requisito indispensable a la hora de encontrar
            trabajo. Si quieres mejorar tu situación laboral, no dejes escapar esta
            oportunidad.</p>
            <p>En Academia Cifras y Letras disponemos de cursos para obtener el
            Graduado en ESO. Éste está enfocado para todos aquellos que dejaron los
            estudios y quieren retomarlos para mejorar su situación laboral o continuar
            con su formación.</p>
            <p>Tenemos el <b>material necesario</b> y los profesores que te facilitarán
            el contenido requerido para superar el examen.</p>
          </div>

          <div class="general-content">
            <h2>Preparación título Bachillerato</h2>
            <p>TEXTASO</p>
          </div>

          <div class="general-content">
            <h2>Preparación Selectividad</h2>
            <p>TEXTASO</p>
          </div>

        </div>

        <div class="general-content">
          <h1>Pruebas de Acceso</h1>
        </div>

        <div class="general-content">
          <h1>Cursos de Inglés</h1>
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
