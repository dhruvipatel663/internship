<?php
// Program to find factorial using recursion
function fact($n){
    if($n==1){
        return 1;
    }
    else{
        return $n*fact($n-1);
    }
}
$n = 5;
$factorial = fact($n);
echo "Factorial of $n is $factorial ";

