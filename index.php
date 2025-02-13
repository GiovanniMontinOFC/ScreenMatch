<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vinde ao ScreenMatch\n";

$filme = new Filme();
$filme->define_anoDeLancamento(2021) ;

/* $filme->nome = 'Thor - Ragnarok';
 $filme->genero = 'super-heroi'; */

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoDeLancamento();