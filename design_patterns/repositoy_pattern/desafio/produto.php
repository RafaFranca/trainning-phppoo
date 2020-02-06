<?php

namespace Entity{

    require 'baseEntity.php';  

    class Produto extends BaseEntity
    {
        public $id;    
        public $nome;
        public $descricao;
        public $log;
        
        public function __construct($nome = null, $descricao = null, $id = 0, $log = null )
        {            
            $this->id = $id;            
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->log = $log;
        }

        public function getProdutoCompleto()
        {
            echo $this->nome . ' ' . $this->descricao;
        }

        public function getLog(){
            return $this->log;
        }
        
        public function setLog($log){
            $this->log = $log;
        }

    }
}
?>