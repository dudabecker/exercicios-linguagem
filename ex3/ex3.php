<?php

$num1 =  addslashes($_POST['num1']);
$num2 =  addslashes($_POST['num2']);
$operacao =  addslashes($_POST['operacao']);

switch ($operacao) {
    case "soma":
    case "+":
        echo $num1+$num2;
    break;
    
    case "subtração":
    case "-":
        echo $num1-$num2;
    break;

    case "multiplicação":
    case "*":
        echo $num1*$num2;
    break;

    case "divisão":
    case "/":
        echo $num1/$num2;
    break;
}
?>