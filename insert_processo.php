<?php


include "processo_connect.php";

if(mysqli_connect_error()){

echo "Problemas para conectar no banco. Verifique os dados!";
die();
}

$sql = "INSERT INTO inscritos(nome)" . "VALUES('{$_POST["nome"]}'";

$conexao->query($sql);
$conexao->close();

echo "Cadastrado com sucesso";

header("refresh:1;url=presenca_processo.php");

?>