<?php 


// ===============================================================================
	// header("location:404-page.php");
	$limit = 5;
	$offset = 0;
	$connection = mysqli_connect('localhost', 'root', '','news-site') or die('Connection Failed');
	$sql = "SELECT * FROM post ORDER BY post_id DESC  LIMIT {$offset},{$limit}";
	$result = mysqli_query($connection,$sql) or die('Query Failed');
	$output = "";
	$serial = 0;
	if(mysqli_num_rows($result) > 0){
		$output = "<div>";
		while ($info = mysqli_fetch_assoc($result)){
			$des = substr($info['description'], 0, 100);
			$serial++;
			$output .="<div class='post-images'>
	                        <a href=''>
	                            <img src='images/blog/{$info['post_img']}' width='50' height='50' alt=''/>
	                        </a>
	                    </div>

	                    <div class='post-detail float-left'>
	                        <h5><a href=''>{$serial}.{$info['title']}</a></h5>
	                        <span>
	                            <i class='fa fa-clock-o'>{$info['post_date']}</i>
	                            
	                        </span>
	                        <span>
	                            <i class='fa fa-user'></i>
	                            <a href=''>2 Comments</a>
	                        </span>
	                        <p>{$des}...
	                            <a class='read-more' href='#'>Read more</a>
	                        </p>
	                    </div>
	                    </br>";
		}
		
		$output .= "</div>";

	}
	mysqli_close($connection);
	echo $output;
	 // if($result){
	 // 	header("location:index.php");
	 // }

	//======================================

 ?>