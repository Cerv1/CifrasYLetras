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

  function HTMLheader($activo) {
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

      <div class="top-header">
        <div class="logo-header">
        </div>

        <div class="login-header">
        </div>
      </div>

      <div class="bottom-header">
      </div>
    </header>';
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
          <h3>Apoyo escolar</h3>

          <div class="general-content">
            <h4>Primaria</h4>
            <p>¿Notas en tu hijo problemas en el estudio? ¿Necesita refuerzo
            en alguna asignatura?</p>
            <p>Los primeros años en la educación de todo niño
            son los más importantes. En Academia Cifras y Letras les formamos
            con una buena base educativa para que puedan resolver problemas y
            valerse por ellos mismos.</p>
            <p>Grupos reducidos y atención personalizada para un mayor rendimiento</p>
          </div>

          <div class="general-content">
            <h4>ESO</h4>
            <p>Obtener el graduado en ESO es el requisito mínimo obligatorio para
            todo estudiante. Si tienes dificultades con las asignaturas, en Academia
            Cifras y Letras te ofrecemos las herramientas necesarias para que sea
            todo más fácil.</p>
            <p>Además de motivar y trabajar con los alumnos de forma personalizada,
            les damos la formación necesaria para alcanzar los objetivos del curso
            con buenos resultados. <strong>Impartimos clases todo el año</strong></p>
          </div>

          <div class="general-content">
            <h4>Bachillerato</h4>
            <p>Los dos cursos de Bachillerato son fundamentales si quieres cursar
            una carrera universitaria. La media de la nota obtenida junto con la de
            Selectividad determinará la titulación universitaria a la que puedas
            acceder.</p>
            <p>Te preparamos para conseguir los mejores resultados y los objetivos
            que te has marcado. <strong>¡No lo pienses más, podemos ayudarte!</strong>
            </p>
          </div>

          <div class="general-content">
            <h4>Preparación graduado ESO</h4>
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
            <h4>Preparación título Bachillerato</h4>
            <p>Si ya tienes el graduado en ESO y te falta el Bachillerato, no pierdas
            la oportunidad de completar tus estudios para mejorar tu situación
            laboral o acceder a la universidad.</p>
            <p>La prueba para la obtención del título se subdivide en tres bloques
            con exámenes diferentes y solo te podrás presentar a los que no hubieras
            superado con anterioridad.</p>
            <p>La prueba es para personas mayores de 20 años o que cumplan esa edad
            en el año natural en que se celebran.</p>
          </div>

          <div class="general-content">
            <h4>Preparación Selectividad</h4>
            <p>Si tienes problemas con la selectividad o necesitas una nota más alta
            te ayudamos con las asignaturas a las que te presentes. Es una prueba
            decisiva, ya que la nota obtenida va a determinar tu futuro.</p>
            <p>Disponemos de exámenes de selectividad y de profesores que resolverán
            todas tus dudas. Nos adaptamos a tus necesidades y horarios, preparamos
            durante todo el año o cursos intensivos previos a las convocatorias.</p>
          </div>

        </div>

        <div class="general-content">
          <h3>Pruebas de Acceso</h3>

          <div class="general-content">
            <h4>Acceso a grado medio y superior</h4>
            <p>¿Has abandonado los estudios? ¿No estás seguro de continuar y quieres
            acceder pronto al mercado laboral?</p>
            <p>Impartimos cursos de formación para el acceso a grado medio y grado
            superior. Trabajamos de <b>forma personalizada</b> con cada alumno
            preparándole para el examen de acceso.
          </div>

          <div class="general-content">
            <h4>Acceso a Universidad (+25 años)</h4>
            <p>Si eres mayor de 25 años y quieres acceder a un título universitario,
            te preparamos el examen de acceso para cualquier grado.</p>
            <p>Somos conscientes de que retomar los estudios después de años sin coger
            un libro es muy duro. Si a esto le sumamos que estudias y trabajas, el
            esfuerzo es mayor.</p>
            <p>Nuestros profesores te prepararán para que el examen de acceso te
            resulte un paso sencillo. <b>No pierdas la oportunidad de elegir tu futuro</b>
            </p>
          </div>

        </div>

        <div class="general-content">
          <h3>Cursos de Inglés</h3>

          <div class="general-content">
            <h4>Preparación para el B1, B2 y C1</h4>
            <p>¿Quieres trabajar en el extranjero? ¿Tu trabajo te exige hablar un
            segundo idioma? o ¿simplemente quieres aprender un idioma extranjero?</p>
            <p>Aprender una lengua extranjera es un requisito indispensable para tener
            éxito profesional. Las empresas demandan profesionales que hablen otro
            idioma</p>
            <p>Nuestras clases son tanto de conversación (ya que pensamos que hablando
            otra lengua es como se aprende realmente) como de gramática, ya que la
            teoría es la llave de paso de la práctica.</p>
            <p>Disponemos de profesores con amplia experiencia en la preparación de
            los exámenes de Cambridge.</p>
            <p>Prueba tu nivel de inglés
              <a href="http://www.cambridgeenglish.org/es/test-your-english/">
                aquí
              </a>.</p>




          </div>
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
    echo '
    <div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h2>Contact</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form id="contact-form" class="form" action="#" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
              </div>
              <div class="form-group">
                  <label class="form-label" for="email">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
              </div>
              <div class="form-group">
                  <label class="form-label" for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
              </div>
              <div class="form-group">
                  <label class="form-label" for="message">Message</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">Send Message</button>
              </div>
          </form>
      </div>
  </div>
</div>
    ';
  }
?>
