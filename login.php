<?php
require "cone.php";

 session_start();

//  Verificacion para el inicio de sesion.
if ($_POST) {
    $USER = $_POST['USER'];
    $password = $_POST['PASSWORD'];

    $sql = "SELECT IDDATOS, PASSWORD, USER, EMAIL, ABILIDAD_U_OFICIO, IDROLS, telefono,  NAME, SURNAME, CEDULA FROM user_datos WHERE USER='$USER' ";
    $resultado = mysqli_query($conn,$sql);

    $num = $resultado->num_rows;

    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['PASSWORD'];
        $pass_c = sha1($password);
        if ($password_bd == $pass_c) {
            $_SESSION['IDDATOS'] = $row['IDDATOS'];
            $_SESSION['USER'] = $row['USER'];
            $_SESSION['IDROLS'] = $row['IDROLS'];
			$_SESSION['NAME'] = $row['NAME'];
            $_SESSION['SURNAME'] = $row['SURNAME'];
            $_SESSION['CEDULA'] = $row['CEDULA'];
            $_SESSION['ABILIDAD_U_OFICIO'] = $row['ABILIDAD_U_OFICIO'];
            $_SESSION['PASSWORD'] = $row['PASSWORD'];
            $_SESSION['telefono'] = $row['telefono']; 
            $_SESSION['EMAIL'] = $row['EMAIL'];
        //    Comprobación de inicion de sesión y roles
            if (isset($_SESSION['IDROLS'])) {
                switch ($_SESSION['IDROLS']) {
                   case 1:
                        header("Location: html/index.php");
                        break;
                    case 2:
                        header("Location: usuario/index.php");
                        break;
                    case 3:
                        header("Location: tecnico/index.php");
                        break;
                    case 4:
                        header("Location: rrhh/index.php");
                        break;
                   
                    default:
                           echo  "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Rol no existente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('index.php');
              });
    });
        </script>";
    
                        break;
                }

            }
        } else {
            // Envia un mensaje de alerta por si el password no coincide
             echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'La contraseña no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('index.php');

                      });
            });
                </script>";
        }
    } else {
        // Envia un mensaje de alerta por si el usuario no coincide no coincide
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El usuario no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('index.php');

                      });
            });
                </script>";
    }
}
?>