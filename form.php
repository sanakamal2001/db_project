
<?php 
$flag = false;
if(isset($_POST['proj_name'])){
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
    //echo "success on creating connection";

$proj_name = $_POST['proj_name'];
$proj_id = $_POST['proj_id'];
$client_name = $_POST['client_name'];
$client_region = $_POST['client_region'];
$repname = $_POST['repname'];
$sql = "INSERT INTO `pms`.`projectform` (`proj_name`, `proj_id`, `client_name`, `client_region`, `repname`, `timestamp`) VALUES ('$proj_name', '$proj_id', '$client_name', '$client_region', '$repname', current_timestamp());";

if($con->query($sql) == true){
    //echo "successfully entered";
    $flag = true;
}
$con->close();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
 
</head>
<body>
    <?php
    if($flag==true){
echo"<p>thank you</p>";} 
   ?>
        <div class="container">
            <form action="form.php" method="POST">
                <input class="input"type="text" name="proj_name" placeholder="Enter project name"><br>
                <input type="number" name="proj_id" placeholder="Enter project id"><br>
                <input type="text" name="client_name" placeholder="Enter client name"><br>
                <input type="text" name="client_region" placeholder="Enter client region"><br>
                <input type="text" name="repname" placeholder="Enter representative name"><br>
            <button class="btn">Submit</button>
            </form>
        </div>
<!-- --> 
</body>