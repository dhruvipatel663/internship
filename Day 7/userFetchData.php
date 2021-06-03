<?php
$connection = mysqli_connect("localhost","root","","db_internship");
$q = mysqli_query($connection, "select *from tbl_user")or die(mysqli_error($connection));
$row = mysqli_fetch_row($q);//Fetch only one row and returns numerical array of it.
echo "<pre>";
print_r($row);
echo "</pre>";
echo $row[0].$row[1].$row[2].$row[3];

$row = mysqli_fetch_array($q);//Fetch one row of table and returns numerical as well as associative array.
echo "<pre>";
print_r($row);
echo "</pre>";
echo $row[0].$row[1].$row[2].$row[3]."<br>";
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];


