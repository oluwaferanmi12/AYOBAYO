<?php
define('DB', ['localhost', 'root', '', 'cms']);
$conn = mysqli_connect(DB[0], DB[1], DB[2], DB[3]);
// if(!$conn){
//     echo 'database is not connected';
// }else{
//     echo 'database is connected';
// }
?>
    