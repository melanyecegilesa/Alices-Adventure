<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174794371-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174794371-1');
</script>
    <meta charset="utf-8">
    <title>Welcome </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>

    <!DOCTYPE HTML>
<!--
  Big Picture by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174794371-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174794371-1');
</script>
    <title>ALICE'S ADVENTURE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
  <body class="is-preload">

    <!-- Header -->
      <header id="header">
        <h1>Alice's Adventure</h1>
        <nav>
          <ul>
            <li><a href="#intro">Inicio</a></li>
            <li><a href="#one">Intro</a></li>
            <li><a href="#two">Historia</a></li>
            <li><a href="#work">Personajes</a></li>
            <li><a href="#contact">Contact</a></li>
             <li><a href="logout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
      </header>

    <!-- Intro -->
      <section id="intro" class="main style1 dark fullscreen">
        <div class="content">
          <header>
            <h2>Proximamente.</h2>
          </header>
          <a href="" class="button">Descargar</a>
          
          <!--<p>Bienbenido a <strong>Alice's Adventure</strong><a >.Un mundo lleno de avienturas </a><br /> y lugares fantasticos <a><strong>¿PODRAS ESCAPAR?</strong></a>.</p>-->
          <footer>
            <a href="#one" class="button style2 down">More</a>
          </footer>
        </div>
      </section>

    <!-- One -->
      <section id="one" class="main style2 right dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>Intro</h2>
          </header>
          <p>Alice's Adventure es un juego ceado en base a un cuento globalmente conocido como Alicia en el pais de las maravillas escrito por Lewis Carrol para el entretenimiento de niños y niñas de todas las edades   </p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
      </section>

    <!-- Two -->
      <section id="two" class="main style2 left dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>Historia</h2>
          </header>
          <p>Un caluroso día de verano, Alicia decide seguir a un conejo blanco con chaleco y reloj que parece tener mucha prisa, es más, no hace más que repetir la frase «¡Dios mío, Dios mío! ¡Qué tarde voy a llegar!». Y dentro de su madriguera llegará a un reino maravilloso donde todo es posible: conocerá a personajes inolvidables, algunos un poquito chalados, como el Sombrerero Loco y la Liebre de Pascua y… ¡hasta una reina de corazones empeñada en cortar cabezas!.</p>
        </div>
        <a href="#work" class="button style2 down anchored">Next</a>
      </section>

    <!-- Work -->
      <section id="work" class="main style3 primary">
        <div class="content">
          <header>
            <h2>Personajes</h2>
            <p></p>
          </header>

          <!-- Gallery  -->
            <div class="gallery">
              <article class="from-left">
                <a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="Alicia" alt="" /></a>
              </article>
              <article class="from-right">
                <a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="Conejo Blanco" alt="" /></a>
              </article>
              <article class="from-left">
                <a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Gato de Cheshire" alt="" /></a>
              </article>
              <article class="from-right">
                <a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Din y Dan" alt="" /></a>
              </article>
              <article class="from-left">
                <a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="Reina de corazones" alt="" /></a>
              </article>
              <article class="from-right">
                <a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a>
              </article>
            </div>

        </div>
      </section>

    <!-- Contact -->
      <section id="contact" class="main style3 secondary">
        <div class="content">
          <header>
            <h2>Hola.</h2>
            <p>Contactanos y ayudanos a mejorar.</p>
          </header>
          
                    <script type="text/javascript" src="https://form.jotform.com/jsform/202151764678864"></script>
          
          <!-- <div class="box">
            <form method="post" action="#">
              <div class="fields">
                <div class="field half"><input type="text" name="name" placeholder="Name" /></div>
                <div class="field half"><input type="email" name="email" placeholder="Email" /></div>
                <div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
              </div>
              <ul class="actions special">
                <li><input type="submit" value="Send Message" /></li>
              </ul>
            </form>
          </div>-->
        </div>
      </section>

    <!-- Footer -->
      <footer id="footer">

        <!-- Icons -->
          <ul class="icons">
            <li><a href="https://twitter.com/AlicesAdventur8" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/Alices-Adventure-113092543804295/?modal=admin_todo_tour" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/alicesadventure7/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
          </ul>

        <!-- Menu -->
          <ul class="menu">
            <li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
          </ul>

      </footer>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.poptrox.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>
      <br> Welcome. <?= $user['email']; ?>
      <br>¡Bienvenido!
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Inicia sesión o Registrate</h1>

      <a href="login.php">Iniciar</a> 
      <a href="signup.php">Registro</a>
    <?php endif; ?>
  </body>
</html>
