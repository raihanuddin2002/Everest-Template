<?php include "header.php";
    include 'config.php';
    $cid = $_REQUEST['cat_id'];
    $sql = "SELECT * FROM `category` WHERE category_id = {$cid}" or die('Query Failed!');
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 0){
        while($info = mysqli_fetch_assoc($result)){
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="" method ="POST">
                      <div class="form-group">
                        <input type="hidden" name="cat_id"  class="form-control" 
                        value="<?php echo $info['category_id']; ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $info['category_name']; ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php
                }
            }
            
            // echo $cat_name; die();
            if(isset($_REQUEST['submit'])){
                $cat_id = $_REQUEST['cat_id'];
                $cat_name= $_REQUEST['cat_name'];
                $sql1 = "UPDATE category SET category_name='{$cat_name}' 
                         WHERE category_id= '{$cat_id}'";
                $result1 = mysqli_query($connection,$sql1);

                if($result1){
                    header('location:category.php');
                }
            }
          ?>
<?php include "footer.php"; ?>
