<?php

#cLASSE 
require 'produto.php';

$p1 = new Produto();
#$p1->nome = "aaaa"; // erro
$p1->setNome("Iphone");
$p1->setValor("700");


//var_dump($p1->nome); // erro
//var_dump($p1->getNome());

$f1 = new Fabricante(); // criando variavel f1 e novo fabricante -- tem uma varivel complexa
$f1->setNome("Apple"); // passando valor para o nome

$p1->setFabricante($f1);
print_r($p1);

//echo "Fabricante: ", $p1->getFabricante()->getNome();
?>