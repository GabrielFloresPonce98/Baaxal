<?php
    //Empezamos la sesion que se guarda una vez accesando.
  session_start();
function agregarUsuario($nombreC,$correo,$nombreUs,$contra,$nivel,$diaRegistro){
 //Incluimos la conexion
    include("conexion.php");   
    //Hacemos la sentencia SQL
    $sql = "INSERT INTO  usuario
        (
        NombreCompleto, 
        Correo,
        NombreUsuario,
        Contra,
        Nivel, 
        DiaRegistro
        )
        VALUES
        (
            '$nombreC',
            '$correo',
            '$nombreUs',
            '$contra',
            '$nivel',
            '$diaRegistro'
        )";
        //Asignamos un valor a la variable session
        $_SESSION['nombreUs'] = $nombreUs;
         
        //Si el resultado es falso entonces cerrara la conexion aqui ejecutamos el QUERY que necesita una
        // sentencia SQL y 
        //Con $con es conexion y $sql es nuestra sentencia sql.
        if(!$resul = mysqli_query($con,$sql)){
            exit(mysqli_query($con));
        }
      


}
function accederAsistema($nombreUs,$contra){
    //Una variable bandera que nos avisara si se a completado o no.
    $bandera = 0;
  
    include("conexion.php");
    //Hacemos un SELECT para ver si coinciden las credenciales
    $sql = "SELECT NombreUsuario,Contra FROM usuario WHERE NombreUsuario = '$nombreUs' AND Contra ='$contra'";
    // Ejecutamos query para verificar que no exista un error
    if(!$res = mysqli_query($con,$sql)){
        exit(mysqli_error($con));
    }
    //Si es mayor a 0 para poder mostar los datos
    if(mysqli_num_rows($res)>0){
        // Hara un fetch para poder ir viendo cada uno de los contenidos que estan en la base de datos
        while($columna = mysqli_fetch_assoc($res)){
            //Lo que encuentre se le asignara a la variable sesion
            $_SESSION['nombreUs'] = $columna['NombreUsuario'];
            //Retornara con el 1 sabremos que este proceso a sido exitoso
         $bandera = 1;
        }

    }else{
        //Si no encuentra nada entonces con el 2 sabremos que el usuario y contrasenia no son correcots
        $bandera = 2;

    }
    echo $bandera;

}
function agregarPublicacion($tituloPublicacion,$detalle,$fechaPublicacion,$idUsus,$idPublicacions){
    include("conexion.php");
    //Creamos la sentencia SQL para insertar en la base de datos la publicacion
    $sql = "INSERT INTO publicacion(
    tituloPublicacion,
    detalle,
    fechaPublicacion
    )
    VALUES(
       '$tituloPublicacion',
       '$detalle',
       '$fechaPublicacion')";

        //Ejecutaremos la sentencia SQL
        if(!$resul = mysqli_query($con,$sql)){
            exit(mysqli_query($con));
        }
        include("conexion.php");
      //Necesitamos vinsertar en la tabla que relaciona la publicacion con el usuario ya que 
      //Muchas publicacion pertenencen a muchos usuarios 
      
    $sql2 = "INSERT INTO usuario_publicacion(
            ID_Usuario,
            ID_Publicacion
            )
            VALUES(
               '$idUsus',
               '$idPublicacions')";
        
                if(!$resul2 = mysqli_query($con,$sql2)){
                    exit(mysqli_query($con));
                }
      
}

function insetarComentario($ID_Autor,$ID_Publicaicon,$TextoComentarios,$fechaPublicacion){
    //Incluimos conexion
    include("conexion.php");
    //Insertamos a la base de datos los comentarios 
    $sql = "INSERT INTO comentario(
        ID_Autor,
        ID_Publicacion,
        textoComentarios,
        fechaComentado
        )
        VALUES(
            '$ID_Autor',
            '$ID_Publicaicon',
            '$TextoComentarios',
            '$fechaPublicacion'
        )";
        //Ejecutamos el query
        if(!$res = mysqli_query($con,$sql)){
            exit(mysqli_query($con));
        }   
}
function valorMximoPublicacion(){
    
    include("conexion.php");
    //Inicializamos una variable id de publicacion
    $idPublicacion=0;
    //Obtenemos el valor maximo de la publicacion con el ultimo que se a dado de alta.
    $sql = " SELECT MAX(ID_Publicacion) AS Maximo FROM publicacion";
    //Ejecutamos el query
    if(!$res = mysqli_query($con,$sql)){
        exit(mysqli_error($con));
    }
    //Si es mayor a 0
    if(mysqli_num_rows($res)>0){
        //Recorremos todos los datos encontrados en este caso sera el valor maximo.
        while($columna = mysqli_fetch_assoc($res)){
            $idPublicacion = $columna['Maximo'];
        }
    }
    //Sumamos uno mas para que siemre se vayan acumulando las publicaicones
    return $idPublicacion+1;
}   

function ID_Usuario(){
    $idUsuario=0;

    //Mediante la varaible session que guarda el nombre de usuario necesitamos haremos un select del ID del usuario.
    //Este dato lo necesitamos mucho
    $nombreUsuario = $_SESSION['nombreUs'];
    include("conexion.php");
    //Hacemos sql
    $sql = "SELECT ID_Usuario FROM usuario WHERE NombreUsuario = '$nombreUsuario'";
    //Ejectuamos el query
    if(!$res = mysqli_query($con,$sql)){
        exit(mysqli_error($con));
    }
    //si es mayor a 0
    if(mysqli_num_rows($res)>0){
        //Recorremos todos los valores regresados en la consulta
        while($columna = mysqli_fetch_assoc($res)){
            $idUsuario = $columna['ID_Usuario'];
        }
    }
    return $idUsuario;
}   

function cargarpublicacion(){
    //La varaible I nos aydara a que dependiendo de cuantas publicaciones exista en la base de datos
    //Se le asiganara un numero a cada una de las publicaciones
    $i = 0;
    //la variable cuerpo actuara como un acumulador de todo el cuerpo HTML que le queremos dar a lo que esta 
    //Almacenado en la base de datos
    $cuerpo = "";
    include("conexion.php");
    //En esta funcion hara un inner join donde obtendremos los datos de la pubicaciobn 
    //Donde mediante el ID de la llave foranea obtenderemos dica relacion
   $sql = "SELECT publicacion.ID_Publicacion,  publicacion.tituloPublicacion,  publicacion.detalle, publicacion.fechaPublicacion,usuario.NombreCompleto 
   FROM usuario_publicacion
   INNER JOIN publicacion ON publicacion.ID_Publicacion = usuario_Publicacion.ID_Publicacion
   INNER JOIN  usuario ON usuario.ID_Usuario = usuario_publicacion.ID_Usuario";

   //Ejecutamos el query
    if(!$resultado = mysqli_query($con,$sql)){
        exit(mysqli_error($con));
    }
    //Si es mayor a 0 los registros que aparecen
    if(mysqli_num_rows($resultado)>0){
        //Muestra todo los resultados y recorreros
        while($columna = mysqli_fetch_assoc($resultado)){
            //La variable cuerpo ira acumulando todos los datos que aparezcan pero con un cuerpo HTML
            //Tambien mandamos a llamar la funcion cargarComentarios con el ID_Publicacion
            //Entonces mostara la publicacion con sus comentarios
            $cuerpo .= '  
            <div class="card-container" style="color: black;">
              <div class="container">
                <div class="row section-container-spacer">
                  <div class="col-xs-12 col-md-14">
                    <div class="card-container"> 
                      <div class="card card-shadow col-xs-11 col-xs-offset-1 col-md-10 ">
                        <h3 class="text-center">Title publish:  '.$columna['tituloPublicacion'].'</h3>
                        <h4 class="text-center">Author:  '.$columna['NombreCompleto'].'</h4>
                      
                        <p>'.$columna['detalle'].'
                        <h5> Date publish: '.$columna['fechaPublicacion'].'</h5>
                    </p>
                    
                     '.cargarComentarios($columna['ID_Publicacion']).'
                   
               
                   
                    <div class="form-group">
                    <input type="text" class="form-control" id="Comentario'.$i.'" placeholder="Title">  
                    <button id="publicarComentario" onclick="agregarComentario('.$columna['ID_Publicacion'].','.$i.')"  class="btn btn-primary">Publish</button>
                    </div>
                  
                  
                   
                    </div>  
                  </div>
                </div>  
              </div>
            </div>
          </div>
          ';
          $i++;
        }
       
    }
    //Returnamos el cuerpo
    return $cuerpo;

}
function cargarComentarios($id){
    $cuerpo = "";
    $idUsuario= "";
    include("conexion.php");
    //hACEMOS UN inner join que servira para mostar los comentarios con el ID publicacion y quien lo hizo
   $sql = "SELECT usuario.ID_Usuario,usuario.NombreCompleto ,comentario.textoComentarios, comentario.fechaComentado
   FROM usuario
   INNER JOIN comentario ON usuario.ID_Usuario = comentario.ID_Autor
   WHERE comentario.ID_Publicacion = $id";
   //Ejecutamos el query
    if(!$resultado = mysqli_query($con,$sql)){
        exit(mysqli_error($con));
    }
    //Si es mayor a 0
    if(mysqli_num_rows($resultado)>0){
        //Recorremos todo lo que devolvio el sql
        while($columna = mysqli_fetch_assoc($resultado)){
            //acumulamos todos los comentarios con la sentencia.
            $cuerpo .= '  
            <div style="background-color: rgba(68, 68, 68, 0.152);">
              <img src="assets/images/axolotllv1.png"> '.$columna['NombreCompleto'].'
                <p>'.$columna['textoComentarios'].'</p>
            </div>
          ';
          $idUsuario = $columna['ID_Usuario'];
        }
       
    }
    //Returnamos el cuerpo
        return $cuerpo;

}
function insertarLeccion($NombreLeccion,$PorcentajeAvance,$calificacion,$ID_Autor){
    //Terminando el examen INSERTAMOS
    //Los datos que son puestos en el examen
    include("conexion.php");
    $sql2 = "INSERT INTO leccion
    (
        NombreLeccion,
        porcentajeAvance,
        calificacion,
        ID_UsuaLeccion
        )
        VALUES
        (
            '$NombreLeccion',
            '$PorcentajeAvance',
            '$calificacion',
            '$ID_Autor'
        )";
        //Ejecutamos el query
        if(!$result = mysqli_query($con,$sql2)){
            exit(mysqli_query($con));
        }
      
}

function comprobarExamen($ID_Autor){
    //Este metodo sirve para comporbar que si una persona
    //ya realizo un examen
    //Esto nos muestra si una examen ya a sido realizdo o no
    include("conexion.php");
    $sql="SELECT count(leccion.calificacion) AS presentado FROM leecion
    INNER JOIN usuario ON usuario.ID_Usuario = leccion.ID_UsuaLeccion
    WHERE leccion.ID_UsuaLeccion = '$ID_Autor'";
    $Presentado=0;
     if(!$res = mysqli_query($con,$sql)){
        exit(mysqli_error($con));
    }
    if(mysqli_num_rows($res)>0){
        while($columna = mysqli_fetch_assoc($res)){
            $Presentado = $columna['presentado'];
        }
    }
    //Si tiene un valor entonces esto se interpretara como qeue ya se presento el examen
    return $Presentado;

}

?>