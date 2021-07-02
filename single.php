<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php


?>
<style type="text/css">
       
/* Main Content Styling */
#main-content{
     background: #f1f1f1;
    padding: 30px 0;
    min-height: 750px;
}

#main-content .post-container{
    background-color: #fff;
    padding: 25px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
}

#main-content .post-content{
    border-bottom: 1px solid #d1d1d1;
    padding: 0 0 30px;
    margin-bottom:30px;
}

#main-content .post-content img{
  width: 100%;
}

#main-content .post-content .post-img{
  border: 3px solid #e7e7e7;
  display: block;
  height: 145px;
  overflow: hidden;
  transition: border .3s;
}
#main-content .post-content .post-img:hover{
  border: 3px solid #1e90ff;
}
#main-content .post-content .inner-content{
    /* border: 1px solid #000; */
}

#main-content .post-content h3{
    font-size: 21px;
    line-height: 28px;
    font-weight: 600;
    margin: 0 0 7px;

}
#main-content .post-content h3 a{
    color:#659524;
    transition:all 0.3s;
}
#main-content .post-content h3 a:hover{
    color:#333;
}

#main-content .post-content .post-information span{
    color: #606060;
    font-size: 12px;
    text-transform: capitalize;
    margin: 0 5px 5px 0;
    display: inline-block;
}

#main-content .post-content .post-information i{
    color:  #659524;
    margin-right: 1px;
}

#main-content .post-content .post-information a{
    color: #606060;
    text-decoration: none;
}

#main-content .post-content .post-information a:hover{
    color: #333;
    text-decoration: none;
}

#main-content .post-content p,
#main-content .single-post p{
    color: #666;
    font-size: 14px;
    letter-spacing: 0.5px;
    margin:0 0 10px;
}

#main-content .post-content a.read-more{
    color: #fff;
    background-color: #659524;
    font-size: 12px;
    text-transform: capitalize;
    padding: 3px 8px;
    border-radius: 2px;
    transition: all 0.3s;
}

#main-content .post-content a.read-more:hover{
    color: #fff;
    background-color: #333;
}

#main-content .single-post{
    border: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

#main-content .single-post h3{
    color: #659524;
}

#main-content .single-post .post-information{
    margin: 0 0 10px;
}
#main-content .single-post p{
    text-align: justify;
}

#main-content .single-post img.single-feature-image{
    width: 50%;
    margin: 0 auto 20px;
    display: block;
    border: 3px solid #e7e7e7;
}

</style>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <!-- post-container -->
                    <div class="post-container">
                    <?php
                        $connection = mysqli_connect('localhost', 'root', '','news-site') or die('Connection Failed');
                        
                         $post_id = $_REQUEST['id'];
                         $sql = "SELECT * FROM post 
                         LEFT JOIN category ON post.category = category.category_id
                         LEFT JOIN user ON post.author = user.user_id
                         WHERE post_id={$post_id}";
                        

                         $result= mysqli_query($connection,$sql) or die('Query Failed');
                         if(mysqli_num_rows($result) > 0){  
                             while($info = mysqli_fetch_assoc($result)){
                    ?>
                        <div class="post-content single-post">
                            <h3 style="color: #659524; font-size: 20px;"><?php echo $info['title']; ?></h3>

                            <div class="post-information">
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <?php echo $info['category_name']; ?>
                                </span>
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href='author.php'><a href='author.php'><?php echo $info['username']; ?></a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo $info['post_date']; ?>
                                </span>
                            </div>
                            <img class="single-feature-image" src="images/blog/<?php echo $info['post_img']; ?>" width='800' height='500' alt=""/>

                            <h2 style="text-decoration: underline; padding-bottom: 3px; color: #659524">Description :-</h2>
                            <p class="description">
                            <?php echo $info['description']; ?>
                            </p>
                        </div>
                    </div>
                    <?php 
                            }
                        }else{
                            echo 'No record Found';
                        }
                    ?>
                    <!-- /post-container -->
                </div>
             <!--   // sidebar - right -->
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
