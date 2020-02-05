<?php

class Pessoa{

    private $id; // declaração de propriedades 
    protected $documento;
    public $nome;

    public function setId(int $id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function getDocumento(){
        return $this->documento;
    }
}
?>