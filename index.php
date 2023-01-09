<?php
class Movie {
    private $title;
    private $genre;
    private $movie_director;
    private $year;
    public $total_cashed;
    public $rating;
    //costruttore
    function __construct($_title, $_genre, $_movie_director, $_year) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->movie_director = $_movie_director;
        $this->year = $_year;
    }
    //gestione dei get e i set per i parametri privati
    public function setTitle($_title){
        $this->title = $_title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setGenre($_genre){
        $this->genre = $_genre;
    }
    public function getGenre(){
        return $this->genre;
    }    
    public function setMovieDirector($_movie_director){
        $this->movie_director = $_movie_director;
    }
    public function getMovieDirector(){
        return $this->movie_director;
    }
    public function setYear($_year){
        $this->year = $_year;
    }
    public function getYear(){
        return $this->year;
    }
    //funzione che mi gestisce valutazione a seconda degli incassi
    public function setTotalCashed($total_cashed){
        if ($total_cashed > 1000000) {
            $this->rating = 'Great Movie!';
        } elseif ($total_cashed < 100000 || $total_cashed > 500000) {
            $this->rating = 'Average Movie';
        } else {
            $this->rating = 'Poor Movie';
        }
    }
    public function getTotalCashed(){
        return $this->rating;
    }
}

$indiana_jones = new Movie('Indiana Jones', 'Avventura', 'Steven Spielberg', '1981');
$predator2 = new Movie('Predator 2', 'Horror/SciFi', 'Stephen Hopkins', '1990');

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
    <h1><?php echo $indiana_jones->getTitle(); ?></h1>
    <h3><?php echo $indiana_jones->getGenre(); ?></h3>
    <h3><?php echo $indiana_jones->getMovieDirector(); ?></h3>
    <h3><?php echo $indiana_jones->getYear(); ?></h3>
    <h3><?php $indiana_jones->setTotalCashed(9250523); echo $indiana_jones->getTotalCashed(); ?></h3>

    <h1><?php echo $predator2->getTitle(); ?></h1>
    <h3><?php echo $predator2->getGenre(); ?></h3>
    <h3><?php echo $predator2->getMovieDirector(); ?></h3>
    <h3><?php echo $predator2->getYear(); ?></h3>
    <h3><?php $predator2->setTotalCashed(899000); echo $predator2->getTotalCashed(); ?></h3>
</body>
</html>
