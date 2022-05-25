<?php


include "connect_crud_usuarios.php";

if(mysqli_connect_error()){

echo "Problemas para conectar no banco. Verifique os dados!";
die();
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "UPDATE usuarios set nome = '$nome', email = '$email', telefone = '$telefone', endereco = '$endereco'
WHERE id = $id";

$conexao->query($sql);
$conexao->close();

echo "Alterado com Sucesso!";

header("refresh:1;url=pesquisa1_2.php");

?>
