<?php 


class Endereco{
    private $logradouro;
    private $cidade;
    private $bairro;




    function __construct($logradouro, $cidade, $bairro){
        isset($logradouro) ? $this->logradouro = $logradouro : die;
        isset($cidade) ? $this->cidade = $cidade : die;
        isset($bairro) ? $this->bairro = $bairro : die;
    }


    public function getLogradouro(){
        return $this->logradouro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getBairro(){
        return $this->bairro;
    }
    

}

