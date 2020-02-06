<?php

    require 'carrinho.php';

    $produto1 = new Produtos("Serra Tico-Tico", 350);
    $produto2 = new Produtos("Lixadeira", 200);
    $produto3 = new Produtos("Furadeira", 175;

    $carrinho = new Carrinho();
    $carrinho->adicionarProduto($p1);
    $carrinho->adicionarProduto($p2);
    $carrinho->adicionarProduto($p3);

    $carrinho->exibirTotaisTela();

?>