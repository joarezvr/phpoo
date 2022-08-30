<?php

class Endereco
{
    private $uf;
    private $cidade;
    private $numero;
    private $bairro;
    private $cep;

    public function __construct($uf, $cidade, $numero, $bairro, $cep)
    {
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function geBairro()
    {
        return $this->bairro;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
}
