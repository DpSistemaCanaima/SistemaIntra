<?php
//Incluya el archivo de conexión
require "config/cone.php";

// Manejo de errores y validación de entrada
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  exit('Invalid request method');
}

$cedula = filter_input(INPUT_POST, 'cedula', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Sanitize user input
$password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Sanitize user input

// Prepare la instrucción SQL con el enlace de parámetros para la seguridad
$sql = "SELECT CEDULA FROM user_datos WHERE CEDULA = ?";
$stmt = mysqli_prepare($conn, $sql);

// Atar parámetros para evitar la inyección de SQL
mysqli_stmt_bind_param($stmt, 's', $cedula);

// Ejecutar la declaración preparada
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($result->num_rows === 1) {
  // Cedula válida encontrada, continúe con la actualización de contraseña

  $password_c = sha1($password); // Hash la contraseña

  // Actualizar la consulta de contraseña con parámetros vinculante
  $update_sql = "UPDATE user_datos SET PASSWORD = ? WHERE CEDULA = ?";
  $update_stmt = mysqli_prepare($conn, $update_sql);

  // Atar parámetros para evitar la inyección de SQL
  mysqli_stmt_bind_param($update_stmt, 'ss', $password_c, $cedula);

  // Ejecutar la declaración de actualización
  $update_result = mysqli_stmt_execute($update_stmt);

  if ($update_result) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
      icon: 'success',
      title: '  Se ha cambiado la contraseña. Inicie sesión con su nueva contraseña',
      showCancelButton: false,
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK',
      timer: 15000
      }).then(() => {
   
        location.assign('perfil.php');
   
       });
    });
    </script>";
  } else {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
      icon: 'error',
      title: ' Ha ocurrido un error al actualizar la contraseña. Intente nuevamente.',
      showCancelButton: false,
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK',
      timer: 15000
      }).then(() => {
   
        location.assign('perfil.php');
   
       });
    });
    </script>";
  }

  // Close prepared statements (not strictly necessary here, but good practice)
  mysqli_stmt_close($update_stmt);

} else {
  // Invalid CEDULA
        echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
      icon: 'error',
      title: ' La cédula no coincide. Intente nuevamente.',
      showCancelButton: false,
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK',
      timer: 15000
      }).then(() => {
   
        location.assign('perfil.php');
   
       });
    });
    </script>";
}

// Close result set and connection (not strictly necessary here, but good practice)
mysqli_free_result($result);
mysqli_close($conn);
?>