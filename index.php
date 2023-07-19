<?php

require_once('Funcionario.php');
require_once('Pagamento.php');

$funcionarioDev = new Funcionario('Desenvolvedor', 5000, 120);
$funcionarioRep = new Funcionario('Representante', 3000, 5000);

$pagamentoDev = new Pagamento($funcionarioDev);
$pagamentoRep = new Pagamento($funcionarioRep);

echo "Salário funcionário Dev: {$pagamentoDev->getSalario()}" . PHP_EOL;
echo "Salário funcionário Rep: {$pagamentoRep->getSalario()}" . PHP_EOL;

?>