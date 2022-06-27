<?php
include 'db.php';
include 'functions.php';


//$name = $email = $dob  = $country = $state = $password = "";
if (isset($_POST['submit'])){

   // $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $password = $_POST['password'];

   // $user_id = mysqli_escape_string($conn, $user_id);
    $name = mysqli_escape_string($conn, $name);
    $email = mysqli_escape_string($conn, $email);
    $dob = mysqli_escape_string($conn, $dob);
    $country = mysqli_escape_string($conn, $country);
    $state = mysqli_escape_string($conn, $state);
    $password = mysqli_escape_string($conn, $password);
    

    if(!empty($name) && !empty($email) && !empty($dob) && !empty($country) && !empty($state) && !empty($password)){
        $user_id = random_num(20); 
        $password = md5($password);
        $query = 'INSERT INTO users (user_id, name, email, dob, country, state, password)';
        $query .=  "VALUES ('$user_id','$name', '$email', '$dob', '$country', '$state', '$password') ";
        $result =  mysqli_query($conn, $query);
        if  (!$result) {
            die ('query failed');
        }
        
        $totalError = 'you have registered successfully';
        $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "";
        header("location: login.php");

    }else{
        
        if (empty($name)){
            $nameError = 'name is required';
        }else{
            $nameError = '';
        }
        if(empty($email)){
            $emailError = 'email is required';
        }else{
            $emailError = '';
        }
        if(empty($dob)){
            $dobError = 'dob is required';
        }else{
            $dobError = '';
        }
        if(empty($country)){
            $countryError = 'country is required';
        }else{
            $countryError = '';
        }
        if(empty($state)){
            $stateError = 'state is required';
        }else{
            $stateError = '';
        }
        if(empty($password)){
            $passwordError = 'password is required';
        }else{
            $passwordError = '';
        }
        $totalError = 'Make sure you input all field';
        
    }
}else{
    $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "";
    $totalError = "";
}
?>