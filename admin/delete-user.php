<?php
    include "config.php";
    $user_id = $_REQUEST['id'];
    $sql = "DELETE FROM user WHERE user_id = {$user_id}" or die('Query Unsucessfull');

    $result = mysqli_query($connection,$sql);
    if($result){
        header('location:users.php');
    }
?>