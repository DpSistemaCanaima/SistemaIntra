<?php
// Conexión a la base de datos (reemplaza con tus datos)
include("config/cone.php");
// Carpeta donde se guardarán los archivos
$carpeta_destino = "uploads/";

// Procesar la subida del archivo
if(isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0){
    $nombre_original = $_FILES['archivo']['name'];
    $tipo_archivo = $_FILES['archivo']['type'];
    $tamano_archivo = $_FILES['archivo']['size'];

    // Validar que sea un archivo PDF
    if(pathinfo($nombre_original, PATHINFO_EXTENSION) != "pdf"){
        echo "Solo se permiten archivos PDF.";
        exit();
    }

    // Generar un nombre único para el archivo en el servidor
    $nombre_nuevo = uniqid() . "." . pathinfo($nombre_original, PATHINFO_EXTENSION);

    $ruta_destino = $carpeta_destino . $nombre_nuevo;

    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_destino)) {
        // Insertar datos en la base de datos
        $sql = "INSERT INTO archivos_pdf (nombre_original, nombre_servidor, extension, tamano, fecha_subida) 
                VALUES ('$nombre_original', '$nombre_nuevo', 'pdf', '$tamano_archivo', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Error al subir el archivo: " . $conn->error;
        }
    } else {
        echo "Error al mover el archivo.";
    }
} else{
    echo "Error: " . $_FILES['archivo']['error'];
}

$conn->close();
?>
