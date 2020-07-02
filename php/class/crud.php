<?php

require_once "Pessoa.php";
require_once "Endereco.php";

class CRUD{

private $conn;
private $database;
    
    function __construct(){
        require_once "/xampp/htdocs/Covidsimples/php/database/database.php";
        $this->database = new Database();
        $this->conn = $this->database->getConnection();
    }

    public function insert($pessoa){

        $nome = $pessoa->getNome();
        $idade = $pessoa->getIdade();
        $logradouro = $pessoa->getEndereco()->getLogradouro();
        $bairro = $pessoa->getEndereco()->getBairro();
        $cidade = $pessoa->getEndereco()->getCidade();

        $sql = "INSERT INTO pessoas(Nome,idade, logradouro, bairro, cidade) 
            VALUES('$nome', 
            '$idade',
            '$logradouro',
            '$bairro',
            '$cidade')";

        if ($this->conn->query($sql) === TRUE) {
            echo '<script>window.location.href = "/Covidsimples/pages/cadastro.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

    $this->conn->close();
    }

    public function getAll(){
        $sql = "SELECT * FROM pessoas";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $pessoas[] = $row;
            }
            return $pessoas;
                
        } else {
            echo "Sem Resultados";
        }
        $this->conn->close();
    }

    public function findPessoaById($id){
        $sql = "SELECT * FROM pessoas WHERE id='$id'";
        $result = $this->conn->query($sql);

         if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $endereco = new Endereco($row['logradouro'], $row['cidade'], $row['bairro']);
            $pessoa = new Pessoa($row['nome'], $row['idade'], $endereco);
            return $pessoa;
         }
         $this->conn->close();
    }


    public function PreUpdate($id){
        header("Location: ../pages/editar.php?id=" . $id);
    }

    public function update($id, $pessoa){
        $nome = $pessoa->getNome();
        $idade = $pessoa->getIdade();
        $logradouro = $pessoa->getEndereco()->getLogradouro();
        $bairro = $pessoa->getEndereco()->getBairro();
        $cidade = $pessoa->getEndereco()->getCidade();

        $sql = "UPDATE pessoas SET nome = '$nome', idade = '$idade', logradouro = '$logradouro', bairro = '$bairro', cidade = '$cidade' where id = '$id'";

        if ($this->conn->query($sql) === TRUE) {
          echo '<script>window.location.href = "/Covidsimples/pages/listar.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

    $this->conn->close();
    }

    public function delete($id){
        $sql = "DELETE from pessoas where id = '$id'";
        
        if ($this->conn->query($sql) === TRUE) {
            echo '<script>window.location.href = "/Covidsimples/pages/listar.php";</script>';
          } else {
              echo "Error: " . $sql . "<br>" . $this->conn->error;
          }
  
      $this->conn->close();
      }

};