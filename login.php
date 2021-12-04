<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "pms";

$con = mysqli_connect($host,$user,$pass,$dbName);
session_start();
if(mysqli_connect_error($con))
{
    echo "Connection Failed";
}
//echo "connection success";
$username=$_POST['username'];
$password=$_POST['password'];
$error="Incorrect name or password";
// $b = "select * from login where username='$username' AND password='$password'";
$b = " SELECT * FROM `login` WHERE `username` LIKE '$username' AND `password` LIKE '$password' ";

$res = mysqli_query($con,$b);
$row=mysqli_fetch_array($res);

if ($row["username"]=="admin" && $row["password"]=="1234") {
   
    header("Location:http://localhost:100/dbproj/admin.html");
}else if($row["username"] == null && $row["password"]==null)
{
    $_SESSION["error"] = $error;
    header("location: http://localhost:100/dbproj/loginui.php");
}
else if ($row["username"] != "admin" && $row["password"]==$password)
{    
        header("Location:http://localhost:100/dbproj/homepage.html");
}else {    
   
}
$con->close();
?>
