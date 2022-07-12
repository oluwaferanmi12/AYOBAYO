<?php

class signup extends Dbh{
    protected function checkuser($id, $email){
        $stmt = $this-> connect()-> prepare('SELECT id from users WHERE id = ? OR email = ?;');
        
        $resultCheck;
        if(!$stmt->execute(array($id, $email))){
            $stmt = null;
            header("location: ../register.php?error=stmtfailed");
            exit();
        }

        if($stmt ->rowCount() > 0 ){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;


    }

}
?>
