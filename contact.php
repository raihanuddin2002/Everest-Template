<!DOCTYPE html>
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
                            <h2>Contact Us</h2>
                            <span class="sub_heading">Contact with me 24/7</span>
                        </div>
						<nav id="breadcrumbs">
							<ul>
								<li>You are here:</li>
								<li><a href="index.php">Home</a></li>
								<li>Contact Us</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class="content contact">
			<div class="container">
				<div class="row sub_content">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="maps">
                            <!-- <div id="page_maps"></div> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d915.4157193136111!2d89.13658549701407!3d23.40041010841119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fee04c7e684a13%3A0x9595ca2c4a4ca429!2sKaliganj!5e0!3m2!1sen!2sbd!4v1609937752922!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>

				<div class="row sub_content">
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="dividerHeading">
							<h4><span>Get in Touch</span></h4>
						</div>
						<p>Vidit nulla errem ea mea. Dolore apeirian insolens mea ut, indoctum consequuntur hasi. No aeque dictas dissenti as tusu, sumo quodsi fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.</p>
							
						<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success!</strong> Your message has been sent to us.
						</div>
						
						<div class="alert alert-error hidden" id="contactError">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error!</strong> There was an error sending your message.
						</div>
						
			<!-- _______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->
						
						<form id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-6 ">
                                        <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" >
                                    </div>
                                    <div class="col-lg-6 ">
                                        <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="submit" type="submit" name='submit' class="btn btn-default btn-lg submit" value="Send Message">
                                </div>
                            </div>
						</form>
							<div id="success"></div>
							<div id="unsuccess"></div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sidebar">
							<div class="widget_info">
								<div class="dividerHeading">
									<h4><span>Contact Info</span></h4>
									</div>
								<p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="widget_info_contact">
									<li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: Kaliganj, Jhenidah, Bangladesh</p></li>
									<li><i class="fa fa-user"></i> <p><strong>Phone</strong>:<a class='phnNum-mailto-link' href="tel:+8801751474424" target="_blank">(+880) 1751474424</a></p></li>
									<li><i class="fa fa-envelope"></i> <p><strong>Email</strong>:<a class="phnNum-mailto-link" href="mailto:raihanuddin2002@gmail.com" target="_blank">raihanuddin2002@gmail.com</a></p></li>
									<li><i class="fa fa-globe"></i> <p><strong>Web</strong>: <a href="#" data-placement="bottom" data-toggle="tooltip" title="www.example.com">www.raihanuddin2002.xyz</a></p></li>
								</ul>
								
							</div>
							
							<div class="widget_social">
								<div class="dividerHeading">
									<h4><span>Get Social</span></h4>
								</div>
								<ul class="widget_social">
									<li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="dribbble" href="#." data-placement="bottom" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
									<li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
									<li><a class="pinterest" href="#." data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a class="instagram" href="#." data-placement="bottom" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a class="youtube" href="#." data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="flickrs" href="#." data-placement="bottom" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a class="rss" href="#." data-placement="bottom" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
	</section>
	<!--end wrapper-->

    <!-- Footer Section Start -->
    <?php require 'footer.php'; ?>
    <!-- Footer Section End -->

    <!-- <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> 
    <script type="text/javascript" src="js/styleswitch.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>

    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/view.contact.js"></script>
    <script type="text/javascript" src="js/jquery.gmap.js"></script>

    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>

	<script>
		$(document).ready(function(){
			$("#submit").on("click",function(e){
				e.preventDefault();
				var name = $("#name").val();
				var email = $("#email").val();
				var subject = $("#subject").val();
				var message = $("#message").val();
				if(name === "" && email === "" && subject === "" && message === ""){
					$("#unsuccess").html("</br><div class='btn-danger text-center p-3'>Fil all input fields</div></br>");
				
				}else if(name === ""){
					$("#unsuccess").html("</br><div class='btn-danger text-center p-3'>Fil all input fields</div></br>");
				}else if(email === ""){
					$("#unsuccess").html("</br><div class='btn-danger text-center p-3'>Fil all input fields</div></br>");
				}else if(subject === ""){
					$("#unsuccess").html("</br><div class='btn-danger text-center p-3'>Fil all input fields</div></br>");
				}else if(message === ""){
					$("#unsuccess").html("</br><div class='btn-danger text-center p-3'>Fil all input fields</div></br>");
				}else{
					$.ajax({
					url:"php/contact-form.php",
					type:"POST",
					data:{cname:name,cemail:email,csubject:subject,cmessage:message},
					success: function(data){
						if (data == 'yes'){
							$("#contactForm").trigger("reset");
							$("#success").html("</br><div class='btn-success text-center p-3'>Message send successful</div></br>");
						}else{
							$("#unsuccess").html("</br><div class='btn-danger text-center p-3'>Message send Unsuccessful</div></br>");
						}
					}
				}) // ajax
				} // if

			});
		});
	</script>
    <!-- Start Style Switcher -->
    <!-- <div class="switcher"></div> -->
    <!-- End Style Switcher -->
</body>
</html>
