<?php

class Filme {
    private array $notas;

    public function __construct(
        private string $nome,
        private int $anoDeLancamento,
        private string $genero
    ) {
        $this->notas = [];
    }

    public function avalia(float $nota): void 
    {
       $this->notas[] = $nota;
    }

    public function media(): float 
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    //Métodos de Acessos - getters

    public function nome(): String 
    {
        return $this->nome;
    }


    public function anoDeLancamento(): int 
    {
        return $this->anoDeLancamento;
    }

    public function genero(): String
    {
        return $this->genero;
    }

}