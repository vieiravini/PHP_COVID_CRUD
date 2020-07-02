<?php

require "class/crud.php";

$crud = new CRUD();
$pessoas = $crud->getAll();