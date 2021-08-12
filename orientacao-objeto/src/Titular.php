<?php

class Titular
{
    private object $cpf;
    private string $nome;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
    
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

}