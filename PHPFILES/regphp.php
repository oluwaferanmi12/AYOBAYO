<?php
include 'db.php';

echo "Not Working";
if (isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $password = $_POST['password'];
    $lengthOfPassword = strlen($password);
    $email = strtolower($email);

    $name = mysqli_escape_string($conn, $name);
    $email = mysqli_escape_string($conn, $email);
    $dob = mysqli_escape_string($conn, $dob);
    $country = mysqli_escape_string($conn, $country);
    $state = mysqli_escape_string($conn, $state);
    $password = mysqli_escape_string($conn, $password);
    $sameEmailError = '';
    $pinLengthError ='';
    if(!empty($name) && !empty($email) && !empty($dob) && !empty($country) && !empty($state) && !empty($password)){

        
        $password = md5($password);
        $numOFEmail = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email = '$email' "));
        
        

        if($lengthOfPassword < 8){

            $pinLengthError = 'password should be not be less than eight characters';
            
        }elseif($numOFEmail > 0){
            
            $sameEmailError = 'Email already Exist';
            

        
        }else{
            
            $query = 'INSERT INTO users (name, email, dob, country, state, password)';
            $query .=  "VALUES ('$name', '$email', '$dob', '$country', '$state', '$password') ";
            $result =  mysqli_query($conn, $query);
            if  (!$result) {
                die ('query failed');
            
            }
            $totalError = 'you have registered successfully';
            $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "";
            header("location: login.php");
        }
        $pinLengthError ='';
        
        $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "";
        $totalError = "";

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
        $sameEmailError = "";
        
    }
}else{
    $nameError = $emailError = $dobError  = $countryError = $stateError = $passwordError = "" ;
    $totalError = "";
    $sameEmailError = "";
    $pinLengthError ='';
}
?>



<?php 
// if(isset($_POST['submit'])){

//     // grabbinng the data
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $dob = $_POST['dob'];
//     $country = $_POST['country'];
//     $state = $_POST['state'];
//     $password = $_POST['password'];

//     //protecting the inputs
//     $name = mysqli_escape_string($conn, $name);
//     $email = mysqli_escape_string($conn, $email);
//     $dob = mysqli_escape_string($conn, $dob);
//     $country = mysqli_escape_string($conn, $country);
//     $state = mysqli_escape_string($conn, $state);
//     $password = mysqli_escape_string($conn, $password);

    // instantiate sign up control class
    

    // running eerror handlers and user signup


    //going back to front page
//}


?>
