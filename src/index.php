<?php

include_once 'Pessoa.php';
include_once 'Endereco.php';

$end = new Endereco('DF', 'Brasilia', 'Chacara 19 Lote 08', 'Samambaia Norte', '72.316-094');

$pessoa1 = new Pessoa('joarez', 36, $end);
$pessoa2 = new Pessoa('diana', 38, $end);
$pessoa3 = new Pessoa('joana', 8, $end);
echo '<pre>';
var_dump($pessoa1);
echo '</pre>';
