<?php
require_once __DIR__ . '/Classes/Movie.php';

$indiana_genre = ['Avventura', 'Azione'];
$indiana_jones = new Movie('Indiana Jones', $indiana_genre, 'Steven Spielberg', '1981');
$predator2_genre = ['Horror/SciFi','Azione'];
$predator2 = new Movie('Predator 2', $predator2_genre, 'Stephen Hopkins', '1990');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Titolo: <?php echo $indiana_jones->getTitle(); ?></h1>
    <h3>Genere: <?php echo $indiana_jones->getGenre()[0];?> <?php echo $indiana_jones->getGenre()[1]; ?></h3>
    <h3>Regista: <?php echo $indiana_jones->getMovieDirector(); ?></h3>
    <h3>Anno: <?php echo $indiana_jones->getYear(); ?></h3>
    <h3>Giudizio finale: <?php $indiana_jones->setTotalCashed(9250523); echo $indiana_jones->getTotalCashed(); ?></h3>

    <h1>Titolo: <?php echo $predator2->getTitle(); ?></h1>
    <h3>Genere: <?php echo $predator2->getGenre()[0];?> <?php echo $predator2->getGenre()[1]; ?></h3>
    <h3>Regista: <?php echo $predator2->getMovieDirector(); ?></h3>
    <h3>Anno: <?php echo $predator2->getYear(); ?></h3>
    <h3>Giudizio finale: <?php $predator2->setTotalCashed(899000); echo $predator2->getTotalCashed(); ?></h3>
</body>
</html>
