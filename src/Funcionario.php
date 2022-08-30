<?php

class Funcionario extends Pessoa
{

    private $funcao;
    private $salario;

    public function __construct($nome, $idade, $endereco, $funcao, $salario)
    {
        parent::__construct($nome, $idade, $endereco);
        $this->funcao = $funcao;
        $this->salario = $salario;
    }

    public function getFuncao()
    {
        return $this->funcao;
    }
    
    public function getSalario()
    {
        return $this->salario;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    }
   
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
}
