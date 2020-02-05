<?php

class Fabricante {
    private $nome; // se comporta como uma propriedade

    public function __construct() 
    {        
    }

    public function getNome(){ 
        return $this->nome; // acesso as variaveis dentro da class
    }
    
    public function setNome($nome){ 
        $this->nome = $nome; // o q veio e coloca na variavel nome
    }
}
?>