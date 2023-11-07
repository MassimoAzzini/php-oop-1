<?php 

  require_once __DIR__ . '/Model/Production.php';
  require_once __DIR__ . '/Model/Movie.php';
  require_once __DIR__ . '/Model/TVSerie.php';
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

      <?php foreach($productions as $production): ?>
      <div class="col">

      <div class="card" style="width: 18rem;">
        <img src="img/<?php echo $production->poster->poster_file ?>" class="card-img-top" alt="<?php echo $production->poster->poster_name ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $production->title ?></h5>
          <p class="card-text"><strong>Genere: </strong> <?php echo implode(", " , $production->genre) ?></p>
          <p class="card-text"><strong>Cast: </strong> <?php echo implode(", " , $production->cast) ?></p>
          <?php if(get_class($production) == 'Movie'): ?>

            <p class="card-text"><strong>MOVIE</strong></p>

          <?php else: ?>

            <p class="card-text"><strong>TVSerie</strong></p>

          <?php endif; ?>



        </div>
      </div>

      </div>
      <?php endforeach; ?>

    </div>
  </div>
  
</body>
</html>