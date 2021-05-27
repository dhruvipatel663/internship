<?php
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];
$s5 = $_POST['s5'];
$total = $s1 + $s2 + $s3 + $s4 + $s5;
$perc = $total / 5;
if($perc > 90 && $perc <= 100){
    echo "<h2 align='center'>Passed with Distinction</h2>";
}
else if($perc > 70 && $perc <= 90){
    echo "<h2 align='center'>Passed with First class</h2>";
}
else if($perc > 50 && $perc <= 70){
    echo "<h2 align='center'>Passed with Second class</h2>";
}
else if($perc > 30 && $perc <= 50){
    echo "<h2 align='center'>Passed with Third class</h2>";
}
else{
    echo "<h2 align='center'>Failed</h2>";
}


