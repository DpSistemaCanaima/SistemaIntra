<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Inicio de sesion</title>
 <link rel="stylesheet" href="c.css"/>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
 </script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
  

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h2>Intranet</h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
         
          <li class="nav-item">
            
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="button"  class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ingresar</a></li>
        </form>
      </div>
    </div>
  </nav>
     
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/46/1c/a2/angel-falls-tour.jpg?w=700&h=-1&s=1 "  class="img" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i0.wp.com/tuplanetavital.org/wp-content/uploads/2016/02/4arianna.jpg?resize=960%2C960" class="img"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.lavoz.com.ar/sites/default/files/file_attachments/nota_periodistica/usar_Olimpo_1_1601316058.jpg" class="img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
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




 


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>


