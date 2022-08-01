<?php
include 'db.php';

$postTitleError = $postContentError = $generalError= "";
$postContentLenError = $postTitleLenError = '';
$imageExisteneceError = $imageExtensionError = $imageSizeError = '';

if (isset($_POST['submitBlogForm'])){
    echo 'form is submitted';

    $postTitle = $_POST['post_title'];
    $postContent = $_POST['post_content'];  
    
    $postTitle = mysqli_escape_string($conn, $postTitle);
    $postContent = mysqli_escape_string($conn, $postContent);
    
    if(!empty($postTitle) && !empty($postContent)){

        $postTitleLength = strlen($postTitle);
        $postContentLength = strlen($postContent);
        
        if($postTitleLength < 5){

            $postTitleLenError = 'post title should be not be less than five characters';
        
        }elseif($postContentLength < 100){

            $postContentLenError = 'post content should not be less than hundred characters';

        }else{
            if(isset($_FILES['image'])){
                
                $generalError = '';
                $fileName = $_FILES['image']['name'];
                $fileSize = $_FILES['image']['size'];
                $fileTmp = $_FILES['image']['tmp_name'];
                $fileType = $_FILES['image']['type'];

                $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                $extensions = array('jpeg', 'jpg', 'png');

                if(! file_exists($fileTmp)){

                    $imageExisteneceError = 'choose image file to upload';
                }
                elseif(! in_array($fileExt, $extensions)){

                    $imageExtensionError = 'please choose the image which has the as  jpeg, jpg, png';
                }
                elseif($fileSize > 1000000){

                    $imageSizeError = 'sorry, file should not be than 1MB';
                    
                }
                else{
                    move_uploaded_file($fileTmp, "blogPhotoUpload/".$fileName);
                    $insertBlogPostQuery = "INSERT INTO blogpost (post_title,post_image, post_content) VALUES ('$postTitle', '$fileName', '$postContent')"  ;
                    $result = mysqli_query($conn, $insertBlogPostQuery);
                    
                    if  (!$result) {
                        die ('query failed');
                    
                    }
                    $generalError = 'your blog has been uploaded successfully';
                }
            }
        }
    }else{
        if (empty($postTitle)){
            $postTitleError = 'post title is required';
        }
        if(empty($postContent)){
            $postContentError = 'post content is required';
        }
    }
}
?>
