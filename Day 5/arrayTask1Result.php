<?php
$arr = array(
    "A" => "Apple",
    "B" => "Banana",
    "C" => "Cat",
    "D" => "Dog",
    "E" => "Elephant",
    "F" => "fox"
);
$key = $_GET['select'];
if(array_key_exists($key, $arr)){
    echo "$arr[$key]";
}

