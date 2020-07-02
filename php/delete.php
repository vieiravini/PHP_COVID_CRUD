<?php


require "class/crud.php";
$crud = new CRUD();

$crud->delete($_GET['id']);