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

<?php 
// To display image
$query = "SELECT * FROM blogpost";
$results = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($results);
echo $rows['post_image'];

if(mysqli_num_rows($results)> 0){
    while($rows = mysqli_fetch_assoc($results)){
        // ?> 
        <img src="./blogPhotoUpload/<?php //echo $rows['post_image']; ?>" alt="Image will display here">
        <?php
    }
}else{
    echo 'no image found';
}
?>