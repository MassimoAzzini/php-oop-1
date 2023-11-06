<?php 

  require_once __DIR__ . '/Model/Movie.php';
  require_once __DIR__ . '/Model/Poster.php';
  require_once __DIR__ . '/db/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>

  <title>PHP-OOP-1</title>
</head>
<body>
  <div class="container my-5">
    <div class="row">

      <?php foreach($movies as $movie): ?>
      <div class="col">

      <div class="card" style="width: 18rem;">
        <img src="img/<?php echo $movie->movie_poster->poster_file ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->title ?></h5>
          <p class="card-text"><strong>Genere: </strong> <?php echo implode(", " , $movie->genre) ?></p>
          <p class="card-text"><strong>Cast: </strong> <?php echo implode(", " , $movie->cast) ?></p>
        </div>
      </div>

      </div>
      <?php endforeach; ?>

    </div>
  </div>
  
</body>
</html>