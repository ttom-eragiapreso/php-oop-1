<?php

include 'Models/Movie.php';

$data = file_get_contents('db.json');
$data = json_decode($data);

foreach ($data as $film) {
  $movie[$film->title] = new Movie($film->title, $film->year, $film->length);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>Movie Library</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <?php foreach ($movie as $film) :
      ?>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Titolo: <?php echo $film->title ?></h5>
              <h6 class="card-subtitle mb-2 text-muted">Durata: <?php echo $film->length ?></h6>
              <span class="card-text">Description</span>
              <p class="card-text"><?php echo $film->getInfo() ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>