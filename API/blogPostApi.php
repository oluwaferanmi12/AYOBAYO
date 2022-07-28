<?php include '../PHPFILES/db.php' ?>

<?php
$blogPostQuery = "SELECT * FROM blogpost";
$result = mysqli_query($conn, $blogPostQuery);
$response = array();
$i = 0;
if($result){
    header("Content-Type: JSON");

    while($row = mysqli_fetch_assoc($result)){
        $i++;
        
        $response[$i]['post_id'] = $row['post_id'] ;
        $response[$i]['post_title'] = $row['post_title'] ;
        $response[$i]['post_image'] = $row['post_image'] ;
        $response[$i]['post_content'] = $row['post_content'] ;
    
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
    
    echo $i;
}
?>