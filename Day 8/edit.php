<?php
$connection = mysqli_connect("localhost","root","","db_internship");
if(!isset($_GET['id'])){
    header("location.userDisplayDta.php");
}
$editid = $_GET['id'];
$q = mysqli_query($connection, "select * from tbl_user where user_id={$editid}") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($q);
if($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $uq = mysqli_query($connection, "update tbl_user set user_name='{$txt1}', user_gender='{$txt2}', user_mobile='{$txt3}' "
    . "where user_id='{$editid}'") or die(mysqli_error($connection));
    if($uq){
        echo "<script>alert('Successfully updated');window.location='userDisplayData.php';</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            Name : <input type="text" name="txt1" value="<?php echo $editdata['user_name'];?>"/><br><br>
            Gender : <input type="radio" <?php if($editdata['user_gender']=="Male"){ echo "checked";}?> name="txt2" value="Male"/>Male 
            <input type="radio" <?php if($editdata['user_gender']=="Female"){ echo "checked";}?> name="txt2" value="Female"/>Female<br><br>
            Mobile No. : <input type="number" name="txt3" value="<?php echo $editdata['user_mobile']?>"/><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

