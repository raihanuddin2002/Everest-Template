<?php include "header.php";
      session_start();
        if($_SESSION['user_role'] == 0){
        header("location:ajax/index.php");
      } 
    if(isset($_REQUEST['submit'])){
        include "config.php";
        
        $user_id = mysqli_real_escape_string($connection, $_REQUEST['user_id']);
        $fname= mysqli_real_escape_string($connection,$_REQUEST['f_name']);
        $lname =mysqli_real_escape_string($connection,$_REQUEST['l_name']);
        $user_name = mysqli_real_escape_string($connection,$_REQUEST['user_name']);
        $role = mysqli_real_escape_string($connection,$_REQUEST['role']);

        $sql1= "UPDATE user SET first_name = '{$fname}', last_name='{$lname}',  username='{$user_name}', role='{$role}' WHERE user_id= {$user_id}";
        $result1 = mysqli_query($connection,$sql1) or die('Query1 Failed');
        if($result1){
            header('location:users.php');
        }
        
    }

?>

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
              <?php
                include 'config.php';
                $user_id= $_REQUEST['id'];
                $sql = "SELECT * FROM user WHERE user_id={$user_id}";
                $result= mysqli_query($connection,$sql) or die('Query Failed');
                if(mysqli_num_rows($result) > 0){
                    while($info = mysqli_fetch_assoc($result)){
              
              ?>
                  <!-- Form Start -->
                  <form  action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $info['user_id']; ?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $info['first_name']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $info['last_name']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user_name" class="form-control" value="<?php echo $info['username']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role'];?>">
                            <?php 
                                if($info['role'] == 1){
                                    echo '<option value="1" selected>Admin</option>
                                        <option value="0">Normal</option>';
                                }else{
                                    echo '<option value="1">Admin</option>
                                        <option value="0" selected>Normal</option>';
                                }
                            
                            ?>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
                        } // while loop
                     } // if statement
                  ?>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
