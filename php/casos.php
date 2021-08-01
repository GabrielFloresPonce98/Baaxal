<?php
//Incluimos todas las funciones del archivo querys.php que inclusye todas las consultas e inserts de la base de datos
include("querys.php");
//Necesitamso una variable POST para recibir los casos que vayamos a usar
$casos = $_POST['casos'];
switch($casos){
    case  "add":
        //En caso de ADD con todos los POST qque recibimos los mandaremos como parametros a la funcion agregarUsuarip
        $nombre = $_POST['nom'];
        $correo = $_POST['email'];
        $nombreUs = $_POST['nombreUs'];
        $contra = $_POST['contr'];
        $nivel = $_POST['nivel'];
        //PHP permite registar la fecha asi que inicimaos una variable con el metodo date para obtener la fecha actual
        $diaRegistro = date("Y-m-d H:i:s");
        agregarUsuario($nombre,$correo,$nombreUs,$contra,$nivel,$diaRegistro);    
        break;

    case "login":
        //Con los POST y el caso LOGIN obtendremos si esta persona accede al sistema o no
        accederAsistema($_POST['nombreUs'],$_POST['contr']);
        break;


    case "crearPublicacion":
        //Con los POST recibidos mandaremos estos 3 parametros a la funcion agregar publicacion
        $tituloPublicacion = $_POST['tituloPublicacion'];
        $detalle = $_POST['detalle'];
        $fechaPublicacion =  date("Y-m-d H:i:s");
        //La funcion ID_Usuario obtiene la ID de la persona que esta realizando la publicacion en ese momento
        //ValorMXimoPublicaicon obtiene el ID de la ultima publicaicon realizada, esto para mantener un contro.
        agregarPublicacion($tituloPublicacion,$detalle,$fechaPublicacion,ID_Usuario(),valorMximoPublicacion() );
        break;

        
    case "crearComentario":
        //con los POST recibidos los guardamos en una variable
        $ID_Publicacion = $_POST['ID_Publicacion'];
        $TextoComentarios = $_POST['TextoComentarios'];
        //Fecha donde fue realizado el comentario
        $fechaPublicacion = date("Y-m-d H:i:s");
        //Mandamos la funcion ID_Usuario para saber quien hace ese comentario junto con los otros 3 parametros
        insetarComentario(ID_Usuario(),$ID_Publicacion,$TextoComentarios,$fechaPublicacion);

        break;
    case "examenB":
        //Enviamos el examen realizado 
        //Basic Level es el examen basico
        //30 es el porcentaje de avance
        //Post ess la calificaicon obtenida
        //Id_Usuario es quien realizo el examen
       insertarLeccion("Basic Level","30",$_POST['calificacion'],ID_Usuario());
        break;

}
      

            
  

?>