<?php include "header.php"; 
    if($_SESSION['user_role'] == 0){
        include "config.php";
        $post_id = $_REQUEST['id'];
        $sql2 = "SELECT author FROM post WHERE post_id ={$post_id}" or die('Query Failed !');
        $result2 = mysqli_query($connection,$sql2);
        $info2 = mysqli_fetch_assoc($result2);
        if($info2['author'] != $_SESSION['user_id']){
            header("location:post.php");
        }
        
    }

?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
    <?php
        include 'config.php';
        
        $post_id = $_REQUEST['id'];
        $sql = "SELECT * FROM post 
        LEFT JOIN category ON post.category = category.category_id
        LEFT JOIN user ON post.author = user.user_id
        WHERE post.post_id = {$post_id}";

        $result= mysqli_query($connection,$sql) or die('Query Failed');
         if(mysqli_num_rows($result) > 0){
            while($info = mysqli_fetch_assoc($result)){
    ?>
        <!-- Form for show edit-->
        <form action="save-update-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $info['post_id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="post_title"  class="form-control" id="exampleInputUsername" value="<?php echo $info['title']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="postdesc" class="form-control"  required rows="5">
                <?php echo $info['description']; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select name="category" class="form-control">
                    <option disabled selected> Select Category</option>
                    <?php
                    include 'config.php';

                    $sql1 = "SELECT * FROM category"; 
                    $result1 = mysqli_query($connection,$sql1) or die('Query Failed');

                    if(mysqli_num_rows($result1) > 0){
                        while($info1 = mysqli_fetch_assoc($result1)){
                            if($info['category'] == $info1['category_id']){
                                $selected = 'selected';
                            }else{
                                $selected = '';
                            }
                            echo "<option {$selected} value='{$info1['category_id']}'>{$info1['category_name']}</option>";
                        }
                    }
                    ?>
                </select>
                <input type="hidden" name='old_category' value="<?php echo $info['category']; ?>">
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="new_image">
                <img  src="../images/blog/<?php echo $info['post_img']; ?>" height="150px">
                <input type="hidden" name="old-image" value="<?php echo $info['post_img']; ?>">
            </div>
            <input type="submit" name="update_post" class="btn btn-success" value="Update" />
        </form>
        <!-- Form End -->
        <?php 
            }
         }else{
             echo 'Result Not found';
         }
        ?>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
