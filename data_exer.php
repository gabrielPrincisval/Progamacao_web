<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas</title>

</head>
<body>
<?php


print "A data atual do sistema é " . date("d/m/Y");
print"<br>";

print "A data atual mais bonitinha é " . date("d/M/Y");
print"<br>";
print"<br>";


print "Faltam " . (365-date("z")) . " Dias para terminar o ano";








?>






</body>
</html>