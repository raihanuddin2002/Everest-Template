<?php include "header.php"; 
  // if($_SESSION['user_role'] != 0 || $_SESSION['user_role'] != 1){
  //   header("location:index.php");
  // }

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
              <?php 
                include 'config.php';
                
                $limit = 10;
                if(isset($_REQUEST['page'])){
                    $page = $_REQUEST['page'];
                }else{
                    $page = 1;
                }
                $offset = ($page - 1 ) * $limit;
                
                if($_SESSION['user_role'] == 1){
                  $sql = "SELECT * FROM post 
                  LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id
                  ORDER BY post.post_id DESC LIMIT {$offset} , {$limit}";
                }else if($_SESSION['user_role'] == 0){
                  $sql = "SELECT * FROM post 
                  LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id
                  WHERE post.author ={$_SESSION['user_id']}
                  ORDER BY post.post_id DESC LIMIT {$offset} , {$limit}";
                }
               
                $result= mysqli_query($connection,$sql) or die('Query Failed');
                if(mysqli_num_rows($result) > 0){

              ?>
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                      <?php 
                        $serial = $offset + 1;
                        while($info = mysqli_fetch_assoc($result)){
                      ?>
                          <tr>
                              <td class='id'><?php echo $serial; ?></td>
                              <td><?php echo $info['title']; ?></td>
                              <td><?php echo $info['category_name']; ?></td>
                              <td><?php echo $info['post_date']; ?></td>
                              <td><?php echo $info['username']; ?></td>
                              <td class='edit'><a href='update-post.php?id=<?php echo $info['post_id']; ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?id=<?php echo $info['post_id']; ?>&cat_id=<?php echo $info['category_id']; ?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php 
                            $serial++;
                            }
                        ?>
                      </tbody>
                  </table>
                  <?php 
                    }
                  ?>
                   <?php
                    $sql1 = 'SELECT * FROM post';
                    $result1 = mysqli_query($connection,$sql1) or die('Query failed');

                    if(mysqli_num_rows($result1) > 0){
                        $total_records = mysqli_num_rows($result1);
                        $total_page = ceil($total_records / $limit);
                  ?>
                  <ul class='pagination admin-pagination'>
                    <li> <a href="post.php?page=<?php if($page > 1) {echo $page -1;}else{ echo $page; } ?>"> Prev. </a> </li>
                       
                    <?php
                        for($i = 1; $i <= $total_page; $i++){
                    
                    ?>
                      <!-- <li class="active"><a>1</a></li> -->
                      <li><a href="post.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php  } // for loop ?>
                      
                    <li> <a href="post.php?page=<?php if($total_page > $page) {echo $page + 1;}else{ echo $total_page; } ?>"> Next </a> </li>
                       
                  </ul>

                  <?php 
                    } // if 
                  ?>
              </div>
          </div>
      </div>
  </div>
  <script>
    document.querySelector('.delete').addEventListener('click',function(){
        confirm('Are you sure?');
    });
  </script>
<?php include "footer.php"; ?>
