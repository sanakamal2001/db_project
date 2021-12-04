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
$sql = "SELECT username,password FROM `login`";
$result =$con1->query($sql);
if ($result->num_rows>0)
{
////output data of each row in Student table
while ($row=$result->fetch_assoc()){
    echo "username:  ". $row["username"]."  password:  " .$row["password"]. "<br>";

}
}else{
    echo "0 results";
}
$con1->close();
?>