<?php
$host1 = "localhost";
$user1 = "root";
$pass1 = "";
$dbName1 = "pms";
$con1 = mysqli_connect($host1,$user1,$pass1,$dbName1);
if(mysqli_connect_error($con1))
{
    echo "Connection Failed";
}
$username=$_POST['username'];
$sql="DELETE FROM `login` WHERE `login`.`username` = '$username'";
if ($con1->query($sql)==true) {
    echo'Record deleted';
    
}
$con1->close()

?>