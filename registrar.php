<?php


include('conexion.php');



   


    $NAME =$_POST['name'];
    $NACIONALIDAD =$_POST['nacionalidad'];
    $SURNAME =$_POST['surname'];
    $CEDULA =$_POST['cedula'];
    $OFICIO =$_POST['oficio'];
    $DIRECCION =$_POST['direccion'];
    $CIUDAD =$_POST['ciudad'];
    $MUNICIPIO =$_POST['municipio'];
    $PARROQUIA =$_POST['parroquia'];
    $USER =$_POST['user'];
    $PASSWORD_C = sha1('password');  
    $CORREO =$_POST['email'];
    $IDROLS =$_POST['idrols'];
    $LOGIN =$_POST['login'];
    $GENDER=$_POST['gender'];
    $AREA =$_POST['assigned_area'];

 

    $sql =mysqli_query($conn, "INSERT INTO `user_datos`(`name`, `nacionalidad`, `surname`, `oficio` ,`direccion`,`ciudad`, `municipio`, `parroquia`, `gender`,`cedula`, `user`, `password`, `email`, `idrols`, `login`, `assigned_area`) VALUES ('$NAME', '$NACIONALIDAD' ,'$SURNAME', '$OFICIO', '$DIRECCION', '$CIUDAD', '$MUNICIPIO', '$PARROQUIA' ,'$GENDER','$CEDULA','$USER', '$PASSWORD_C','$CORREO','$IDROLS','$LOGIN','$AREA')");

               
      if($sql){
        
        echo "<script>
        alert('El registro fue echo  correctamente');
        location.assign('gestiondeusuario.php');
    </script>";

      } else{
        echo "<script>
        alert('El registro no se realizo');
        location.assign('gestiondeusuario.php');
    </script>";
      }        
 
  

  ?>