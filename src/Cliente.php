<?php

class Cliente extends Pessoa
{
    private $dataNascimento;
    private $renda;

    public function __construct($nome, $idade, $endereco, $dataNascimento, $renda)
    {
        parent::__construct($nome, $idade, $endereco);
        $this->dataNascimento = $dataNascimento;
        $this->renda = $renda;
    }

    public function getDataNascimentoi()
    {
        return $this->dataNascimento;
    }
    
    public function getRenda()
    {
        return $this->renda;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
    
    public function setRenda($renda)
    {
        $this->renda = $renda;
    }

}