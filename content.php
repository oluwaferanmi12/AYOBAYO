<?php include_once './PHPFILES/db.php'?>
<?php  $id = $_GET['id'];?>
<?php 
$singleBlogpostQuery = "SELECT * FROM blogpost WHERE post_id = '$id'";
$singleBlogpostQueryResult = mysqli_query($conn, $singleBlogpostQuery); 
if(mysqli_num_rows($singleBlogpostQueryResult) === 1){

    while($row = mysqli_fetch_assoc($singleBlogpostQueryResult)){
        $postTitle = $row['post_title'];
        $postContent = $row['post_content'];
        $postImage = $row['post_image'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog content</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="content.css">
</head>
<body>
    <header>
        <div class="container">
            <span class="logo">lu<span class="styleLogo">X</span>e</span>

        </div>

    </header>
    <div>
        <div>
            <img src="./blogPhotoUpload/<?php echo $postImage ?>" alt="IMAGES">
        </div>
        <div>
            <h1><?php echo $postTitle ?></h1>
        </div>
        <div>
            <p style="width:50% ;"> <?php echo $postContent  ?></p>
        </div>
        <?php
        ?>
    </div>
        
    <footer>
        <div class="redirect">
            <a href="home.php">Back to Homepage</a>
        </div>
    </footer>

    
</body>
</html>