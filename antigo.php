<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vinde ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoDeLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}

$notaDoFilme = array_sum($notas) / $quantidadeDeNotas;

echo "Nome do filme:" . $nomeFilme . "\n";
echo "Nota do filme: $notaDoFilme \n";

$planoPrime = true;
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoDeLancamento);

$genero = match($nomeFilme){
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-Heróio",
    "Se beber não case" => "Comédia",
    default => "Genero não encontrado"
};

echo "Genero: $genero\n";
echo "Ano de lançamento $anoDeLancamento\n";

$filme = criarFilme(
    nome: 'Thor: Ragnarok', 
    anoDeLancamento: 2021, 
    nota: 7.6, genero: 'super-herói'
);

exibeMensagemLancamento($anoDeLancamento);

echo $filme->anoDeLancamento;

//manipulando textos no array
sort($notas);
$menorNota = min($notas);
var_dump( $notas);
echo $menorNota;

var_dump($filme->nome);
$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme); //converter me Json
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson); 
//salvando conteudo dentro de um arquivo, dentro do diretório atual o arquivo criado é noemado como filme.json, e por ultimo o que será salvo.

// var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.5,"genero":"super-her\u00f3i"}', true));