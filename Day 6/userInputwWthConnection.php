<?php
$connection = mysqli_connect("localhost","root","","db_internship");
if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $q = mysqli_query($connection, "insert into tbl_user (user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')")
    or die(mysqli_error($connection));
    if($q){
    echo "<script>alert('Your response has been recorded')</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            Name : <input type="text" name="txt1"/><br><br>
            Gender : <input type="radio" name="txt2" value="Male"/>Male 
            <input type="radio" name="txt2" value="Female"/>Female<br><br>
            Mobile No. : <input type="number" name="txt3"/><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

