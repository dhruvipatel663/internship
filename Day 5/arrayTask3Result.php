<?php
if($_GET){
    $cars = $_GET['cars'];
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    $str = implode(" ",$cars);
    echo $str;   
}

