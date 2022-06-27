<?php 
include '../PHPFILES/loginphp.php' ;
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../STYLES/Login.css">
</head>
<body>
    <header class="head">

        <div class="logo">
            lo<span class="style">r</span>e<span class="style">m</span>
        </div>
        <h2>Log in</h2>
        <h4> <?php echo $info ?></h4>
    </header>
    <section>
        <form action="" method="POST">
            <div>
                <label for="email">Email</label>
            </div>
            <div>
                <input class="styleInput" type="email" name="email" id="email" placeholder="Enter email">
            </div>
            <div><?php echo $emailError ?></div>
            <div class="password">
                <label for="password">Password</label>    
            </div>
            <div>
                <input class="styleInput" type="password" name="password" id="password" placeholder="Enter password">
            </div>
            <div><?php echo $passwordError ?></div>
            <div class="alt">
                forgot password?
            </div>
            
            <div>
                <button type="submit" name="login" class="button" >Login</button>
            </div> 
            
            
            <div class="alert">
                <?php   ?>
            </div>
            <div><a href="Register.php">Sign Up</a></div>

             
        </form>
    </section>
    
</body>
</html>
