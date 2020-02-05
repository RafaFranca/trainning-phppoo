<?php
require 'pessoa.php';

class PessoaJuridica extends Pessoa{ // a classe herda tudo da classe pessoa
    public function __construct($documento) // pegando o valor e colocando  -- 
    {
        // propriedade protected
        $this->documento = $documento; // documento herdou da pessoa
    }

    public function obterId(){
        $this ->id =10;
        return $this->id;

    }
}
?>