<?php
// Program to reverse a number.
$n = 345;
$sum = 0;
echo "Number : $n";
while($n>1){
    $mod = $n % 10;
    $sum = ($sum*10) + $mod;
    $n = $n /10;
}
echo "<br>Reversed number : $sum";
