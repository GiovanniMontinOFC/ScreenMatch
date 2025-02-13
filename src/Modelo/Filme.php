<?php

class Filme {
    private string $nome = 'Nomw padrão';
    private int $anoDeLancamento = 2024;
    private string $genero = 'ação';
    private array $notas = [];

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

    //Métodos de Acessos 

    //Nome
    public function nome(): String 
    {
        return $this->nome;
    }

    public function define_nome(string $nome): void
    {
        $this->nome = $nome;
    }

    //Ano de Lançamento
    public function anoDeLancamento(): int //getter
    {
        return $this->anoDeLancamento;
    }

    public function define_anoDeLancamento(int $anoDeLancamento) : void //setter
    {
        $this->anoDeLancamento = $anoDeLancamento;
    }

    //Genero
    public function genero(): String
    {
        return $this->genero;
    }

    public function define_genero( string $genero): void 
    {
        $this->genero = $genero;
    }

    

}