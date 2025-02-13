<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vinde ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    'super-herói'
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoDeLancamento();