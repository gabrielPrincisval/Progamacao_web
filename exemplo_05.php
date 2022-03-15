<?php


$salario = $_POST['num1'];

$desc = $salario * 0.08;

$sl = $salario - $desc;

echo "O desconto é de $desc <br>";

echo "O Sálario liquido é $sl";