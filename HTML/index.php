<?php
include '../PHPFILES/db.php';
session_start();

if(!$_SESSION['user_id']){
    header("location : Login.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Login.php">Log out</a>
    <div>Welcome, <?php echo $_SESSION['email'] ?>  </div>
    <div> kindly take note that your user id is <?php echo $_SESSION['user_id'] ?></div>
</body>
</html>