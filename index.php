<?php

  include('conexion.php');
     session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <link rel="stylesheet" href="estiloss.css">
    <link rel="stylesheet" href="style.css">
    
    <link rel="shortcut icon" href="Canaima.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>

<header class="header">
        <a href="" class="logo">Intranet</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">

            <li><a href="" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Ingresar</a></li>
        </ul>
    </header>
    
    <div class="slider">
    
        <ul>
            <li>
                <img src="slide/1.png">
            </li>
            <li>
                <img src="https://enupal.com/assets/uploads/14373928_1860047817560068_1790570079_n.jpg">
            </li>
            <li>
                <img src="slide/ro.jpg">
            </li>
            <li>
            <img src="slide/roraima.jpg">
            </li>

        </ul>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./loginsdk.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputUser1">Usuario</label>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUser1">Contraseña</label>
                            <input type="password" class="form-control" aria-describedby="nameHelp" name="pass">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success">Enviar</button>



                    </form>
                </div>
            </div>
        </div>
    </div>






    <!-- Site footer -->






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>