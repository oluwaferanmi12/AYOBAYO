<?php include_once './PHPFILES/db.php'?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header class="head">
        <div class="container">
            <span class="logo">lu<span class="styleLogo">X</span>e</span>
  
        </div>

        <div>
            <ul class="navbar">
                <li><a href="login.php" class="stylenav">Login</a></li>
                <li><a href="register.php" class="stylenav">Register</a></li>
            </ul>
        </div> 
    </header>
    <section class="backgroundimg">
        <div class="img">
            <h6>Welcome</h6>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam aspernatur aut a iure, suscipit sunt veniam? Accusamus quibusdam consequuntur nisi iste officiis perspiciatis modi architecto iure optio? Voluptatem, itaque quo.</p>
            <div>
                <ul class="CTA">
                    <li><a href="login.php" class="styleCTA">Login</a></li>
                    <li><a href="register.php" class="styleCTA">Register</a></li>
                </ul>
            </div> 

        </div>
        <div>
            <h4>Number of Registered users</h4>
        </div>
    </section>
        <div>
                <h1>Blog cards</h1>
            </div>
            <div class="blogcards">
                <?php
                $selectBlogpostQuery = "SELECT * FROM blogpost ";
                $selectBlogpostQueryResult = mysqli_query($conn, $selectBlogpostQuery); 
                if(mysqli_num_rows($selectBlogpostQueryResult) > 0){
                
                    while($row = mysqli_fetch_assoc($selectBlogpostQueryResult)){
                        $postId = $row['post_id'];
                        $postTitle = $row['post_title'];
                        $postContent = $row['post_content'];
                        $postImage = $row['post_image'];

                        if(strlen($postContent) > 100){
                            $moderateContent = substr($postContent, 0, 100);
                        }
                        ?>
                            <ul>
                                <li class="stylecard"><a href=""></a><img src="./blogPhotoUpload/<?php echo $postImage ?>" alt="" width="50%">
                                    <h3> <?php echo $postTitle ?></h3>
                                    <p style="width: 80%;"> <?php echo $moderateContent ?></p>
                                    <a class="main-blog" href="content.php?id=<?php echo $postId; ?>">continue reading</a>   
                                </li>
                            </ul>
                        </div>    
                        
                        <?php
                    }
                    
                }
                ?>
            </div>    
        </div>   
    <!-- <div>
        <h1>Blog cards</h1>
    </div>
    <div class="blogcards">
        <ul>
            <li class="stylecard"><a href=""></a><img src="./IMAGES/backgr.jpeg" alt="" width="50%">
                <h3>lorem ipsum dolor</h3>
                <p >Lorem ipsum dolor sit amet</p>
                <a class="main-blog" href="content.html">continue reading</a>   
            </li>
        </ul> -->
        <!-- <ul>
            <li class="stylecard"><a href=""></a><img src="./IMAGES/backgr.jpeg" alt="" width="50%">
                <h3>lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet </p>
                <a class="main-blog" href="content.html">continue reading</a>   
   
            </li>
        </ul>
        <ul>
            <li class="stylecard"><a href=""></a><img src="./IMAGES/backgr.jpeg" alt="" width="50%">
                <h3>lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet</p>
                <a class="main-blog" href="content.html">continue reading</a>   
   
            </li>
        </ul>
        <ul>
            <li class="stylecard"><a href=""></a><img src="./IMAGES/backgr.jpeg" alt="" width="50%">
                <h3>lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet</p>
                <a class="main-blog" href="content.html">continue reading</a>   
   
            </li>
        </ul> -->
    </div>
    <section class="team">
      
        <div class="content">
            <div>
                <h2>our team</h2>
            </div>
            <div class="row">
                
                <div class="team-col">
                    <li class="cardimmage">
                        <img src="./IMAGES/team.png" alt="IMAGES">
                        <div>
                           <h5>Nicole Luxe</h5>
                           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid iste quos facere saepe autem quae iusto assumenda repellendus blanditiis natus.</p>
                        </div>
                            

                    </li>
                 
                </div>
                <div class="team-col">
                    <li class="cardimmage">
                        <img src="./IMAGES/team.png" alt="IMAGES">
                        <div>
                           <h5>Nicole Luxe</h5>
                           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid iste quos facere saepe autem quae iusto assumenda repellendus blanditiis natus.</p>
                        </div>
                            

                    </li>
                 
                </div>
                <div class="team-col">
                    <li class="cardimmage">
                        <img src="./IMAGES/team.png" alt="IMAGES">
                        <div>
                           <h5>Nicole Luxe</h5>
                           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid iste quos facere saepe autem quae iusto assumenda repellendus blanditiis natus.</p>
                        </div>
                            

                    </li>
                 
                </div>

            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="content">
            <div class="row">
                <div class="footer-col">
                    <span class="Logo">lu<span class="styleLogo">X</span>e</span>
        
                </div>
                <div class="footer-col">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Accessibiblity</a></li>
                    </ul>
                  
                </div>
                <div class="footer-col">
                    <h4>Socials</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
    
                    </div>

                </div>

            </div>
        </div>
       
        
            

        
    </footer>

</body>
</html>