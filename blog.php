<!-- Head tag -->
<?php require 'head.php'; ?>
 <!-- Head tag -->

<body>
<!--Start Header-->
<?php require 'header.php'; ?>
<!--End Header-->
	
	<!--start wrapper-->
	<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Blog</h2>
                        <span class="sub_heading">Know or Share knowledge</span>
                    </div>
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.php">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<!-- _____________________________________________________ -->
		<section class="content blog">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"  id="blog-medium">
						
							
							
						
					</div>

					<!--Sidebar Widget-->
					<div class="col-xs-12 col-md-4 col-lg-4 col-sm-4">
						<div class="sidebar">
							<div class="widget widget_search">
								<div class="site-search-area">
									<form method="get" id="site-searchform" action="#">
										<div>
											<input class="input-text" name="s" id="s" placeholder="Enter Search keywords..." type="text" />
											<input id="searchsubmit" value="Search" type="disabled" />
										</div>
									</form>
								</div><!-- end site search -->
							</div>
							
							<div class="widget widget_categories">
								<div class="widget_title">
									<h4><span>Categories</span></h4>
								</div>
								<div id="cat_info">
									
								</div>
							</div>
							
							<div class="widget widget_about">
								<div class="widget_title">
									<h4><span>Basic Text Widget</span></h4>
									</div>
								<p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>


                            <div class="Everest-tab sidebar-tab">
                                <ul  class="nav nav-tabs">
                                    <li class="active"><a href="#Popular" data-toggle="tab">Popular</a></li>
                                    <li class=""><a href="#Recent" data-toggle="tab">Recent</a></li>
                                    <li class="last-tab"><a href="#Comment" data-toggle="tab"><i class="fa fa-comments-o"></i></a></li>
                                </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane fade active in" id="Popular">
                                        <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_1.png" alt="" /></a></span>
                                                <a href="#">Publishing packag esanse web page editos</a>
                                                <i>October 09, 2015</i>
                                            </li>
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_2.png" alt="" /></a></span>
                                                <a href="#">Sublishing packag esanse web page editos</a>
                                                <i>October 08, 2015</i>
                                            </li>
                                            <li class="last-tab">
                                                <span><a href="#"><img src="images/content/recent_3.png" alt="" /></a></span>
                                                <a href="#">Mublishing packag esanse web page editos</a>
                                                <i>October 07, 2015</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade post-recent" id="Recent">
                                        
                                    </div>
                                    <div class="tab-pane fade" id="Comment">
                                        <ul class="comments">
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_3.png" alt="#"></a>
                                                <p><strong><a href="#">Prambose</a> <i>says: </i> </strong> Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_1.png" alt="#"></a>
                                                <p><strong><a href="#">Makaroni</a> <i>says: </i> </strong> Tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_2.png" alt="#"></a>
                                                <p><strong><a href="#">Prambanan</a> <i>says: </i> </strong> Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
							
							
							
							<div class="widget widget_archives">
								<div class="widget_title">
									<h4><span>Archives</span></h4>
								</div>
								<div id="arhieve_date">
									
								</div>
							</div>
							
							
						</div>
					</div>
				</div><!--/.row-->
			</div> <!--/.container-->
		</section>
		
	</section>
	<!--end wrapper-->

	 <!-- Footer Section Start -->
	 <?php require 'footer.php'; ?>
 <!-- Footer Section End -->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <!-- <script type="text/javascript" src="js/styleswitch.js"></script> --> <!-- Style Colors Switcher -->
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>



    <script src="js/main.js"></script>


    <script type="text/javascript">
    $(document).ready(function(){
			// _________________________________________________________

			//               ======= Recent Post ======
			// _________________________________________________________
		function load(){
                $.ajax({
                    url : "php/index-ajax.php",
                    type : "POST",
                    success: function(data){
                        $(".post-recent").html(data);
                    }
                })
        }
        $("#recent").on("click",function(){
        	load();
        });
        load();

        	// _________________________________________________________

			//               ======= BLOG Post ======
			// _________________________________________________________
		
				function blogLoad(page){
						$.ajax({
							url : "php/blog-ajax.php",
		                    type : "POST",
		                    data:{page:page},
		                    success: function(data){
		                        $("#blog-medium").html(data);
		                    }
						})
					}
				blogLoad();

		// Pagination code

			$(document).on("click",".pagination a",function(e){
				e.preventDefault();
				var page= $(this).attr("id");
					blogLoad(page);
			});

			// Live Search
			
			$("#s").on("keyup",function(e){
				e.preventDefault();
				var svalue= $("#s").val();
				$.ajax({
					url:"php/blog-ajax.php",
					type:"POST",
					data:{svalue:svalue},
					success: function(data){
							$("#blog-medium").html(data);
					}
				})
			});

			// Category 
			function catLoad(){
				$.ajax({
					url:"php/category-ajax.php",
					type:"POST",
					success: function(data){
						$("#cat_info").html(data);
					}
				})
			}
			catLoad();

			function cLoad(cat_id){
					$.ajax({
						url : "php/blog-ajax.php",
	                    type : "POST",
	                    data:{cat_id:cat_id},
	                    success: function(data){
	                        $("#blog-medium").html(data);
	                    }
					})
				}
			$(document).on("click","#category_wise a",function(e){
				e.preventDefault();
				var cat_id = $(this).attr("id");
				cLoad(cat_id);
			});

			// Archive date
				function dateLoad(){
				$.ajax({
					url:"php/arhieve_date-ajax.php",
					type:"POST",
					success: function(data){
						$("#arhieve_date").html(data);
					}
				})
			}
			dateLoad();

			function dLoad(d_id){
					$.ajax({
						url : "php/blog-ajax.php",
	                    type : "POST",
	                    data:{d_id:d_id},
	                    success: function(data){
	                        $("#blog-medium").html(data);
	                    }
					})
				}
			$(document).on("click","#arhieve_date a",function(e){
				e.preventDefault();
				var d_id = $(this).attr("class");
				dLoad(d_id);
			});




    }); // Jquery

</script>

</body>
</html>
