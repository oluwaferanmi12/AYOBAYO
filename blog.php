<?php include './PHPFILES/blogpostphp.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./STYLES/blog.css">
</head>
<body>
    <header class="head">

        <div class="logo">
            lo<span class="stylelogo">r</span>e<span class="stylelogo">m</span>
        </div>
    </header>
    <p class="error"><?php echo $generalError?></p>

    <section>
        <h2>Create blog</h2>
    </section>
    <section class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="title">Title</label>
            </div>
            <div>
                <input class="styletitle" type="text" id="title" placeholder="Enter title" name="post_title" value=
                <?php if(isset($_POST['post_title'])){ echo htmlentities( $_POST['post_title']);} ?>  >
            </div>
            <p class="erroralert"><?php echo $postTitleError ?></p>
            <p><?php echo $postTitleLenError ?></p>

            <div>
                <label for="image">Add image</label>
                <p><input class="fileuploadinput" type="file" name="image" onchange="readURL(this)" accept="image/" value=
                <?php if(isset($_FILES['image'])){ echo $_FILES['image']['name'];} ?>   ></p>
            </div> 
            <p><?php echo $imageExisteneceError ?></p>
            <p><?php echo $imageExtensionError ?></p>
            <p><?php echo $imageSizeError ?></p>
            <div>
                <label for="content">Content</label>
            </div>
            <div>
                <textarea class="textarea" name="post_content" id="content" placeholder="Enter your description" cols="30" rows="10" value =
                <?php if(isset($_POST['post_content'])){ echo htmlentities($_POST['post_content']);} ?>  ></textarea>
            </div>
            <p><?php echo $postContentError ?></p>
            <p><?php echo $postContentLenError ?></p>
            
            <div>
                <button name= "submitBlogForm" class="button" type="submit">Submit</button>
            </div>
            
        </form>
    </section>
    
</body>
</html>



