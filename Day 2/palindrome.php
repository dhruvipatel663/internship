<?php
// Program to check whether the number is palindrome or not
$n = 1234321;
$mod = 0;
$sum = 0;
$number = $n;
while ($n > 1) {
    $mod = $n % 10;
    $sum = ($sum * 10) + $mod;
    $n = $n / 10;
}
if($sum == $number){
    echo "$number is a palindrome number";
}
else{
    echo "$number is not a plaindrome number";
}

