<?php
require_once __DIR__ . '/Classes/Movie.php';
require_once __DIR__ . '/Data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Genere</th>
      <th scope="col">Regista</th>
      <th scope="col">Anno</th>
      <th scope="col">Giudizio Finale</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($movies_array as $movie){ ?>
    <tr>
      <th scope="row"><?php echo $movie->getTitle()?></th>
      <td><?php echo $movie->getGenre()[0]?> <?php echo $movie->getGenre()[1]?> <?php echo $movie->getGenre()[2]?></td>
      <td><?php echo $movie->getMovieDirector()?></td>
      <td><?php echo $movie->getYear()?></td>
      <td><?php echo $movie->getTotalCashed()?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>
