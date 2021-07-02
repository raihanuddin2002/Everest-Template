<?php include "header.php";  
    if($_SESSION['user_role'] == 0){
    header("location:index.php");
    }
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php
                        include 'config.php';

                        $sql = 'SELECT * FROM category' or die('Query failed');
                        $result = mysqli_query($connection,$sql);
                        if(mysqli_num_rows($result) > 0){
                            $serial = 1;
                            while($info = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td class='id'><?php echo $serial; ?></td>
                            <td><?php echo $info['category_name']; ?></td>
                            <td><?php echo $info['post']; ?></td>
                            <td class='edit'><a href='update-category.php?cat_id=<?php echo $info['category_id']; ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                    <?php 
                        $serial++;
                            }
                        }
                    ?>
                </table>
                <?php
                    $limit = 10;
                    if(isset($_REQUEST['page'])){
                        $page = $_REQUEST['page'];
                    }else{
                        $page = 1;
                    }
                    $offset = ($page - 1 ) * $limit;
                    $sql1 = 'SELECT * FROM post';
                    $result1 = mysqli_query($connection,$sql1) or die('Query failed');

                    if(mysqli_num_rows($result1) > 0){
                        $total_records = mysqli_num_rows($result1);
                        $total_page = ceil($total_records / $limit);
                  ?>
                  <ul class='pagination admin-pagination'>
                    <li> <a href="category.php?page=<?php if($page > 1) {echo $page -1;}else{ echo $page; } ?>"> Prev. </a> </li>
                       
                    <?php
                        for($i = 1; $i <= $total_page; $i++){
                    
                    ?>
                      <!-- <li class="active"><a>1</a></li> -->
                      <li><a href="category.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php  } // for loop ?>
                      
                    <li> <a href="category.php?page=<?php if($total_page > $page) {echo $page + 1;}else{ echo $total_page; } ?>"> Next </a> </li>
                       
                  </ul>
                  <?php 
                    } // if 
                  ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
