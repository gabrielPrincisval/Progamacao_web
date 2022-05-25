<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="estilo.css">

</head>
<body>
    
<?php

include "processo_connect.php";

$id = $_GET['cartao_resposta'] ?? '';
$sql = "SELECT * FROM inscritos WHERE id = $cartao_resposta";

$dados = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);




?>

<div class="container">

<form method="POST" action="edit_script.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputEmail3" name="nome">
    </div>
  </div>

  <button type="submit" class="btn btn-primary col-sm-12">Cadastrar</button>
  <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
</form>

</div>
</body>
</html>