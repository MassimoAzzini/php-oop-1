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
<body class="bg-dark">
  <div class="container my-5">
    <div class="row">

      <?php foreach($productions as $production): ?>
      <div class="col">

      <div class="card bg-black text-white" style="width: 18rem;">
        <img class="" src="img/<?php echo $production->poster->poster_file ?>" class="card-img-top" alt="<?php echo $production->poster->poster_name ?>">
        <div class="card-body">
          <h5 class="card-title fw-bold text-center"> <?php echo $production->title ?></h5>
          <p class="card-text"><strong>Genere: </strong> <?php echo implode(", " , $production->genre) ?></p>
          <p class="card-text"><strong>Cast: </strong> <?php echo implode(", " , $production->cast) ?></p>
          <?php if(get_class($production) == 'Movie'): ?>

            <p class="card-text"><strong>Anno:</strong> <?php echo $production->published_year ?></p>
            <p class="card-text"><strong>Durata:</strong> <?php echo $production->runnning_time ?></p>

          <?php else: ?>

            <p class="card-text"><strong>Anno:</strong> <?php echo $production->getProductionDuration() ?></p>
            <p class="card-text"><strong>Episodi:</strong> <?php echo $production->number_of_episodes ?></p>
            <p class="card-text"><strong>Stagioni:</strong> <?php echo $production->number_of_seasons ?></p>
            

          <?php endif; ?>



        </div>
      </div>

      </div>
      <?php endforeach; ?>

    </div>
  </div>
  
</body>
</html>