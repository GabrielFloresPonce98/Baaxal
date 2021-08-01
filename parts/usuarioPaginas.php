<?php

switch($_GET['paginas']){
  //Segun que tengamos de la pagina mostara una pagina u otra.
  case 1:
    //En el caso 1 mostrara el foro
    forum();
    echo '<br>';
    forumComentarios();
    break;

    case 2:
      //En el caso 2 mostrara la leccion
      leccionParte2();
      break;


      case 3:
        //En el caso 3 mostara la leccion 
        leccionParte3();
        break;
}
?>









<?php
//Estas son las paginas que el usuario puede ver y trabaar
function Lecciones(){
echo '<div id="CambioLeccion">
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
';
}

function forum(){
  echo '<div class="section-container" style="color: black;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-14">
    
        <div class="card-container">
          <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
            <h5>
            <form action="" class="reveal-content">
         
            <div id="formRegistro">
            <div class="row">
                <div class="col-md-15">


                
                    <input type="text" class="form-control" id="tituloPublicacion" placeholder="Title">
                


                 
                    <textarea style="resize:none!important;"  type="email"  rows="7" cols="100" class="form-control" id="detalle"></textarea>
              
                    <center>
                    <button  type="button"   id="xd"  onclick="crearPublicacion()"  class="btn btn-primary">Publish</button>
                              </center>
                </div>
              </div>
            </div>
            <div id="formencuesta">
           
         
          </div>
        </div>
      </div>
    </div>
  </div>';

}

function forumComentarios(){

  include('../php/querys.php');
  echo cargarpublicacion();
}

function contactanos(){

}
?>