<?php

include_once 'src/Pessoa.php';
include_once 'src/Endereco.php';
include_once 'src/Cliente.php';
include_once 'src/Funcionario.php';

$end = new Endereco('DF', 'Brasilia', 'Chacara 19 Lote 08', 'Samambaia Norte', '72.316-094');

//$pessoa1 = new Pessoa('joarez', 36, $end);
$cliente1 = new Cliente('diana',38, $end, '11/12/1981', 4000);
$funcionario1 = new Funcionario('lorrane', 18, $end, 'tecnica em enfermagem', 3000);

print_r($cliente1);
echo"<br>";
echo"<br>";
print_r($funcionario1);
echo"<br>";
echo"<br>";

