<?php
// Program to find gcd/hcf of two numbers
$n1 = 100;
$n2 = 50;
$gcd = 0;
for($i=1; $i <= $n1 && $i <= $n2; $i++){
    if($n1 % $i == 0 && $n2 % $i == 0){
       $gcd = $i;     
    }
}
echo "GCD of $n1 and $n2 is $gcd";

