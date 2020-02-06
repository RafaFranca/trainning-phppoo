<?php

namespace Entity{

    require 'baseEntity.php';  

    class Produto extends BaseEntity
    {
        public $id;    
        public $nome;
        public $descricao;
        public $data;
        
        public function __construct($nome = null, $descricao = null, $data = null, $id = 0 )
        {            
            $this->id = $id;            
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->data = $data;
        }

        public function getProdutoCompleto()
        {
            echo $this->nome . ' ' . $this->descricao;
        }

        public function getData(){
            return $this->data;
        }
        
        public function setLog($data){
            $this->data = $data;
        }

    }
}
?>