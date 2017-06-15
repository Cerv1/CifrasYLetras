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
      <title>Cifras y Letras</title>
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
    <div class="top-panel">
      <header>
        <div class="top-header">
          <a class="header-item" href="index.php"><div class="logo-header">
            <h1>Cifras y Letras - Academia de Formación</h1>
          </div></a>
          <a class="header-item link-item" href="#"><div class="login-header">
            <h4><a href="index.php?p=5">LOG IN</a></h4>
          </div></a>
        </div>
      </header>
      <nav>
        <div><ul class="link-item">';
        $items = ["Inicio", "Formación", "Instalaciones", "Sobre nosotros", "Contacto"];
          foreach ($items as $k => $v)
            echo "<li".($k==$activo?" class='activo'":"").">"."<a href='index.php?p=".($k)."'>".$v."</a></li>";
        echo '</ul>
        </div>
      </nav>
    </div>';
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
      case 5:
        HTMLLogIn();
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

      <div class="aux-content">
        <ul>
          <li class="first-li-item"><a href="apoyo-escolar" class="first-ul-item">Apoyo Escolar</a>
          <ul class="ul-second-level">
            <li><a href="#apoyo-primaria">Primaria</a></li>
            <li><a href="#apoyo-eso">ESO</a></li>
            <li><a href="#apoyo-bachillerato">Bachillerato</a></li>
            <li><a href="#apoyo-preparacion-eso">Preparación graduado ESO</a></li>
            <li><a href="#apoyo-preparacion-bachillerato">Preparación título Bachillerato</a></li>
            <li><a href="#apoyo-preparacion-selectividad">Preparación Selectividad</a></li>
          </ul></li>

          <li class="first-li-item"><a href="#pruebas-de-acceso" class="first-ul-item">Pruebas de Acceso</a>
          <ul class="ul-second-level">
            <li><a href="#pruebas-grado">Acceso a grado medio y superior</a></li>
            <li><a href="#pruebas-universidad">Acceso a Universidad (+25 años)</a></li>
          </ul></li>

          <li class="first-li-item"><a href="#cursos-de-ingles" class="first-ul-item">Cursos de Inglés</a>
          <ul class="ul-second-level">
            <li><a href="#cursos-b1">Preparación para el B1, B2 y C1</a></li>
          </ul></li>
        </ul>
      </div>

      <div class="main-content">
        <div class="general-content">
          <h3 id="apoyo-escolar">Apoyo escolar</h3>

          <div class="general-content paragraph" id="apoyo-primaria">
            <h4>Primaria</h4>
            <p>¿Notas en tu hijo problemas en el estudio? ¿Necesita refuerzo
            en alguna asignatura?</p>
            <p>Los primeros años en la educación de todo niño
            son los más importantes. En Academia Cifras y Letras les formamos
            con una buena base educativa para que puedan resolver problemas y
            valerse por ellos mismos.</p>
            <p>Grupos reducidos y atención personalizada para un mayor rendimiento</p>
          </div>

          <div class="general-content paragraph" id="apoyo-eso">
            <h4>ESO</h4>
            <p>Obtener el graduado en ESO es el requisito mínimo obligatorio para
            todo estudiante. Si tienes dificultades con las asignaturas, en Academia
            Cifras y Letras te ofrecemos las herramientas necesarias para que sea
            todo más fácil.</p>
            <p>Además de motivar y trabajar con los alumnos de forma personalizada,
            les damos la formación necesaria para alcanzar los objetivos del curso
            con buenos resultados. <strong>Impartimos clases todo el año</strong></p>
          </div>

          <div class="general-content paragraph" id="apoyo-bachillerato">
            <h4>Bachillerato</h4>
            <p>Los dos cursos de Bachillerato son fundamentales si quieres cursar
            una carrera universitaria. La media de la nota obtenida junto con la de
            Selectividad determinará la titulación universitaria a la que puedas
            acceder.</p>
            <p>Te preparamos para conseguir los mejores resultados y los objetivos
            que te has marcado. <strong>¡No lo pienses más, podemos ayudarte!</strong>
            </p>
          </div>

          <div class="general-content paragraph" id="apoyo-preparacion-eso">
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

          <div class="general-content paragraph" id="apoyo-preparacion-bachillerato">
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

          <div class="general-content paragraph" id="apoyo-preparacion-selectividad">
            <h4>Preparación Selectividad</h4>
            <p>Si tienes problemas con la selectividad o necesitas una nota más alta
            te ayudamos con las asignaturas a las que te presentes. Es una prueba
            decisiva, ya que la nota obtenida va a determinar tu futuro.</p>
            <p>Disponemos de exámenes de selectividad y de profesores que resolverán
            todas tus dudas. Nos adaptamos a tus necesidades y horarios, preparamos
            durante todo el año o cursos intensivos previos a las convocatorias.</p>
          </div>

        </div>

        <div class="general-content" id="pruebas-de-acceso">
          <h3>Pruebas de Acceso</h3>

          <div class="general-content paragraph" id="pruebas-grado">
            <h4>Acceso a grado medio y superior</h4>
            <p>¿Has abandonado los estudios? ¿No estás seguro de continuar y quieres
            acceder pronto al mercado laboral?</p>
            <p>Impartimos cursos de formación para el acceso a grado medio y grado
            superior. Trabajamos de <b>forma personalizada</b> con cada alumno
            preparándole para el examen de acceso.
          </div>

          <div class="general-content paragraph" id="pruebas-universidad">
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

        <div class="general-content" id="cursos-de-ingles">
          <h3>Cursos de Inglés</h3>

          <div class="general-content paragraph" id="cursos-b1">
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
    echo '
    <div class="general-content">
      <div class="facilities-title"><h1>Nuestras instalaciones</h1></div>
      <div class="gallery-content">
        <div class="gallery-text">
          <p class="parrafo"><br>Disponemos de las mejores instalaciones, cómodas y ubicadas en una zona
          tranquila y segura. Tan solo tendrás que preocuparte por dar lo mejor de
          ti mismo y centrarte en tus estudios y objetivos.</p>
          <p class="parrafo">Fácil acceso y aparcamiento disponible 24 horas.</p>
        </div>
        <div class="gallery-image"><img src="./images/academy-outside.jpg" alt="academy-outside.jpg"></div>
      </div>
      <div class="gallery-content">
        <div class="gallery-text">
          <p class="parrafo"><br>Disponemos de las mejores aulas; amplias e iluminadas, y con el mejor
          acondicionamiento posible para tu bienestar.</p>
          <p class="parrafo">También disponemos de salas de relax para que puedas despejarte entre
          tus duras sesiones de aprendizaje.</p>
        </div>
        <div class="gallery-image"><img src="./images/classroom.jpg" alt="classroom.jpg"></div>
      </div>
    </div>
    ';
  }

  function HTMLAboutUs(){
    echo '
    <div class="general-content">
      <div class="general-title"><h1>¿Dónde puedes encontrarnos?</h1></div>
      <div class="gallery-content">
        <div class="gallery-text">
          <div class="about-us">
            <h2>Cifras y Letras - Centro de Formación</h2>
            <h3>¡Tu academia en el Zaidín!</h3>
            <h3>C/ Santa Rosalía Nº12</h3>
            <div id="num-telf">
              <p>858.95.01.08<br>
              668.57.82.25</p>
            </div>
          </div>
        </div>
        <div class="gallery-image">
          <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Calle+Santa+Rosal%C3%ADa,+12,+Granada,+Espa%C3%B1a&amp;aq=0&amp;oq=calle+santa+rosalia,+12&amp;sll=37.0625,-95.677068&amp;sspn=41.818029,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Calle+Santa+Rosal%C3%ADa,+12,+18007+Granada,+Espa%C3%B1a&amp;t=m&amp;z=14&amp;ll=37.151234,-3.599522&amp;output=embed">
          </iframe>
        </div>
      </div>
    </div>
    ';
  }

  function HTMLContact(){
    echo '
    <script src="./scripts/form-validator.js"></script>
    <div class="form-container">
      <div class="form">
        <h3>Contacte con nosotros</h3>
        <div class="form-group">
          <input type="text" class="form-control" value="" placeholder="Nombre" id="contact-name" />
          <label class="input-field-icon icon-user" for="login-name"></label>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" value="" placeholder="Email" id="contact-email" />
          <label class="input-field-icon icon-email" for="login-email"></label>
        </div>

        <div class="form-group">
          <textarea class="form-control" value="" placeholder="Mensaje" id="contact-message" rows="1"></textarea>
        </div>

        <button id="contact-send" class="btn btn-primary btn-lg btn-block">Enviar</button>
      </div>

      <div class="form-image">
        <img src="./images/support.png">
      </div>
    </div>
    ';
  }

  function HTMLLogIn(){
    include("config-db.php");
    include("database-methods.php");
    session_start();
    echo '
    <div class="login-card">
        <h1>Acceder</h1><br>
      <form>
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit"  formmethod="post" name="login" class="login login-submit" value="Entrar">
      </form>

      <div class="login-help">
        <a href="#">Registrarse</a>
      </div>
    </div>
    ';
    $myusername = mysqli_real_escape_string($db, $_POST['user']);
    $mypassword = mysqli_real_escape_string($db, $_POST['pass']);
    $result = login($myusername, $mypassword,$db);
    if($result == -1 ){
      echo 'Zoi jabascript i aun no ago kosas ke tio la virgen';
    }

  }
?>
