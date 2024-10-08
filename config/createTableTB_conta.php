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
  $sql = "create table tb_conta(     
                     id_conta int not null,
                     nm_login varchar(60) not null,
                    id_usuario int not null,
                    nm_senha varchar(60) not null,
                    ds_status varchar(45),
                     constraint pk_conta
                     primary key(id_conta),
                     constraint fk_usuario_conta
                    foreign key(id_usuario)
                    references tb_usuario(id_usuario)) ;";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Tabela Cliente criado com sucesso";
} catch(PDOException $e) {
  echo "Erro: " . $e->getMessage();
}

$conn = null;
?>