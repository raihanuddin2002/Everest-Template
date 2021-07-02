<?php
    $name = $_POST['cname'];
    $email = $_POST['cemail'];
    $subject = $_POST['csubject'];
    $massage = $_POST['cmessage'];
    $connection = mysqli_connect('localhost', 'root', '','news-site') or die('Connection Failed');
    $sql = "INSERT INTO `contact_info`(`name`, `email`, `subject`, `massage`) VALUES ('{$name}','{$email}','{$subject}','{$massage}')" or die("Sql failed");;
    $result = mysqli_query($connection,$sql) or die('Query Failed');

    if($result){
        echo 'yes';
    }else{
        echo 'No';
    }


?>