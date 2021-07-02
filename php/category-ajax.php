<?php 
	$connection = mysqli_connect('localhost', 'root', '','news-site') or die('Connection Failed');
	$sql = "SELECT * FROM category";

	$result = mysqli_query($connection,$sql) or die("Query Failed!");
	$output = "";

	$output .= "<p><a style='color: red;' href='blog.php'> &raquo; Return to see all blogs</a></p>";
	if(mysqli_num_rows($result) > 0){
		$output .= "<ul id='category_wise' class='arrows_list list_style'>";
		while($info = mysqli_fetch_assoc($result)){
			$output .= "<li><a id='{$info['category_id']}' href='#'>{$info['category_name']}({$info['post']})</a></li>";
		}
		$output .= "</ul>";
	}
	echo $output;


 ?>
