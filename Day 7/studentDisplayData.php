<?php
$connection = mysqli_connect("localhost","root","","db_internship");
$q = mysqli_query($connection,"select *from tbl_student") or die(mysqli_error($connection));
echo "<table border='1' style='border-collapse:collapse; width:100%; height:500px;'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Date of Birth</th>";
echo "<th>Age</th>";
echo "<th>Email</th>";
echo "<th>Phone No.</th>";
echo "<th>Gender</th>";
echo "<th>Blood Group</th>";
echo "<th>Pin Code</th>";
echo "<th>Address</th>";
echo "<th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_fname']}</td>";
    echo "<td>{$row['st_lname']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_age']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_phone']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_bloodgroup']}</td>";
    echo "<td>{$row['st_pin']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td><a href='studentDelete.php?id={$row['st_id']}'>Delete</td>";
    echo "</tr>";
    
    
}
echo "</table>";
echo "<a href='registrationform.php'>Add Data</a>";
