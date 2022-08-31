<?php
require_once 'Endereco.php';
class Pessoa
{
    private  $nome;
    private  $idade;
    private $endereco;
    private static $contadorPessoa = 0;

    public function __construct($nome, $idade, $endereco)
    {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->validaIdade($idade);
        self::contadorPessoa(self::$contadorPessoa);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public static function setcontadorPessoa($contadorPessoa)
    {
        self::$contadorPessoa = $contadorPessoa;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public static function getcontadorPessoa()
    {
        return self::$contadorPessoa;
    }

    private function validaIdade($idade)
    {
        if ($idade < 0 or $idade >= 120) {
            echo 'Idade invalida';
            exit;
        }
    }

    public static function contadorPessoa($contadorPessoa)
    {
        $contadorPessoa++;
        self::setcontadorPessoa($contadorPessoa);
    }
}