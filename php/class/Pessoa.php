<?php


class Pessoa{
     private $nome;
     private $idade;
     private $endereco;


    function __construct($nome, $idade, $endereco){
        isset($nome) ? $this->nome = $nome : die;
        is_numeric($idade) ? $this->idade = $idade : die;
        isset($endereco) ? $this->endereco = $endereco : die;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    

}