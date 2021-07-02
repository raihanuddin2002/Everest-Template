<?php 
	$connection = mysqli_connect('localhost', 'root', '','news-site') or die('Connection Failed');
	if(isset($_REQUEST['svalue'])){
        $search_value =$_REQUEST['svalue'];
		$sql = "SELECT * FROM post LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id WHERE title LIKE '%{$search_value}%' or description LIKE '%{$search_value}%' or username LIKE '%{$search_value}%' or category_name LIKE '%{$search_value}%'" or die("SQL Failed");
	}else if(isset($_REQUEST['cat_id'])){
		$cat_id =$_REQUEST['cat_id'];
		$sql = "SELECT * FROM post  LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id WHERE category={$cat_id}" or die("Query Failed");
	}else{
		$sql = "SELECT * FROM post  LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id";
	}
	
	$result = mysqli_query($connection,$sql);
	$total_records = mysqli_num_rows($result);
	$limit = 5;
	$total_page = ceil($total_records / $limit);
	if(isset($_REQUEST['page'])){
		$page = $_REQUEST['page'];
	}else{
		$page = 1;
	}

	$offset = ($page - 1) * $limit; 

	if(isset($_REQUEST['svalue'])){
        $search_value = $_REQUEST['svalue'];
		$sql1 = "SELECT * FROM post LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id WHERE title LIKE '%{$search_value}%' or description LIKE '%{$search_value}%' or username LIKE '%{$search_value}%' or category_name LIKE '%{$search_value}%' ORDER BY post_id DESC";
	}else if(isset($_REQUEST['cat_id'])){
		$cat_id =$_REQUEST['cat_id'];
		$sql1 = "SELECT * FROM post  LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id WHERE category={$cat_id} ORDER BY post_id DESC" or die("Query Failed");
	}else if(isset($_REQUEST['d_id'])){
		$search_value = $_REQUEST['d_id'];
		$sql1 = "SELECT * FROM post LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id WHERE post_date LIKE '%{$search_value}%' ORDER BY post_id DESC";
	}else{
		$sql1 = "SELECT * FROM post  LEFT JOIN category ON post.category = category.category_id
                  LEFT JOIN user ON post.author = user.user_id ORDER BY post_id DESC LIMIT {$offset},{$limit}";
	}
	

	$result1 = mysqli_query($connection,$sql1) or die('Query Failed');
	$output = "";

	if(isset($_REQUEST['svalue']) || isset($_REQUEST['cat_id'])){
		$output .="<h3 class='text-center alert alert-success'>Total {$total_records} records found.</h3>";
	}

	if(mysqli_num_rows($result1) > 0){
		while($info = mysqli_fetch_assoc($result1)){
			$dates = $info['post_date'];
			$create_date = date_create($dates);
			$day = date_format($create_date,'d');
			$month = date_format($create_date,'M');
			$year = date_format($create_date,'Y');
			$des = substr($info['description'], 0, 200);
			$output .= "<div class='blog_medium'>
						<article class='post'>
							<div class='post_date'>
								<span class='day'>{$day}</span>
								<span class='month text-uppercase'>{$month}</span>
							</div>
							<figure class='post_img'>
								<a href='#'>
									<img src='images/blog/{$info['post_img']}' alt='blog post'>
								</a>
							</figure>
							<div class='post_content'>
								<div class='post_meta'>
									<h2>
										<a href='#'>{$info['title']}</a>
									</h2>
									<div class='metaInfo'>
										<span><i class='fa fa-user'></i> By <a href='#'></a> {$info['username']} </span>
										<span><i class='fa fa-comments'></i> <a href='#'>12 Comments</a></span>
										<span><i class='fa fa-tags'></i> <a href='#'> {$info['category_name']}</a></span>
										<span><i class='fa fa-calendar'></i> <a href='#'>{$year}</a></span>
									</div>
								</div>
									<p>{$des}...</p>
									<a class='btn btn-small btn-default read-more' href='single.php?id={$info['post_id']}' target='_blank'>Read More</a>
									
							</div>
						</article></div>";
						
		}// While Loop

		if(isset($_REQUEST['cat_id']) || isset($_REQUEST['svalue'])){
			$output .= "";
		}else{
			// Pagination
			$output .= "<div class='col-lg-12 col-md-12 col-sm-12'>
							<ul class='pagination pull-left mrgt-0'>";
				if($page > 1){
					$dec_id = $page - 1;
				}else{
					$dec_id = $page;
				}
			$output .= "<li><a id='{$dec_id}' href='#'>&laquo;</a></li>";
			for($i=1; $i <= $total_page; $i++) {
				if($page == $i){
					$active = "active";
				}else{
					$active = "";
				}
				$output .= "<li class='{$active}'><a id='{$i}' href='blog.php?page={$i}'>{$i}</a></li>";
			}
				if($total_page > $page){
					$inc_id = $page + 1;
				}else{
					$inc_id = $total_page;
				}
			$output .= "<li><a id='{$inc_id}' href='#'>&raquo;</a></li>
							</ul>
						</div>";
		}
	}else{
		echo "<h1 style='color:red;'>No Record Found!</h1>";
	}
		
		
	echo $output;
?>
