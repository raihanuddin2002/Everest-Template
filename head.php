<?php 
    $page_name=basename($_SERVER['PHP_SELF'],".php");
 ?>
<!DOCTYPE html>
<html lang="en">
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php 
             // $title = "";
                if(isset($_REQUEST['id'])){
                    $post_id = $_REQUEST['id'];
                    $connection = mysqli_connect('localhost', 'root', '','news-site');
                    $sql = "SELECT title FROM post WHERE post_id={$post_id}";
                    $result = mysqli_query($connection,$sql);

                    if(mysqli_num_rows($result) > 0){
                        while ($info = mysqli_fetch_assoc($result)) {
                            // code..
                            $title = $info['title'] ;
                            $post_title = substr($title, 0, 20);
                            echo $post_title.' - '.$page_name." page";
                        }

                    }else{
                        echo "Raihan Uddin - ".$page_name." page"; 
                    }
                }else{
                  echo "Raihan Uddin - ".$page_name." page";
                }
            ?> 
    </title>
    
    <meta name="description" content="">
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/Logo/green.png" type="image/x-icon">
    <style type="text/css">
        .drop-act{
            color: #8CBE45 !important;
        }
    </style>
</head>
<body>
    
</body>
</html>