<?php
include 'config.php';

$old_image = $_POST['old-image'];
   if(isset($_REQUEST['update_post'])){
         if(!empty($_FILES['new_image'])){ 
            $errors = array();

            $file_name = $_FILES['new_image']['name'];
            $file_size = $_FILES['new_image']['size'];
            $file_tmp = $_FILES['new_image']['tmp_name'];
            $file_type = $_FILES['new_image']['type'];
            // $file_ext = strtolower(end(explode('.',$file_name)));
            // $extensions = array('jpeg','jpg','png');

            // if(in_array($file_ext,$extensions) === false){
            //     $errors[] = "This file extension file is not allowed , Please choose a JPG or PNG file";
            // }

            if($file_size > 5242880){
                $errors[] = "File size must be 5mb or lower.";
            }

            if(empty($errors) === true){
                move_uploaded_file($file_tmp,'../images/blog/'.$file_name);
            }else{
                print_r($errors);
                die();
            }
        }
   
    }
    $old_category = $_REQUEST['old_category'];
    $category = $_REQUEST['category'];
    if(!empty($old_image) && !empty($_FILES['new_image'])){
      echo  $query = "UPDATE `post` SET `title`='{$_REQUEST["post_title"]}',`description`='{$_REQUEST["postdesc"]}',`category`='{$_REQUEST["category"]}',`post_img`='{$file_name}' WHERE post_id={$_REQUEST["post_id"]};";
      if($_REQUEST['old_category'] != $_REQUEST['category']){
        $query .= "UPDATE category SET post=post-1 WHERE category_id='{$old_category}';";
        $query .= "UPDATE category SET post=post+1 WHERE category_id='{$category}';";
      }
    }else if(!empty($old_image)){
      echo  $query = "UPDATE `post` SET `title`='{$_REQUEST["post_title"]}',`description`='{$_REQUEST["postdesc"]}',`category`='{$_REQUEST["category"]}',`post_img`='{$old_image}' WHERE $post_id={$_REQUEST["post_id"]};";
      if($_REQUEST['old_category'] != $_REQUEST['category']){
        $query .= "UPDATE category SET post=post-1 WHERE category_id={$old_category};";
        $query .= "UPDATE category SET post=post+1 WHERE category_id={$category};";
      }
    }else if(!empty($_FILES['new_image'])){
        echo  $query = "UPDATE `post` SET `title`='{$_REQUEST["post_title"]}',`description`='{$_REQUEST["postdesc"]}',`category`='{$_REQUEST["category"]}',`post_img`='{$file_name}' WHERE post_id={$_REQUEST["post_id"]};";
        if($_REQUEST['old_category'] != $_REQUEST['category']){
        $query .= "UPDATE category SET post=post-1 WHERE category_id={$old_category};";
        $query .= "UPDATE category SET post=post+1 WHERE category_id={$category};";
        }
    }else{
        echo  $query = "UPDATE `post` SET `title`='{$_REQUEST["post_title"]}',`description`='{$_REQUEST["postdesc"]}',`category`='{$_REQUEST["category"]}' WHERE post_id={$_REQUEST["post_id"]};";
        if($_REQUEST['old_category'] != $_REQUEST['category']){
        $query .= "UPDATE category SET post=post-1 WHERE category_id={$old_category};";
        $query .= "UPDATE category SET post=post+1 WHERE category_id={$category};";
        }
    }
   
    $result = mysqli_multi_query($connection,$query) or die('Query Failed');
    if($result){
        header('location:post.php');
    }
?>
<!-- UPDATE `post` SET `title`='{$_REQUEST["post_title"]}',`description`='{$_REQUEST["postdesc"]}',`category`='{$_REQUEST["category"]}',`post_img`='{$old_image}' WHERE {$_REQUEST["post_id"]} -->

