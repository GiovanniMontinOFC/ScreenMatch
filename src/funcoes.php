<?php

function incluidoNoPlano(bool $planoPrime, int $anoDeLancamento): bool {
    return $planoPrime || $anoDeLancamento < 2020;
}

function exibeMensagemLancamento (int $ano): void {
    if ($ano < 2022){
        echo "Esse filme é um lançamento!";
    } elseif ($ano > 2020 && $ano <= 2022){
        echo "Esse filme ainda é novo.";
    } else {
        echo "Esse filme não é um lançamento";
    }
}

function criarFilme(string $nome, int $anoDeLancamento, float $nota, string $genero): Filme {

    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoDeLancamento = $anoDeLancamento;
    $filme->nota = $nota;

    return $filme;
}