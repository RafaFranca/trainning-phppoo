<?php

require 'Entity\produto.php';
require 'Repository\produtoRepository.php';

use Entity\Produto;
use Repository\ProdutoRepository;

$produto = new Produto("Cadeira", "Madeira", "2020-01-01");
$produtoRepository = new ProdutoRepository();

try {
    $sucesso = $produtoRepository->save($produto);    

    if($sucesso){
        echo "Produto salvo com sucesso";
    }

} catch (Exception $exception) {
    echo $exception->getMessage();
}


?>