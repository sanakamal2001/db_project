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
$password=$_POST['password'];
$sql="INSERT INTO login (`username`, `password`) VALUES ('$username', '$password');";
if ($con1->query($sql)==true) {
    echo'Record Added';
    
}
$con1->close();
?>
