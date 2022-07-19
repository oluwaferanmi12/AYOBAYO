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
    <div><?php echo $generalError?></div>
    <header class="head">

        <div class="logo">
            lo<span class="stylelogo">r</span>e<span class="stylelogo">m</span>
        </div>
    </header>
    <section>
        <h2>Create blog</h2>
    </section>
    <section class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="title">Title</label>
            </div>
            <div>
                <input class="styletitle" type="text" id="title" placeholder="Enter title" name="post_title" >
            </div>
            <h3><?php echo $postTitleError ?></h3>
            <h3><?php echo $postTitleLenError ?></h3>

            <div>
                <label for="image">Add image</label>
            </div> 
            <div>
                <input class="fileuploadinput" type="file" name="image" onchange="readURL(this)" accept="image/">
            </div>
            <h3><?php echo $imageExisteneceError ?></h3>
            <h3><?php echo $imageExtensionError ?></h3>
            <h3><?php echo $imageSizeError ?></h3>
            <div>
                <label for="content">Content</label>
            </div>
            <div>
                <textarea class="styletextarea" name="post_content" id="content" placeholder="Enter your description" cols="30" rows="10"></textarea>
            </div>
            <h3><?php echo $postContentError ?></h3>
            <h3><?php echo $postContentLenError ?></h3>
            
            <div>
                <button name= "submitBlogForm" class="button" type="submit">Submit</button>
            </div>
            
        </form>
    </section>
    
</body>
</html>



