<?php

    class Conta{ // definição da classe
        private $agencia; 
        private $numero;
        private $saldo;
        private $limite;


    // Realizar Construct chamando os métodos

    public function __construct($agencia, $numero, $saldo, $limite){
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    

    

    


?>