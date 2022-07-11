<?php 
class signupctrl{
    

    private $name;
    private $email;
    private $dob;
    private $country;
    private $nonNigState;
    private $state;
    private $password;
    
    public function __construct($name, $email, $dob, $country, $nonNigState, $state, $password){
        $this->name = $name;
        $this->email = $email;
        $this->dob = $dob;
        $this->country = $country;
        $this->nonNigState = $nonNigState;
        $this->state = $state;
        $this->name = $password;
    }

    private function emptyInput(){
        //$result;
        if(empty($this-> name) || empty($this-> email) || empty($this-> dob) || empty($this-> country) || empty($this->nonNigState) ||empty($this-> state) || empty($this-> password)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    private function invalidName(){
        //$result;
        if(!preg_match("/^[a-ZA-Z0-9]*$/", $this->name)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }

    private function invalidEmail(){
        //$result;
        if (!filter_var($this ->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    
}

?>

