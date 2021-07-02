<!--start footer-->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>About Me</span></h4>
                    </div>
                    <div class="widget_content">
                        <p>Donec earum rerum hic tenetur ans sapiente delectus, ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores.</p>
                        <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: Kaliganj,jhenidah,Bangladesh</p></li>
                            <li><i class="fa fa-user"></i><a href="tel: +8801751474424"class='phnNum-link'><p><strong>Phone</strong>:(+880) 1751474424</p></a></li><style> .phnNum-link{text-decoration: none; color: white; }.phnNum-link:hover{color: white;} </style>
                            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="mailto:raihanuddin2002@gmail.com">raihanuddin2002@gmail.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <?php 
                    $limit = 3;
                    $offset = 0;
                    $connection = mysqli_connect('localhost', 'root', '','news-site') or die('Connection Failed');
                    $sql = "SELECT * FROM post ORDER BY post_id DESC LIMIT {$offset},{$limit}";

                    $result = mysqli_query($connection,$sql) or die("Query Failed!");
                    if(mysqli_num_rows($result) > 0){
                ?>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span><a style="color: white;" href="blog.php" target="_blank">Recent Posts</a></span></h4>
                    </div>
                    <div class="widget_content">
                      <ul class="links">
                <?php
                        while($info = mysqli_fetch_assoc($result)){
                        $dates = $info['post_date'];
                        $create_date = date_create($dates);
                        $day = date_format($create_date,'d');
                        $month = date_format($create_date,'F');
                        $year = date_format($create_date,'Y');
                        $des = substr($info['title'], 0, 60);
                        

                ?>
                <li><a href="single.php?id=<?php echo $info['post_id']; ?>" target= "_blank"><?php echo $des; ?><span><?php echo $month.' '.$day.', '.$year ?></span></a></li>
                <?php 
                        }
                    echo "</ul>
                    </div>
                </div>";
                    }

                 ?>

                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Flickr Gallery</span></h4>
                    </div>
                    <div class="widget_content">
                        <div class="flickr">
                            <ul id="flickrFeed" class="flickr-feed"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!--end footer-->
	
	<section class="footer_bottom">
		<div class="container">
			<div class="row">
            <div class="col-sm-6">
                <p class="copyright">&copy; Copyright 2020 -21 Raihan Uddin | Powered by  <a href="https://www.yahoobaba.net/" >Yahoo Baba | Author by Raihan</a></p>
            </div>

            <div class="col-sm-6 ">
                <div class="footer_social">
                    <ul class="footbot_social">
                        <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                        <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
		</div>
	</section>
    <input type="hidden" id="menu_id" value="<?php echo $_REQUEST['id']; ?>">
    <input type="hidden" id="did" value="<?php echo $_REQUEST['did']; ?>">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/menu-active.js"></script>
    