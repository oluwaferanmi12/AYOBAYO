<?php 

include 'db.php' ;



$loginError = '';

if (isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    
    

    if (!empty($email) && !empty($password)){

        $query = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        $dbDetails = mysqli_fetch_assoc($result);

        if($row === 1){
            $emailError = $passwordError = '';

            if($password !== $dbDetails['password']){

                $passwordError = 'incorrect password';

            }else{

                $_SESSION['user_id'] = $dbDetails['id'];
                $_SESSION['email'] = $dbDetails['email'];
                header("location: index.php");

            }

        }else{
            $emailError = 'email has not been registered';
            $passwordError = '';
            
        }
    }else{
        if(empty($email)){
            $emailError = 'email is required';
            
        }else{
            $emailError = '';
        }
        if(empty($password)){
            $password = 'password is required';
            
        }
    }
}else{
    $emailError = $passwordError = '';
}
?>



<?php   



?> 
