<?php
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$num3 = $_GET['n3'];
$num4 = $_GET['n4'];
$num5 = $_GET['n5'];
$arr = compact("num1","num2","num3","num4","num5");
echo "Array is :";
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>Array in Ascending order:";
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
$sum = array_sum($arr);
echo "Sum of elements of an array: $sum";
?>

