<?php
//Arrays Syntax Numerical array
$a = array(100,150,"A","ABC",20.02);
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
var_dump($a);
echo "</pre>";
//Accessing array elements
for($i=0;$i<count($a);$i++){
    echo "<br>$a[$i]";
}
foreach ($a as $value) {
    echo "<br>$value";
}
foreach ($a as $key => $value) {
    echo "<br> Key is $key and value is $value";
}
//Associative arrays:
$b = array(
    "A" => "Apple",
    "B" => "Boy",
    10 => 10,
    12 => "Twelve",
    "Thirty" => 30.5
);
echo "<br>$b[10]";
echo "<pre>";
var_dump($b);
echo "</pre>";
foreach ($b as $value) {
    echo "<br>$value";
}
foreach ($b as $key => $value) {
    echo "<br> Key is $key and value is $value";
}
echo "<table border='1'>";
echo "<tr>";
foreach ($b as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";
echo "<tr>";
foreach ($b as $value) {
    echo "<td>$value</td>";
}
echo "</tr>";
echo "</table>";