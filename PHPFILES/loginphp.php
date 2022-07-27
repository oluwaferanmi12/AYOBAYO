<?php 

include 'db.php' ;



$loginError = '';

$emailError = $passwordError = $generalError =  '';
if (isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    
    if (!empty($email) && !empty($password)){
        $password = md5($password);

        $query = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        $dbDetails = mysqli_fetch_assoc($result);

        if($row === 1){         

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
        if(empty($email) && empty($password)){
            $generalError = "All fields are required";
        }
        else if(empty($email)){
            echo "I Got Here";
            $emailError = 'email is required';
            
        }

        else if(empty($password)){
            $passwordError = 'password is required';
            
        }
    }
}
?>



<?php   



?> 
