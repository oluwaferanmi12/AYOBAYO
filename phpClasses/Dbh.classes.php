<?php
class Dbh{
    protected function connect(){
        try{
            $username = 'root';
            $password = '';
            $dbh = new PDO('mysqli:host = localhost; dbname = ayobayo', $username, $password);
            return $dbh;
        }
        catch(PDOException $e){
            print "error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

?>

