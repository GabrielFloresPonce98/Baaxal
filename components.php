<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  <link href="" rel="stylesheet">
  <title>Title page</title>
<link href="./main.550dcf66.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
<link href="style/estilos.css" rel="stylesheet">

</head>
<body> <!-- Add your content of header -->
<header>
<?php 
//Incluimos los querys y las partes de la plantilla
include("./parts/partesPlantilla.php");
include("./php/querys.php");
cabeceraSesion();
  ?>
</header>
<?php 
//Si la variable sesion es nulla o no tienen nada retornara a la pagina principal.
if(!isset($_SESSION['nombreUs'])){
  header("Location: http://localhost/mountain/"); 
 
   
 }?>
<!-- Add your site or app content here -->

<div id="CambioLeccion">
<div class="card text-center">
  <div style = "border-style: outset;" class="card-body">
    <h3 class="card-title">First lesson</h3>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <button onclick = "mostrarLecciones()" class="btn btn-primary">Go to learn</button>
  </div>
</div>

<div class="card text-center">
  <div style = "border-style: outset;" class="card-body">
    <h3 class="card-title">Second lesson</h3>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a  class="btn btn-primary">Go to learn</a>
  </div>
</div>

<div class="card text-center">
  <div style = "border-style: outset;" class="card-body">
    <h3 class="card-title">Third lesson</h3>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a class="btn btn-primary">Go to learn</a>
  </div>
</div>
</div>

  <div class="container">
    <div class="row">
    </div>
  </div>

  
  <script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
    scrollRevelation('.reveal');
  });
</script>

<?php
//Incluimos la cabecera
piepagina();
?>



<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script type="text/javascript" src="./main.0cf8b554.js"></script>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<script type="text/javascript" src="php/querys.js"></script>


</body>

</html>