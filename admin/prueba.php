<?php
require_once '../cone.php'; // Utiliza require_once para asegurarte de que el archivo se incluya solo una vez

// Establece la zona horaria y obtiene la fecha actual
date_default_timezone_set('America/Caracas');
$fechaActual = date('Y-m-d');

// Prepara la consulta SQL con parámetros para evitar inyecciones SQL
$sql = "SELECT SURNAME, FECHA, foto, no_hay, NAME FROM user_datos WHERE FECHA = '$fechaActual'";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Verifica si hay resultados
if (mysqli_num_rows($result) > 0) {
    while ($fila = mysqli_fetch_assoc($result)) {
        $nombre = $fila['NAME'];
        $noHay = $fila['no_hay'];
        $apellido = $fila['SURNAME'];
        $foto = $fila['foto'];
        $fechaNacimiento = $fila['FECHA'];

        // Compara la fecha actual con la fecha de nacimiento
        if ($fechaActual == $fechaNacimiento) {
            echo "$nombre $apellido"; // Concatena los nombres con un espacio
        } else {
            echo $noHay;
        }
    }
} else {
    echo "No hay resultados";
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>

