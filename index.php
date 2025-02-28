<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";


echo "Bem vinde ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);
echo $filme->media() . "\n";
echo $filme->anoDeLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

echo $serie->anoDeLancamento . "\n";
$serie->avalia(8);
echo $serie->media() . "\n";
