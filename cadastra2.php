<?php


include "conect.php";

if(mysqli_connect_error()){

echo "Problemas para conectar no banco. Verifique os dados!";
die();
}

$sql = "INSERT INTO clientes(nome, email)" . "VALUES('{$_POST["nome"]}','{$_POST["email"]}' )";

$conexao->query($sql);
$conexao->close();

echo "Cadastrado com sucesso";

header("refresh:1;url=cadastrar1.php");

?>
