<?php
include 'db.php';

if (isset($_POST['Register'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $nonNigState = $_POST['nonNigState'];
    $state = $_POST['state'];
    $password = $_POST['password'];
    $lengthOfPassword = strlen($password);
    $email = strtolower($email);

    $name = mysqli_escape_string($conn, $name);
    $email = mysqli_escape_string($conn, $email);
    $dob = mysqli_escape_string($conn, $dob);
    $country = mysqli_escape_string($conn, $country);
    $nonNigState = mysqli_escape_string($conn, $nonNigState);
    $state = mysqli_escape_string($conn, $state);
    $password = mysqli_escape_string($conn, $password);
    //$sameEmailError = '';
   // $lenPinError = '';
    

    if($state && $nonNigState){
        $newState  = '';
    }
    else{
        $newState = $state ? $state : $nonNigState;
    }

    if(!empty($name) && !empty($email) && !empty($dob) && !empty($country) && !empty($password) && !empty($newState)){
        
        $password = md5($password);
        $numOFEmail = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email = '$email' "));
        
        if($lengthOfPassword < 8 || $numOFEmail > 0){

            $lenPinError = 'password should be not be less than eight characters';
            $sameEmailError = 'email already exist';
            
        }
        else{

            $query = 'INSERT INTO users (name, email, dob, country, state, password)';
            $query .=  "VALUES ('$name', '$email', '$dob', '$country', '$newState', '$password') ";
            $result =  mysqli_query($conn, $query);
            if  (!$result) {
                die ('query failed');
                
                
            }
            $totalError = 'you have registered successfully'; 
            $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "";
            header("location: login.php");
        }
        $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "";

    }else{
        
        if (empty($name)){
            $nameError = 'name is required';
            echo 'name is required';
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
        if(empty($newState)){
            $stateError = 'a state is required';
        }else{
            $stateError = '';
        }
        if(empty($password)){
            $passwordError = 'password is required';
        }else{
            $passwordError = '';
        }
        $sameEmailError = "";
        $lenPinError = '';
    }
}else{
    $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "" ;
    $totalError = "";
    $sameEmailError = "";
    $lenPinError ='';
}

?>
