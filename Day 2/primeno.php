<?php
// Program to check whether a number is prime or not
$n = 20;
$flag = 0;
for($i=2;$i<=$n/2;$i++){
    if($n%$i == 0){
        $flag = 1;
        break;
    }
}
if($n == 1){
    echo "$n is neither prime nor composite number";
}
else{
    if($flag==0){
        echo "$n is a prime number";
    }
    else{
        echo "$n is not a prime number";
    }
}
