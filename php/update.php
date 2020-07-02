<?php

require "class/crud.php";
$crud = new CRUD();


if(isset($_POST['id'])){
    require_once "class/Pessoa.php";
    require_once "class/Endereco.php";
    $endereco = new Endereco($_POST['logradouro'], $_POST['cidade'], $_POST['bairro']);
    $pessoa = new Pessoa($_POST['nome'], $_POST['idade'], $endereco);
    $crud->update(trim($_POST['id']), $pessoa);
}else{
    $id =  trim($_GET["id"]);
    $crud->PreUpdate($id);
}

