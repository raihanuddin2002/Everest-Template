<?php 
	$connection = mysqli_connect('localhost', 'root', '','news-site') or die('Connection Failed');
	$sql = "SELECT * FROM post GROUP BY post_date";
	$result = mysqli_query($connection,$sql) or die("Query Failed!");
	$data = mysqli_fetch_assoc($result);
	$dates = $data['post_date'];
	$create_date = date_create($dates);
	$dyear = date_format($create_date,'Y');
	$dmonth = date_format($create_date,'F');
	$output = "";
	
	
	$output .= "<p><a style='color: red;' href='blog.php'> &raquo; Return to see all posts</a></p>";
	if(mysqli_num_rows($result) > 0){
		$output .= "<ul class='archives_list list_style'>";
		while($info = mysqli_fetch_assoc($result)){
			$dates = $info['post_date'];
			$create_date = date_create($dates);
			$year = date_format($create_date,'Y');
			$month = date_format($create_date,'F');
			$month_id = substr($month, 0,3);
    		$output .= "<li><a class='{$month_id},{$year}' href='#'> {$month} {$year}</a></li>";
		}
		$output .= "</ul>";
	}
	echo $output;


 ?>

									