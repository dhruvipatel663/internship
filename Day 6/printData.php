<?php
$connection = mysqli_connect("localhost","root","","db_internship");
if($_GET){
$fname = $_GET['text1'];
$lname = $_GET['text2'];
$dob = $_GET['text3'];
$age = $_GET['text4'];
$email = $_GET['text5'];
$phone = $_GET['text6'];
$gender = $_GET['r1'];
$bloodgroup = $_GET['bg'];
//$lang = $_GET['check'];
$pin = $_GET['text7'];
$add = $_GET['text8'];
//$str = implode(" ",$lang);
$q = mysqli_query($connection,"insert into tbl_student (st_fname,st_lname,st_dob,st_age,st_email,st_phone,st_gender,st_bloodgroup,st_pin,st_address) "
        . "values ('{$fname}','{$lname}','{$dob}','{$age}','{$email}','{$phone}','{$gender}','{$bloodgroup}','{$pin}','{$add}')") or die(mysqli_error($connection));
if($q){
  echo "<script>alert('Your response has been recorded.')</script>";  
}
}
        /*echo "Information<br>";
echo "First Name : $fname<br>";
echo "Last Name : $lname<br>";
echo "Date of Birth : $dob<br>";
echo "Age : $age<br>";
echo "Email : $email<br>";
echo "Phone number : $phone<br>";
echo "Gender : $gender<br>";
echo "Address : $add";*/


