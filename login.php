<?php 


session_start();
include './PHPFILES/loginphp.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./STYLES/Login.css">
</head>
<body>
    <header class="head">

        <div class="logo">
            lo<span class="stylelogo">r</span>e<span class="stylelogo">m</span>
        </div>
    </header>
    
    <section>
    <h2>Log in</h2>

    </section>
    <section class="container">
        <form action="" method="POST">
            <div>
                <label for="email">Email</label>
            </div>
            <div>
                <input class="styleInput"  name="email" id="email" placeholder="Enter email">
                <div class="erroralert" ><?php echo $emailError?></div>
            </div>
            
            <div class="password">
                <label for="password">Password</label>    
            </div>
            <div>
                <input class="styleInput" type="password" name="password" id="password" placeholder="Enter password">
                <div class="erroralert"><?php echo $passwordError?></div>
            </div>
            
            
            <div>
                <button type="submit" name="login" class="button" >Login</button>
            </div> 
            <span class="question">Don't have an account?</span>
            <span><a class="redirect" href="register.php">Sign up</a></span>
            <div>

                <?php echo $generalError ?>
            </div>
            
        </form>
    </section>
    
</body>
</html>
