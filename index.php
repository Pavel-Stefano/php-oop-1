<?php

    require_once __DIR__.'/Classes/Movie.php';

    $movies = [
        [
            'titolo' => 'Casablanca',
            'genere' => 'Drammatico',
            'regia' => 'Michael Curtiz',
            'paeseProduzione' => 'Stati Uniti',
            'annoProduzione' => '1942',
            'durata' => '102',
        ],
        [
            'titolo' => 'Taxi Driver',
            'genere' => 'Triller',
            'regia' => 'Martin Scorsese',
            'paeseProduzione' => 'Stati Uniti',
            'annoProduzione' => '1976',
            'durata' => '113',
        ],
        [
            'titolo' => 'Via col Vento',
            'genere' => 'Drammatico',
            'regia' => 'Victor Fleming',
            'paeseProduzione' => 'Stati Uniti',
            'annoProduzione' => '1939',
            'durata' => '238',
        ],
        [
            'titolo' => 'Pulp Fiction',
            'genere' => 'Gangster',
            'regia' => 'Quentin Tarantino',
            'paeseProduzione' => 'Stati Uniti',
            'annoProduzione' => '1994',
            'durata' => '154',
        ],
        [
            'titolo' => 'La dolce vita',
            'genere' => 'Drammatico',
            'regia' => 'Federico Fellini',
            'paeseProduzione' => 'Italia',
            'annoProduzione' => '1960',
            'durata' => '180',
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<h1>Film</h1>
<div class="container">
    <?php
        foreach($movies as $key => $value){ ?>
            <div class="card">
                <?php
                    $movie = new Movie($value['titolo'],$value['genere'],$value['regia'],$value['paeseProduzione'],$value['annoProduzione'],$value['durata']);
                         // var_dump($movie);
                ?>
                <h2>Titolo <br> <?php echo $movie->getTitolo(); ?></h2>
                <h4>Genere <?php echo $movie->getGenere(); ?></h4>
                <h5>Regia <?php echo $movie->getRegia(); ?></h5>
                <p>Paese di Produzione <br> <?php echo $movie->getPaese(); ?></p>
                <p>anno di produzione <br> <?php echo $movie->getannoProd(); ?></p>
                <p>durata <?php echo $movie->getdurata().' '.'minuti'; ?></p>
            </div>

    



    <?php } ?>

</div>

    
</body>
</html>