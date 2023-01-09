<?php

$movies_list = array(
    array(
        'obj' => $indiana_jones,
        "title" => "Indiana Jones",
        "genre"=> ['Avventura', 'Azione'],
        "movie_director" => 'Steven Spielberg',
        "year"=> 1981,
    ),
    array(
        'obj' => $predator2,
        "title" => "Predator 2",
        "genre"=> ['Horror/SciFi','Azione'],
        "movie_director" => 'Stephen Hopkins',
        "year"=> 1990,
    ),
    array(
        'obj' => $starship_troopers,
        "title" => "Starship Troopers",
        "genre"=> ['Horror/SciFi','Azione'],
        "movie_director" => 'Paul Verhoeven',
        "year"=> 1997,
    ),
    array(
        'obj' => $fantozzi,
        "title" => "Fantozzi",
        "genre"=> ['Commedia'],
        "movie_director" => 'Luciano Salce',
        "year"=> 1975,
    ),
    array(
        'obj' => $treehundred,
        "title" => "300",
        "genre"=> ['Storico','Azione'],
        "movie_director" => 'Zack Snyder',
        "year"=> 2007,
    ),
    array(
        'obj' => $beowulf,
        "title" => "La Leggenda di Beowulf",
        "genre"=> ['3D','Azione'],
        "movie_director" => 'Robert Zemeckis',
        "year"=> 2007,
    ),
    array(
        'obj' => $titanic,
        "title" => "Titanic",
        "genre"=> ['3D','Azione'],
        "movie_director" => 'James Cameron',
        "year"=> 1998,
    ),
    array(
        'obj' => $lord_rings,
        "title" => "Il Signore degli Anelli",
        "genre"=> ['Avventura','Azione','Epico'],
        "movie_director" => 'Peter Jackson',
        "year"=> 2001,
    ),
    array(
        'obj' => $pierino,
        "title" => "Pierino Contro Tutti",
        "genre"=> ['Comico','Demenziale'],
        "movie_director" => 'Marino Girolami',
        "year"=> 1981,
    ),
    array(
        'obj' => $allenatore,
        "title" => "L'Allenatore nel Pallone",
        "genre"=> ['Comico','Demenziale'],
        "movie_director" => 'Sergio Martino',
        "year"=> 1984,
    )
    );

// for ($i = 0; $i < count($movies_list); $i++){
    $indiana_jones = new Movie($movies_list[0]['title'], $movies_list[0]['genre'], $movies_list[0]['movie_director'], $movies_list[0]['year']);
    $indiana_jones->setTotalCashed(9850000);
    
    $predator2 = new Movie($movies_list[1]['title'], $movies_list[1]['genre'], $movies_list[1]['movie_director'], $movies_list[1]['year']);
    $predator2->setTotalCashed(850000);
    
    $starship_troopers = new Movie($movies_list[2]['title'], $movies_list[2]['genre'], $movies_list[2]['movie_director'], $movies_list[2]['year']);
    $starship_troopers->setTotalCashed(450000);
    
    $fantozzi = new Movie($movies_list[3]['title'], $movies_list[3]['genre'], $movies_list[3]['movie_director'], $movies_list[3]['year']);
    $fantozzi->setTotalCashed(5850000);
    
    $treehundred = new Movie($movies_list[4]['title'], $movies_list[4]['genre'], $movies_list[4]['movie_director'], $movies_list[4]['year']);
    $treehundred->setTotalCashed(1850000);
    
    $beowulf = new Movie($movies_list[5]['title'], $movies_list[5]['genre'], $movies_list[5]['movie_director'], $movies_list[5]['year']);
    $beowulf->setTotalCashed(350000);
    
    $titanic = new Movie($movies_list[6]['title'], $movies_list[6]['genre'], $movies_list[6]['movie_director'], $movies_list[6]['year']);
    $titanic->setTotalCashed(9850000);
    
    $lord_rings = new Movie($movies_list[7]['title'], $movies_list[7]['genre'], $movies_list[7]['movie_director'], $movies_list[7]['year']);
    $lord_rings->setTotalCashed(7850000);
    
    $pierino = new Movie($movies_list[8]['title'], $movies_list[8]['genre'], $movies_list[8]['movie_director'], $movies_list[8]['year']);
    $pierino->setTotalCashed(150000);
    
    $allenatore = new Movie($movies_list[9]['title'], $movies_list[9]['genre'], $movies_list[9]['movie_director'], $movies_list[9]['year']);
    $allenatore->setTotalCashed(350000);
// }


$movies_array = [$indiana_jones, $predator2, $starship_troopers, $fantozzi, $treehundred, $beowulf, $titanic, $lord_rings, $pierino, $allenatore];