<?php

$num1 = addslashes($_POST['num1']);
$num2 = addslashes($_POST['num2']);

if($num1==$num2)
    echo "Números iguais";

elseif($num1>$num2)
    echo "Primeiro é maior";

elseif($num1<$num2)
    echo "Segundo é maior";
?>