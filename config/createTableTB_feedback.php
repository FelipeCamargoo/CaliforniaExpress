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
  $sql = "create table tb_feedback(     
                     id_feedback int not null,
                     ds_comentario text(200) not null,
                    id_nota int not null,
                    id_usuario int ,
                     constraint pk_feedback
                     primary key(id_feedback),
                     constraint fk_usuario_feedback
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