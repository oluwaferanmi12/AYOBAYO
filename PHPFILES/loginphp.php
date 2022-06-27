<?php 
include 'db.php' ;
include 'functions.php';




if (isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];


    if (!empty($email) && empty(!$password)){

        $email = mysqli_escape_string($conn, $email);
        $password = mysqli_escape_string($conn, $password);
    

        $query = "SELECT * FROM users WHERE email = '$email' limit 1";
        $result = mysqli_query($conn, $query);
        if($result){

            if($result && mysqli_num_rows($result ) > 0 ){
                
                $user_data =  mysqli_fetch_assoc($result);
                
                if($user_data['password']  === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("location: index.php");
                }
            }
        }
            
        
        $info = '';
        $emailError = $passwordError = '';
    }else{
        if(empty($email)){
            $emailError = 'name is required';
        }else{
            $emailError = '';
        }
        if(empty($password)){
            $passwordError = 'email is required';
        }else{
            $passwordError = '';
        }
        $info = 'both field are equired';
    }

}else{
    $emailError = $passwordError = '';
    $info = '';
}

?>
