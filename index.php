<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon.png">
    <title>Cartelera</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SensaCine</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">oCine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">SensaCine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CineComedia</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Sliders de fotografia -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/img_1.jpg" class="d-block w-100" alt="1">
    </div>
    <div class="carousel-item">
      <img src="./img/img_2.jpg" class="d-block w-100" alt="2">
    </div>
    <div class="carousel-item">
      <img src="./img/img_3.jpg" class="d-block w-100" alt="3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php
/* Documento XML */
if (file_exists('./xml/cine.xml')) {
    $films = simplexml_load_file('./xml/cine.xml');
} else {
    exit('Error abriendo el fichero.');
}
?>
<!-- Tabla de datos -->
<div class="row-c">
    <div class="column-1">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Película</th>
                    <th scope="col" class="hidden">Descripción</th>
                    <th scope="col">Tema</th>
                </tr>
            </thead>
            <tbody>
<!-- Bucle para mostrar las películas -->
            <?php
                foreach($films->film as $film){
                        echo '<tr>';
                        echo '<td>'.$film->title.'</td>';
                        echo '<td class="hidden">'.$film->description.'</td>';
                        echo '<td>'.$film->description['tema'].'</td>';
                        echo '</tr>';
                    }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>