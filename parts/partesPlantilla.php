  
  <?php
  //Esta funcion solo fue creada por no rescribir tanto HTML,
  //Solo mandar a llamar la cabecera, pie de pagina y cabecera del usuario
function cabecera(){
 echo ' <nav class="navbar navbar-default active">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./" title="">
          <img style="widht:110px; height:110px; position:relative; top:-35px!important;" src="./assets/images/iconLogo.png" class="navbar-logo-img" alt="">
       
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#log" title="">Sing Up</a></li>
          <li><a href="./components.php" title="">Contact us</a></li>
        </ul>
      </div> 
    </div>
  </nav>';
}

function cabeceraSesion(){
  echo ' <nav class="navbar navbar-default active">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="./" title="">
           <img style="widht:110px; height:110px; position:relative; top:-35px!important;" src="./assets/images/iconLogo.png" class="navbar-logo-img" alt="">
        
         </a>
       </div>
 
       <div class="collapse navbar-collapse" id="navbar-collapse">
         <ul class="nav navbar-nav navbar-right">  
         
         
        <button id="avanzar" onclick = "avanzarLecciones()" class="btn btn-light">Contact Us</button>
    <button  onclick = "forum()" class="btn btn-light">Forum</button>
         <li><a href="CerrarSession.php">Sing out</a></li>
       
 
         </ul>
       </div> 
     </div>
   </nav>';
 }
function piepagina(){
  echo '<footer style="background-color:#7a86c7;"  class="footer-container white-text-container">
  
</footer>';
}


?>