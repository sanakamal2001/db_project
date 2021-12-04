<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
    <title>PMS</title>
</head>
<body>
<div class="right">
<form action="login.php" method="POST">

    <div class="row-justify-content-center">
        <input type="text" placeholder="Username" name="username">
    </div>
    <div class="row-justify-content-center">
        <input type="password" placeholder="password" name="password">
    </div>
    <div class="row-justify-content-center">
       <button class="btn">Log In</button>
    </div>
    <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span style='color:red'>$error</span>";
                    }
                ?>  

</form>

</div>
    <!-- <div class="container">
        <form action="login.php" method="POST">
<div class="row justify-content-center">
    <input style="color: black;" type="text" placeholder="Username" name="username">
</div>
<div class="row justify-content-center">
    <input style="color: black;" type="password" placeholder="password" name="password">
</div>
<button class="btn">Log In</button>
</form>
</div> -->
</body> 
</html>
<?php
    unset($_SESSION["error"]);
?>
<!--INSERT INTO `login` (`username`, `password`, `timestamp`) VALUES ('admin', '1234', current_timestamp());-->