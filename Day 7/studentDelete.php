<?php
$connection = mysqli_connect("localhost","root","","db_internship");
$id = $_GET['id'];
$q = mysqli_query($connection,"update tbl_student set is_delete=1 where st_id='{$id}'") or die(mysqli_error($connection));
if($q){
    echo "<script>alert('Data has been deleted');window.location='studentDisplayData.php';</script>";
}


