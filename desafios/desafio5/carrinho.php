<?php

require 'produto.php';

class Carrinho{ // chamada da classe
    private $produtos;  // propriedade da classe
    private $totalItens; // propriedade da classe
    private $precoTotal;    // propriedade da classe

    public function __construct($produtos, $totalItens, $precoTotal){
        $this->produtos = $produtos;
        $this->totalItens = $totalItens;
        $this->precoTotal = $precoTotal;
    }

}




?>