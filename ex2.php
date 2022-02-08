<?php

$soma = 0;

for($num=1; $num <=100; $num++){
    $soma += $num;
    $media = $soma/100;
}

echo "A da soma dos números de 1 a 100 é ".$soma." e a média é ".$media;