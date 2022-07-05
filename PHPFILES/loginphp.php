<?php 

include 'db.php' ;



$loginError = '';

if (isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    if (!empty($email) && !empty($password)){
        $password = md5($password);

        $query = "SELECT * FROM users WHERE email = '$email'AND password = '$password' ";
        $result = mysqli_query($conn, $query);
        
    
        if($result && mysqli_num_rows($result) > 0){

            $user_data =  mysqli_fetch_assoc($result);
            
            $_SESSION['user_id'] = $user_data['id'];
            $_SESSION['email'] = $user_data['email'] ;
            header("location:index.php");
            die;
        } else{
            $loginError = 'login details is incorrect';
        }
        
    }
}
?>



<?php   



?> 
