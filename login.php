<?php

 include ("config/cone.php"); // Assuming this file contains your database connection

session_start();

// Verification for login
if ($_POST) {
  $USER = $_POST['USER'];
  $password = $_POST['PASSWORD'];

  $sql = "SELECT IDDATOS, PASSWORD, USER, EMAIL, IDROLS, telefono, ASSIGNED_AREA, NAME, SURNAME, CEDULA FROM user_datos WHERE USER='$USER' ";
  $resultado = mysqli_query($conn, $sql);
  $num = $resultado->num_rows;

   //Check password length (optional)
   // if (strlen($password) <= 8) {
    // echo "La contraseña tiene que ser al menos de 8 caracteres";
  // } else {

  if ($num > 0) {
    $row = $resultado->fetch_assoc();
    $password_bd = $row['PASSWORD'];
    $pass_c = sha1($password); // Hashing the entered password

    if ($password_bd == $pass_c) {
       // Login successful - Store user data in session
       $_SESSION['IDDATOS'] = $row['IDDATOS'];
       $_SESSION['USER'] = $row['USER'];
       $_SESSION['IDROLS'] = $row['IDROLS'];
       $_SESSION['NAME'] = $row['NAME'];
       $_SESSION['SURNAME'] = $row['SURNAME'];
       $_SESSION['CEDULA'] = $row['CEDULA'];
       $_SESSION['PASSWORD'] = $row['PASSWORD']; // Not recommended to store hashed password in session
       $_SESSION['telefono'] = $row['telefono'];
       $_SESSION['EMAIL'] = $row['EMAIL'];
       $_SESSION['ASSIGNED_AREA'] = $row['ASSIGNED_AREA'];

      // Redirect based on user role
      switch ($_SESSION['IDROLS']) {
        case 1:
          header("Location: admin/index.php");
          break;
        case 2:
          header("Location: index.php");
          break;
        case 3:
          header("Location: soporte/index.php");
          break;
        case 4:
          header("Location: ghumano/index.php");
          break;
        default:
          echo "<script>
                  Swal.fire({
                    icon: 'error',
                    title: 'Rol no existente',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                  }).then(() => {
                    location.assign('index.php');
                  });
                </script>";
          break;
      }
    } else {
      // Incorrect password
      echo "<script>
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
            </script>";
    }
  } else {
    // User not found
    echo "<script>
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
          </script>";
  }
}

?>
