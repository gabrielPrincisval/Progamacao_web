<?php


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST ['num3'];
$calculo = ($num1 + $num2 + $num3)/3;


echo " a média final dos alunos é",number_format($calculo,1) ;