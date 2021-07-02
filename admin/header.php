<?php
// ------------------------- ====== -----------------------------

    session_start();
    if(!isset($_SESSION['username'])){
        header("location:index.php");
    }

   $page_name=basename($_SERVER['PHP_SELF'],".php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Dashboard - <?php echo $page_name; ?></title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="shortcut icon" href="images/green.png" type="image/x-icon">
        <link rel="stylesheet" href="../css1/style.css">
        <style type="text/css">
            .menu_active{
                background: #8CBE45;
                color: white !important;
            }
        </style>
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="images/green.png" ></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-9  col-md-1">
                        <a href="logout.php" class="admin-logout" >logout</a>
                        <p class="btn btn-success"><?php  echo $_SESSION['username']; ?></p>

                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a id="menu_one" href="post.php?id=1">Post</a>
                            </li>
                            <?php 
                                if($_SESSION['user_role'] == 1){

                            ?>
                            <li>
                                <a id="menu_two" href="category.php?id=2">Category</a>
                            </li>
                            <li>
                                <a id="menu_three" href="users.php?id=3">Users</a>
                            </li>
                            <li>
                                <a id="menu_four" href="messege.php?id=4">Messeges</a>
                            </li>
                            <?php   } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="" id="menu_id" value="<?php echo $_REQUEST['id']; ?>">

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                // $("#menu").on("click",function(){
                    var menu_id = $("#menu_id").val();
                    if(menu_id == 1){
                        $("#menu_one").addClass("menu_active");
                    }else if(menu_id == 2){
                        $("#menu_two").addClass("menu_active");
                    }else if(menu_id == 3){
                        $("#menu_three").addClass("menu_active");
                    }else if(menu_id == 4){
                        $("#menu_four").addClass("menu_active");
                    }
                });
            // });
        </script>
        <!-- /Menu Bar -->
