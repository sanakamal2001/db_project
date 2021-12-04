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
$flag1=false;
//echo "connection success";
$sql = "SELECT proj_name,proj_id,client_name from projectform";
$result = $con1->query($sql);
if ($result->num_rows>0)
{
////output data of each row in Student table
while ($row=$result->fetch_assoc()){
    echo "proj_name:  ". $row["proj_name"]."  proj_id:  " .$row["proj_id"]. "  client_name:  ". $row["client_name"]. "<br>";

}
}else{
    echo "0 results";
}

// $username=$_POST['username'];
// $password=$_POST['password'];
// $sql="INSERT INTO login (`username`, `password`) VALUES ('$username', '$password');";
// if ($con1->query($sql)==true) {
//     echo'Record Added';
    
// }
$pswrd=$_POST['pswrd'];
$user=$_POST['user'];
$sql= "UPDATE `login` SET `password` = '$pswrd' WHERE `login`.`username` = '$user';";
if ($con1->query($sql)==true) {
    echo'Record updated';
    
}
$con1->close();
?>
