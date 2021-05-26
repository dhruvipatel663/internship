<?php
$n = 10;
$first = 0;
$second = 1;
$third = $first + $second;
echo "Fibonacci series : $first  $second";
for($i=1;$i<=$n;$i++){
    echo " $third";
    $first = $second;
    $second = $third;
    $third = $first + $second;
}

