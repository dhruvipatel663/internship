<?php
//Program to find largest number among three  numbers.
/* Method 1 nested if else
$n1 = 340;
$n2 = 65;
$n3 = 220;
if($n1 >= $n2){
    if($n1 >= $n3){
        echo "$n1 is greater";
    }
    else{
        echo "$n3 is greater";
    }
}
else{
    if($n2 >= $n3){
        echo "$n2 is greater";
    }
    else{
        echo "$n3 is greater";
    }
}*/
// Method 2 if else ladder
$n1 = 60;
$n2 = 43;
$n3 = 40;
if($n1 >= $n2 && $n1 >= $n2){
    echo "$n1 is greater";
}
else if($n2 >= $n1 && $n2 >= $n3){
    echo "$n2 is greater";
}
else{
    echo "$n3 is greater";
}

