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
<body> <!-- Add your content of header -->
</head>
<header>
  <?php 
  include("./parts/partesPlantilla.php");
  include("./php/querys.php");
  cabecera();


  ?>
  <?php

if(isset($_SESSION['nombreUs'])){
 header("Location: http://localhost/mountain/components.php"); 
}?>
</header>

<!-- Add your site or app content here -->
  <div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="titulo">BÁAXAL</h1>

          <br>
         
        </div>
      </div>
    </div>
  </div>
  
  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <h1> Howdy</h1><br>
          <h2>I'M YOUR PARTNER</h2>
        </div>
        <div class="col-xs-12 col-md-9 col-md-offset-2">
          <div class="text-center">
           <img class = "cabeza"src="assets/images/cabeza.png"> 
           <img class="ojoDerecho" src="assets/images/ojoDerecho.png"> 
           <img class="ojoIzquierdo"  src="assets/images/ojoIzquierdo.png"> 
          </div>
       </div>
      </div>
    </div>
  </div>
  <div class="row">

    <div class="col-6 col-md-4">
      <div  class="text-center">
        <div style=" border-radius: 10px; box-shadow: 10px 10px 5px #aaaaaa;">
         
          <h1 >Personalized learning</h1>
       
          <p>
            Learn English quickly and easily.
          </p>
        </div>
        <div>

        </div>
      </div>
     
  

    </div>
  <div class="col-6 col-md-4">
    <div  class="text-center">
    <div style="border-radius: 10px; box-shadow: 10px 10px 5px #aaaaaa;">
         
    <h1> 
      keep your motivation</h1>
 
    <p>
     All you need is enjoy learnd
     &nbsp;
     &nbsp;
     &nbsp;
     &nbsp;
     <br>
    </p>
  </div>
  </div>
  <div>

  </div>
</div>
  <div class="col-6 col-md-4">
    <div  class="text-center">
    <div style=" border-radius: 10px; box-shadow: 10px 10px 5px #aaaaaa;">
         
    <h1 >Improve   &nbsp;  quickly</h1>
 
    <p>
     10 Question of Baaxal are equal 1 University semester,
    </p>
  </div>
  </div>
  </div>
  <div>

  </div></div>
  
  </div>



  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="text-center">
            <h2>About Us</h2>
            Learn English quickly and easily.
          </div>
       </div>
      </div>
    </div>
  </div>


  <div id = "log" class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="section-container-spacer">
            <h2 class="text-center">Login</h2>
            <p class="text-center"></p>
          </div>
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content">
           
              <div id="formRegistro">
              <div class="row">
                  <div class="col-md-15">


                    <div class="form-group">
                      <input type="text" class="form-control" id="nom" placeholder="Full name">
                    </div>


                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>


                    <div class="form-group">
                      <input type="text" class="form-control" id="nombreUs" placeholder="User name">
                    </div>


                    <div class="form-group">
                      <input type="password" class="form-control" id="contr" placeholder="Password">
                    </div>

                  </div>
                </div>
              </div>
              <div id="formencuesta">
              </form>
        <section id="sec">
          <form id="formato">
        <div>
           <div>
            <div>
              <h1 class="Titulo_De_pregunta"></h1>
            </div>
      
            <div>
              <ul>
                <li>
                  <div>
                    <input  type="radio" class="op1" data-msg-required="Choose one of the options" name ="respuesta" required="required"  ria-required="true" value="a" 
                    >
                    <label class = "text1"></label>
                  </div>
                </li>
                <li>
                  <div>
                    <input  data-msg-required="Choose one of the options" required="required" name ="respuesta" type="radio"   aria-required="true" value="b">


                    <label class = "text2"></label>
                  </div>
                </li>
                <li>
                  <div>
                    <input  data-msg-required="Choose one of the options" required="required" name ="respuesta" type="radio" aria-required="true" value="c" >
                    <label class = "text3"></label>
                  </div>
                </li>
                
              </ul>
            </div>
          </div><!-- - class=row -->
        </div><!-- - class=wrapper_row -->
        </div>
      </form>
      </section>
      
      <p id="aviso"></p>
      


              <div id="formLogin">
                <div class="row">
                  <div class="col-md-15">


                    <div class="form-group">
                      <input type="text" class="form-control"
                       id="UsL" placeholder="User name">
                    </div>


                    <div class="form-group">
                      <input type="password" class="form-control" id="contrL" placeholder="Password">
                    </div>

                  </div>
                </div>
              </div>

              </form>

              <center id="botonesRegistro">
              <button type="button"  class="btn btn-primary" onclick="agregarDatos()" >Send </button>
       
            
              </center>


              <center id="botonesLogin">
              <button id="enviarLogin" onclick="entrarSistema()"  class="btn btn-primary">Login</button>
              <button id="irRegistro" onclick="mostrarRegistro()" class="btn btn-primary">Registrer</button>
              </center>
           
            </div>
           
          </div>
        </div>  
      </div>
    </div>
  </div>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navbarFixedTopAnimation();
  });
</script> 

  <?php

  piepagina();
  ?>



<script type="text/javascript" src="main.0cf8b554.js"></script>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="./php/querys.js"></script>


<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
    scrollRevelation('.reveal');
  });
</script>

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

</body>
</html>