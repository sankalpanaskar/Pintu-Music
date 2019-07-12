<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Singer</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/cue.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/mediaelementplayer-legacy.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image fa-spin"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/singer/">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<?php include 'header_main.php'; ?>
			<section class="page_breadcrumbs ls section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-8 text-center text-md-left">
							<h2 class="small highlight">Contact 2</h2>
						</div>
						<div class="col-md-4 text-center text-md-right">
							<ol class="breadcrumb greylinks">
								<li> <a href="index.html">
							Home
						</a> </li>
								<li> <a href="#">Pages</a> </li>
								<li class="active">Contact 2</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ds ms section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<section id="map" class="ls ms" data-address="Terracina, LT, Italia">
								<!-- marker description and marker icon goes here -->
								<div class="map_marker_description">
									<h3>Map Title</h3>
									<p>Map description text</p>
									<!-- <img class="map_marker_icon" src="images/map_marker_icon.png" alt=""> --></div>
							</section>
						</div>
					</div>
					<div class="row topmargin_40">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal"> <i class="rt-icon2-phone5"></i> </div>
								<p> <span class="grey">Phone:</span> +12 345 678 9123<br> <span class="grey">Fax:</span> +12 345 678 9123 </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal"> <i class="rt-icon2-location2"></i> </div>
								<p> PO Box 54378<br> 4321 Your Address,<br> Your City, Your Country </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal"> <i class="rt-icon2-mail"></i> </div>
								<p>nsuparna@yahoo.com</p>
							</div>
						</div>
					</div>
					<div class="row topmargin_40">
						<div class="col-sm-12 to_animate">
							<form class="contact-form columns_padding_5" method="post" action="http://webdesign-finder.com/html/singer/">
								<div class="row">
									<div class="col-sm-6">
										<p class="form-group"> <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">											</p>
										<p class="form-group"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">											</p>
										<p class="form-group"> <label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-flag highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">											</p>
									</div>
									<div class="col-sm-6">
										<p class="contact-form-message form-group"> <label for="message">Message</label> <i class="fa fa-comment highlight" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<p class="contact-form-submit text-center topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button with_min_width color1">Send Message</button> </p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<footer class="page_footer ds section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-4 text-center">
							<div class="widget widget_text">
								<h4 class="widget-title with_line"> My Contacts </h4>
								<div>
									<div class="media small-media inline-block">
										<div class="media-left"> <i class="fa fa-map-marker highlight" aria-hidden="true"></i> </div>
										<div class="media-body"> 140 Horizon Circle, New York, California </div>
									</div><br>
									<div class="media small-media inline-block">
										<div class="media-left"> <i class="fa fa-phone highlight" aria-hidden="true"></i> </div>
										<div class="media-body"> 1-888-652-2588 </div>
									</div><br>
									<div class="media small-media inline-block">
										<div class="media-left"> <i class="fa fa-pencil highlight" aria-hidden="true"></i> </div>
										<div class="media-body"> rachel_fan@example.com </div>
									</div><br>
									<div class="media small-media greylinks inline-block">
										<div class="media-left"> <i class="fa fa-internet-explorer highlight" aria-hidden="true"></i> </div>
										<div class="media-body"> <a href="#">https://www.rachelsalverz.com</a> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 text-center">
							<div class="widget widget_mailchimp">
								<h4 class="widget-title with_line">My Newsletter</h4>
								<form class="signup" action="http://webdesign-finder.com/html/singer/" method="get">
									<p class="bottommargin_20">Subscribe to our mailing list to receive new updates and special offers:</p>
									<div class="form-group-wrap">
										<div class="form-group"> <label for="mailchimp" class="sr-only">Enter your email here</label> <input name="email" type="email" id="mailchimp" class="mailchimp_email form-control" placeholder="Your Email Address*"> </div> <button type="submit" class="theme_button color1 no_bg_button">Subscribe</button>										</div>
									<div class="response"></div>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 text-center">
							<div class="widget widget_recent_entries">
								<h4 class="widget-title with_line">Recent Posts</h4>
								<ul class="greylinks">
									<li>
										<p class="bottommargin_0"> <a href="blog-single-left.html">Rachel Featured As One Of TIME's Women</a> </p> <span class="entry-date small-text highlight">
								<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
									April 04, 2017
								</time>
							</span> </li>
									<li>
										<p class="bottommargin_0"> <a href="blog-single-left.html">Rachel Covers Business Of Fashion's Print Edition</a> </p> <span class="entry-date small-text highlight">
								<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
									March 26, 2017
								</time>
							</span> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<section class="ds ms page_copyright section_padding_top_40 section_padding_bottom_40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p>&copy; Copyright 2017. All Rights Reserved.</p>
							<div> <a class="social-icon color-bg-icon round-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon color-bg-icon round-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon color-bg-icon round-icon socicon-google"
								    href="#" title="Google"></a> </div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>


<!-- Mirrored from webdesign-finder.com/html/singer/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jun 2018 06:07:16 GMT -->
</html>
