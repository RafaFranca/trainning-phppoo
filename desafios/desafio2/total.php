<?php

require 'produto.php';

$produto = new Produto("Bolacha", 5, 2);

$produto->setNome("Yusuke");
$produto->setValor(10);
$produto->setDesconto(4);

echo $produto-> getNome(), " teve um total de ", $produto->getTotal() . PHP_EOL;

?>