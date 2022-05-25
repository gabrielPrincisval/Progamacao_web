<?php


include "processo_connect.php";

if(mysqli_connect_error()){

echo "Problemas para conectar no banco. Verifique os dados!";
die();
}

$id = $_POST['cartao_resposta'];
$nome = $_POST['nome'];


$sql = "UPDATE inscritos set nome = '$nome', cartao_resposta = '$cartao_resposta' 
WHERE cartao_resposta = $cartao_resposta";

$conexao->query($sql);
$conexao->close();

echo "Alterado com Sucesso!";

header("refresh:1;url=processo_1.php");

?>
