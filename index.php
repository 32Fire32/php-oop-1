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
    <tr>
      <th scope="row"><?php echo $indiana_jones->getTitle()?></th>
      <td><?php echo $indiana_jones->getGenre()[0]?> <?php echo $indiana_jones->getGenre()[1]?></td>
      <td><?php echo $indiana_jones->getMovieDirector()?></td>
      <td><?php echo $indiana_jones->getYear()?></td>
      <td><?php echo $indiana_jones->getTotalCashed()?></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $predator2->getTitle()?></th>
      <td><?php echo $predator2->getGenre()[0]?> <?php echo $predator2->getGenre()[1]?></td>
      <td><?php echo $predator2->getMovieDirector()?></td>
      <td><?php echo $predator2->getYear()?></td>
      <td><?php echo $predator2->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $starship_troopers->getTitle()?></th>
      <td><?php echo $starship_troopers->getGenre()[0]?> <?php echo $starship_troopers->getGenre()[1]?></td>
      <td><?php echo $starship_troopers->getMovieDirector()?></td>
      <td><?php echo $starship_troopers->getYear()?></td>
      <td><?php echo $starship_troopers->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $fantozzi->getTitle()?></th>
      <td><?php echo $fantozzi->getGenre()[0]?> <?php echo $fantozzi->getGenre()[1]?></td>
      <td><?php echo $fantozzi->getMovieDirector()?></td>
      <td><?php echo $fantozzi->getYear()?></td>
      <td><?php echo $fantozzi->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $treehundred->getTitle()?></th>
      <td><?php echo $treehundred->getGenre()[0]?> <?php echo $treehundred->getGenre()[1]?></td>
      <td><?php echo $treehundred->getMovieDirector()?></td>
      <td><?php echo $treehundred->getYear()?></td>
      <td><?php echo $treehundred->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $beowulf->getTitle()?></th>
      <td><?php echo $beowulf->getGenre()[0]?> <?php echo $beowulf->getGenre()[1]?></td>
      <td><?php echo $beowulf->getMovieDirector()?></td>
      <td><?php echo $beowulf->getYear()?></td>
      <td><?php echo $beowulf->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $titanic->getTitle()?></th>
      <td><?php echo $titanic->getGenre()[0]?> <?php echo $titanic->getGenre()[1]?></td>
      <td><?php echo $titanic->getMovieDirector()?></td>
      <td><?php echo $titanic->getYear()?></td>
      <td><?php echo $titanic->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $lord_rings->getTitle()?></th>
      <td><?php echo $lord_rings->getGenre()[0]?> <?php echo $lord_rings->getGenre()[1]?></td>
      <td><?php echo $lord_rings->getMovieDirector()?></td>
      <td><?php echo $lord_rings->getYear()?></td>
      <td><?php echo $lord_rings->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $pierino->getTitle()?></th>
      <td><?php echo $pierino->getGenre()[0]?> <?php echo $pierino->getGenre()[1]?></td>
      <td><?php echo $pierino->getMovieDirector()?></td>
      <td><?php echo $pierino->getYear()?></td>
      <td><?php echo $pierino->getTotalCashed()?></td>
    </tr>
    <tr>
    <th scope="row"><?php echo $allenatore->getTitle()?></th>
      <td><?php echo $allenatore->getGenre()[0]?> <?php echo $allenatore->getGenre()[1]?></td>
      <td><?php echo $allenatore->getMovieDirector()?></td>
      <td><?php echo $allenatore->getYear()?></td>
      <td><?php echo $allenatore->getTotalCashed()?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
