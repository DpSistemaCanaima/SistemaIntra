<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validar contraseña</title>
</head>
<body>
  <h1>Validar contraseña</h1>
  <form>
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" onkeyup="validarContrasena()">
    <span id="error-contrasena"></span>
  </form>

  <script>
    function validarContrasena() {
      const contrasena = document.getElementById('contrasena').value;
      const errorContraseña = document.getElementById('error-contrasena');

      const regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#\$%^&*()_+=-])[A-Za-z0-9!@#\$%^&*()_+=-]{8,}$/;

      if (regex.test(contrasena)) {
        errorContraseña.textContent = '';
      } else {
        errorContraseña.textContent = 'La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un caracter especial.';
      }
    }
  </script>
</body>
</html>
