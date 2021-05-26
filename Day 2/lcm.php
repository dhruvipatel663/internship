<?php
// Program to find LCM of two numbers.
$n1 = 72;
$n2 = 120;
$max = ($n1 > $n2)?$n1:$n2;
while(1){
    if($max % $n1 == 0 && $max % $n2 == 0){
        echo "LCM of two numbers: $max";
        break;
    }
    ++$max;
}

