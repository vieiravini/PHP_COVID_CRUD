<?php 

require("class/Endereco.php");
require("class/Pessoa.php");
require("database/database.php");
require("class/crud.php");

$endereco = new Endereco($_POST['logradouro'], $_POST['cidade'], $_POST['bairro']);
$pessoa = new Pessoa($_POST['nome'], $_POST['idade'], $endereco);
$crud = new CRUD();
$crud->insert($pessoa);











