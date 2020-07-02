<?php


class Database{
    
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname="Covid19";

    public function getConnection(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        if (mysqli_connect_errno()) {
            trigger_error("Problema ao conectar no Banco de Dados.");
        }
        $conn->set_charset("utf8");
        return $conn;
    }
}