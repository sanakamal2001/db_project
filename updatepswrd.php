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
$pswrd=$_POST['pswrd'];
$user=$_POST['user'];
$sql= "UPDATE `login` SET `password` = '$pswrd' WHERE `login`.`username` = '$user';";
if ($con1->query($sql)==true) {
    echo'Record updated';
    
}
$con1->close();

?>