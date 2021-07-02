<?php
    
    include "config.php";
    $post_id = $_REQUEST['id'];
    $cat_id = $_REQUEST['cat_id'];

    $sql2= "SELECT * FROM post WHERE post_id={$post_id}";
    $result2 = mysqli_query($connection,$sql2) or die('Query Failed : pic');
    $info = mysqli_fetch_assoc($result2);
    unlink('../images/blog/'. $info['post_img']);
    
    $sql = "DELETE FROM post WHERE post_id = {$post_id}";
    $sql1= "UPDATE category SET post=post-1 WHERE category_id={$cat_id}";
    $result = mysqli_query($connection,$sql) or die('Query Unsucessfull');
    $result1 = mysqli_query($connection,$sql1) or die('Query Update Category Unsucessfull');

    if($result && $result1){
        header('location:post.php');
    }



?>