<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas 3 </title>
</head>
<body>
    
<?php

print "Data atual: " . date("d/m/Y");
print "<br>"; "<br>";

$data_futural = strtotime("10 days");
print "<br>";
print "Data atual + 10 dias é igual a " . date("d/m/y", $data_futural);

$data_futural2= strtotime("10 months");
print "<br>";
print"Data atual + 10 meses a " . date("d/m/y", $data_futural2);

$data_futural3 = strtotime("10 years");
print "<br>";
print "Data atual + 10 anos é igual a " . date("d/m/y", $data_futural3);

$data_futural4 = strtotime("10 weeks");
print "<br>";
print "Data atual + 10 semanas é igual a " . date("d/m/Y", $data_futural4);

$data_futural4 = strtotime("-10 weeks");
print "<br>";
print"Data atual -10 semanas atrás é igual a " . date("d/m/Y", $data_futural4);





?>










</body>
</html>