<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "tcc";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
                   $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "create table tb_usuario(     
                     id_usuario int not null,
                     nm_usuario varchar(45) not null,
                    email_usuario varchar(45) not null,
                    senha_usuario varchar(13) not null,
                    constraint pk_usario
                    PRIMARY KEY(id_usuario));";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Tabela Cliente criado com sucesso";
} catch(PDOException $e) {
  echo "Erro: " . $e->getMessage();
}

$conn = null;
?>