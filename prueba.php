<!DOCTYPE html>
<html>
<head>
  <title>Tabla de Servicios</title>
  <link href="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.css" rel="stylesheet"/>

  <style>
    .search {
      width: 50%;
    }
  </style>
</head>
<body>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <table id="tabla-servicios" class="table">
        <thead>
          <tr>
            <th>N°</th>
            <th>archivo</th>
            <th>Descripcion</th>
            <th>fecha</th>
          </tr>
        </thead>
        <tbody>
            <?php  
            include("config/cone.php");

            $conslt = "SELECT `id`, `archivo`, `descripcion`, `fecha_subida` FROM `archivos_pdf`";
            $resulta = mysqli_query($conn, $conslt);
            
            while ($row = mysqli_fetch_array($resulta)) {
                // Suponiendo que la columna "archivo" contiene el nombre del archivo PDF
                $archivo_pdf = $row['archivo'];
                $ruta_pdf = "pdf/" . $archivo_pdf; // Ajusta la ruta a tu directorio
            
                // Genera un enlace para descargar o visualizar el PDF
                
            
            

            ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['archivo']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['fecha_subida']; ?></td>
            <td><?php echo '<a href="' . $ruta_pdf . '" target="_blank">Ver PDF</a><br>'; ?></td>
          </tr>
          <?php   } ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabla-servicios').bootstrapTable({
        striped: true,
        pagination: true,
        search: true
      });
    });
  </script>
</body>
</html>