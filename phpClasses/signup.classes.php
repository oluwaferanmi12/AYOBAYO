<?php

// class signup extends Dbh{
//     protected function setUser($name, $email, $dob, $country, $nonNigState, $state, $password){
//         $stmt = 'INSERT INTO users (name, email, dob, country, nonNigState, state, password)';
//         $stmt .=  "VALUES ('$name', '$email', '$dob', '$country', '$nonNigState', '$state', '$password') ";
//         $hashpwd = password_hash($password, PASSWORD_DEFAULT);
//         if(!$stmt->execute(array($name, $email, $dob, $country, $nonNigState, $state, $password))){
//             $stmt = null;
//             header("location: ../register.php?error=stmtfailed");
//             exit();
//         }
//         $stmt = null;   

//     protected function checkUser($id, $email){
//         $stmt = $this-> connect()->prepare('SELECT id from users WHERE id = ? OR email = ?;');
    
//         if(!$stmt->execute(array($id, $email))){
//             $stmt = null;
//             header("location: ../register.php?error=stmtfailed");
//             exit();
//         }

//         $resultCheck;
    
//         if($stmt->rowCount() > 0 ){
//             $resultCheck = false;
//         }
//         else{
//             $resultCheck = true;
//         }
        
//         return $resultCheck;
        
        
        
// }

?>


