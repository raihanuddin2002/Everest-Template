<?php include "header.php"; 
  session_start();
  if($_SESSION['user_role'] == 0){
      header("location:ajax/index.php");
    }
  
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-success" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
<?php 
    if(isset($_REQUEST['save'])){
        include 'config.php';

        $category = $_REQUEST['cat'];
        $sql = "INSERT INTO `category`(`category_name`) VALUES ('{$category}')";
        $result = mysqli_query($connection,$sql) or die('Query Failed');
    }
?>