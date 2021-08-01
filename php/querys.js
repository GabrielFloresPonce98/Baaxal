
//Variables globales.

//Esta variable sirve para cambiar de pregunta en el examen inicial.
let i = 1;
//Cuando haga el cambio de preguunta en el examen de la primera leccion la variable K hara el cambio
let k = 1;
//Este arreglo sirve para guardar las respuestas del usuario en el examen inicial.
let respUsu = [];
//Este arreglo sirve para guardar las respuestas del usuario en el examen inicial.
let respUsuBasico = [];
//Da una calificacion del examen inicial
let res = 0;
//Da una calificacion del examen inicial
let resBasico = 0;
//Nivel que obtendras en el examen inicial.
let nivel = "";
//La cantidad de paginas que hay.
let cambioPagina =1;  
// Cambio de leccion.
let leccion =1;

  
 
$(document).ready(function() { F
    //Cuando este lista la pagina web obten las preguntas que se haran.
    $.getJSON('/mountain/assets/preguntas/json/preguntas.json', function(pr){
       
        //Eviamos todos los datos que esten en la posicon 0.
    $(".Titulo_De_pregunta").text(pr.pregunta[0]);
    $(".text1").text(pr.opA[0]);
    $(".text2").text(pr.opB[0]);
    $(".text3").text(pr.opC[0]);


    //Cuando de click en los raddio button cambiara las preguntas y las respuestas.
         $("#sec input").click(function(){   
             //Si la variable i llega a 20 esconde la seccion de examen y muestra el formulario de registro.  
           if(i==20){
                $('#formencuesta').hide();
                $('#formRegistro').show();
                $('#botonesRegistro').show();
            }
            //En otro caso cambia las preguntas y respuestas conforme a I.
        $(".Titulo_De_pregunta").text(pr.pregunta[i]);
        $(".text1").text(pr.opA[i]);
        $(".text2").text(pr.opB[i]);
        $(".text3").text(pr.opC[i]);
        i++;
        respUsu.push($('input[name=respuesta]:checked','#sec').val());
    
    });
    

});





$(".contactUs").hide();


   function loop(){
        $(".cabeza")
        .animate({top:20},1000)
        .animate({top:10},1000, loop);    
    }
    //Se ocultan los formularios que aun NO queremos que se muestren al USUARIO.
    $('#formRegistro').hide();
    $('#formencuesta').hide();
       $('#botonesRegistro').hide();
    
    loop();
  
   
}); 
function mostrarLogin(){
//Si damos click a mostrar login ocultara El formulario de registro y mostrara el formulario de LOGIN.
    $('#botonesRegistro').hide();
    $('#formRegistro').hide();
    $('#formLogin').show();
    $('#botonesLogin').show();
    
}
function mostrarRegistro(){
    //Cuando mostremos las partes del registro oocultaremos todo lo del login y mostraremos la encuesta para saber el nivel.
    $('#botonesLogin').hide();
    $('#formLogin').hide();
    $('#formencuesta').show();

}
function entrarSistema(){

    //Enviaremos una peticion de login al documento php en el caso LOGIN con el nombre de usuario y contrasenia 
    //Consultando a la base de datos con AJAX para NO recargar la pagina y hacerlo en automatico para simular una
    //App movil
    let casos = "login";
    let nombreUs = $('#UsL').val();
    let contr = $('#contrL').val();
    $.ajax({
        url:"http://localhost/mountain/php/casos.php",
        type:"post",
        data:{
            "casos":casos,
            "nombreUs":nombreUs,
            "contr":contr
            

        },
        //Cuando se complete la operacion
        success: function(respuesta){
            //Si la respuesta es 2 
          if(respuesta=="2"){
              //El usuario y contrase;a son incorrectos
                alert("El usuario o contraseña son incorrectos.")
          }else if(respuesta =="1"){
              //En caso de ser 1 se enviara al escritorio de usuario.
            location.href = "components.php";
          }
        }
    });
}
function agregarDatos(){
    //Cuando nos registremos necesitaremos enviar datos para que se guarden
    //Mediante un identificador de las entradas del formulario podremos enviar dichos datos.
    //Consultaremos las preguntas que estan en formato JSON
    $.getJSON('/mountain/assets/preguntas/json/preguntas.json', function(pr){            
    let nom = $("#nom").val();
    let email = $("#email").val();
    let nombreUs = $("#nombreUs").val();
    let contr = $("#contr").val();
    let casos = "add";
    //Recorrermos con un for para saber si las respuestas del usuario son iguales a las
    //Que estan guardadas en el formato JSON.
    for(const i in pr.res){            
        if(respUsu[i]==pr.res[i]){
            res++;
        }    
    }
              
    //igual a 20 o entre 15 sera considerado alto
    if(res==20 || res>=15 ){
        nivel="ALTO";
        //Entre 10 y menor a 15 sera considerado medio
    }else if(res>=10 && res<15){
        nivel="MEDIO";
        //Menor a 10 sera considerado BAJO
    }else if(10>res){   
        nivel="BAJO";
        
    }
    //Enviaremos los datos para el caso de un nuevo registro a la pagina Casos para poder guardar en la base de datos.
    $.ajax({
    url:"http://localhost/mountain/php/casos.php",
    type: "post",
    data:  
        {
            "casos":casos,
            "nom":nom,
            "email":email,
            "nombreUs":nombreUs,
            "contr":contr,
            "nivel":nivel

        },
    success: function(response){
        //Completado enviaremos al usuario a la otra pagina.
        location.href = "components.php";
    },
    error: function(jqXHR,textStatutos, errorThrown){
        console.log(textStatutos,errorThrown);
    }
        });
                
             
               
    });
}
function agregarExamen(){
    
    $.getJSON('/mountain/assets/preguntas/json/preguntas.json', function(pr){ 
   
        for(const i in pr.respuestasBasico){            
            if(respUsuBasico[i]==pr.respuestasBasico[i]){
                resBasico++;
            }    
        }
        let  calificacion = ((resBasico/20)*100);
        let casos = "examenB";
        $.ajax({
            url:"http://localhost/mountain/php/casos.php",
            type: "post",
            data:  
                {
                    "casos":casos,
                    "calificacion":calificacion
                },
            success: function(response){

                location.href = "components.php";
                window.alert("Thanks! your results is:" + calificacion);
            },
            error: function(jqXHR,textStatutos, errorThrown){
                console.log(textStatutos,errorThrown);
            }
        });
    
      });
}
function crearPublicacion(){    
    //Creamos una publicacion en la parte de foro necesitamos los textos que enviaremos.
let tituloPublicacion =$('#tituloPublicacion').val();
let detalle =$('#detalle').val();
let casos = "crearPublicacion";
//Enviamos los datos al PHP que guarda los datos.
$.ajax({
    url:"http://localhost/mountain/php/casos.php",
    type: "post",
    data:
    {   
        "casos":casos,
        "tituloPublicacion":tituloPublicacion,
        "detalle":detalle
    },
    success: function(response){
      //En caso de completarse sin errores limpiaremos el texto con blanco
        $('#tituloPublicacion').val("");
        $('#detalle').val("");
        //Recargaremos el espacio donde muestra el foro para simular una app.
        forum();

    },
    error: function(jqXHR,textStatutos, errorThrown){
       
    }
});
}

function mostrarLecciones(){
  //Mostaremos las leccion que estan guardadas en el php leccion/
    $.get("parts/Lecciones.php",{
        "leccion":leccion
    }, function(data,status){
        $("#CambioLeccion").html(data);
    });

}
function avanzarLecciones(){
    leccion++;
    //Para ir cambiando de leccion cuando se active el boton avanzar aumentara en uno
    //la variable leccion aumentara para cambiar de pagina sin necesidad de crear mas paginas solo tener guardado
    //el HTML en una funcion.
    //Se utliza GET para solo obtener el contenido sin recargar nada
    $.get("parts/Lecciones.php",{
        "leccion":leccion
        
    }, 
    //Si se empieza con 1 obtendra la parte 1 y asi asta que se llegue a la parte 4.
    function(data,status){
        //Se envia el contenido a un contenedor con el ID CambioLeccion
        //Cada una de las lecciones se vera representada aqui
        $("#CambioLeccion").html(data);
        //Para cada cambio de leccion se enviara al usuario al arriba del todo de la pagina.
        $('html, body').animate({scrollTop:0}, 'fast');
        //Cuando llegue a presentar el examen sera en la parte 5
        if(leccion == 4){
            //En caso de que nos devuelva un 1 la parte 4 significa que el usuario YA
            //Presento este examen no tiene por que volverlo a presentar
            if(data == "1"){
                window.alert("You have answered this test");
                location.href = "components.php";
            }else{
                //Caso contrario si el usuario quiere presentar el examen
            if(confirm("Do you present this exam?")){
                //Empezara las preguntas del primer nivel
               PreguntasBasicas();
            }else{
                //Caso que NO quiera se le regresara a su escritorio de suario.
                
                location.href = "components.php";
            }
        }
         
             
        }

        
    });


}
function PreguntasBasicas(){
    $(document).ready(function() { 
        //Cuando este lista la pagina web obten las preguntas que se haran.
        $.getJSON('/mountain/assets/preguntas/json/preguntas.json', function(prB){
           
            //Eviamos todos los datos que esten en la posicon 0.
        $(".Titulo_De_preguntaBasico").text(prB.preguntasBasico[0]);
        $(".text1Basico").text(prB.opABasico[0]);
        $(".text2Basico").text(prB.opBBasico[0]);
        $(".text3Basico").text(prB.opCBasico[0]);
        $(".text4Basico").text(prB.opDBasico[0]);
        
        
        //Cuando de click en los raddio button cambiara las preguntas y las respuestas.
             $("#secbasico input").click(function(){  
          
                 //Si la variable i llega a 20 esconde la seccion de examen y muestra el formulario de registro.  
               if(k==20){
                agregarExamen();
                }
                //En otro caso cambia las preguntas y respuestas conforme a I.
            $(".Titulo_De_preguntaBasico").text(prB.preguntasBasico[k]);
            $(".text1Basico").text(prB.opABasico[k]);
            $(".text2Basico").text(prB.opBBasico[k]);
            $(".text3Basico").text(prB.opCBasico[k]);
            $(".text4Basico").text(prB.opDBasico[k]);
            k++;
            respUsuBasico.push($('input[name=respuestaB]:checked','#secbasico').val());
        
        });
        });
                    
                });
}
function retrocederLecciones(){
    leccion--;
    //Aqui solo retrocederemos de leccion hasta que podamos terminar 
    $.get("parts/Lecciones.php",{
        "leccion":leccion
    }, function(data,status){
        //En caso de que se devuelva has 0 lo envaremos a su escritorio
        if(leccion==0){
            window.location='http://localhost/mountain/components.php';
        }
        $("#CambioLeccion").html(data);
        $('html, body').animate({scrollTop:0}, 'fast');
    });

}
function forum(){
    //Aqui como usamos un get a la pagina UsuarioPaginas.php tenemos que 
    //Enviarle un 1 ya que es como obtendremos el FORO de comunidad
    //Aqui tendremos todo lo que la pagina ofrece para conversar.
    let paginas = 1;
    $.get("parts/usuarioPaginas.php",{
        "paginas": paginas
    }, function(data,status){
        $("#CambioLeccion").html(data);
    });
}

function agregarComentario(idpublicacion,index){
    //Aqui podremos agregar un comentario a las publicacion
    //Neceitaremos el comentario con el index de la publicacion a la que vamos a comentar
    //ID publicacion es a la que vamos a comentar
    //index es el numero en html de a publicacion a la que vamos a comentar
    let com = "#Comentario" + index;
    let casos = "crearComentario";
    let ID_Publicacion = idpublicacion;
    var TextoComentarios =$(com).val();
    //Enviamos a CASOS lo que queremos agregar solo necesitamos enviar el ID de la publicacion que
    //Esta siendo comentada y el textoComentarios.
    $.ajax({
        url:"http://localhost/mountain/php/casos.php",
        type:"post",
        data:{
            "casos":casos,
            "ID_Publicacion":ID_Publicacion,
            "TextoComentarios":TextoComentarios
        },
        success: function(respuesta){
          //En caso de que sea exito el poner el comentario recargaremos el Foro de manera automatica
          //Para simular la APP
            forum();
        }
    });
    
}
