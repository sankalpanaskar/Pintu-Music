<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Suparna Biswas</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animations.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/cue.css">
	<link rel="stylesheet" href="assets/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="assets/css/mediaelementplayer-legacy.css">
	<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />

	<style media="screen">
		.vertical-item.big-padding .item-content{
			padding:25px !important;
			height: 155px !important;
		}
		.entry-header{
			margin-bottom:5px !important;
		}
		.pp_expand{
			display: none !important;
		}
			.save_wait_anim {
				position: fixed;
				left: 0px;
				top: 0px;
				width: 100%;
				height: 100%;
				z-index: 9999;
				opacity: 0.7;
				background: url("assets/images/loading.gif") center no-repeat #fbfbfb;
		}
	</style>
</head>

<body>
	<div class="preloader">
		<div class="preloader_image fa-spin"></div>
	</div>
<div id="loader"></div>
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<?php include 'header.php'; ?>
			<section class="intro_section page_mainslider ds" id="home">
				<div class="flexslider" data-dots="true" data-nav="te">
					<ul class="slides">
						<?php
	          //$teachers = $this->db->get('teacher')->result_array();
	          if($slider!=null){
	          foreach($slider as $sl){
            ?>
						<li>
							<img src="assets/images/slider/<?php echo $sl->image; ?>" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInUp">
													<h2 style="font-size:90px;">
														<span class="small"><?php echo $sl->text1; ?> </span>
														<?php echo $sl->text2; ?>
													</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInUp">
													<p><?php echo $sl->description; ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					<?php }} ?>

					</ul>
				</div>
				<!-- eof flexslider -->
			</section>
			<section id="about" class="ds ms page_about parallax section_padding_top_130 section_padding_bottom_75 table_section table_section_md columns_margin_bottom_30">
				<div class="container">
					<div class="row bio">
						<div class="col-md-6 text-center">
							<div class="with_frame_image">
								<img src="assets/images/<?php echo $bio[0]->image; ?>" alt="" class="rounded">
							</div>
						</div>
						<div class="col-md-6">
							<h2 class="section_header with_line"><?php echo $bio[0]->title; ?></h2>
							<?php echo $bio[0]->description; ?>
						</div>
					</div>
					<div class="row bio" style="margin-top:10px;">
						<div class="col-md-12">


							<div class="content-justify vertical-center content-margins topmargin_25">
								<div>
									<h3 class="highlight bottommargin_0">Suparna Biswas</h3>

								</div>
								<img src="assets/images/signature.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="events" class="ds ms section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_line">Upcoming Events</h2>
							<div class="owl-carousel topmargin_60" data-dots="false" data-nav="true" data-responsive-lg="3">
								<?php
			          if($event!=null){
			          foreach($event as $ev){
		            ?>
								<div class="vertical-item content-absolute hover-entry-content">
									<div class="item-media mutted-media ds">
										<img src="assets/images/events/<?php echo $ev->event_img; ?>" alt="Size : 345 x 560">
									</div>
									<div class="item-content cs">
										<h3 class="entry-title bottommargin_0">
											<a href=""><?php echo $ev->event_title; ?></a>
										</h3>
										<p class="small-text bottommargin_0"> <?php echo $ev->event_date; ?> / <?php echo $ev->event_time; ?>  <?php echo $ev->event_time_suffix; ?> / <?php echo $ev->event_place; ?> </p>
										<div class="entry-content">
											<p><?php echo $ev->event_desc; ?></p>
										</div>
									</div>
								</div>
							 <?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="featured-video" class="ds parallax section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<!-- <a href="assets/https://www.youtube.com/watch?v=g7yskin-SFc" class="theme_button inverse round_button margin_0" data-gal="prettyPhoto[gal-video]">
								<i class="fa fa-play" aria-hidden="true"></i>
							</a> -->
							<!-- <h2 class="section_header bottommargin_0"> Suparna Biswas - Live Concert Kolkata 2018 </h2> -->
						</div>
					</div>
				</div>
			</section>

			<section id="gallery" class="ds ms section_padding_top_150 section_padding_bottom_130">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_line">Gallery</h2>
							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters" style="margin-top:60px;">

								<?php
			          //$teachers = $this->db->get('teacher')->result_array();
			          if($gallery!=null){
			          foreach($gallery as $gl){
		            ?>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 cat1">
									<article class="vertical-item content-padding post format-standard with_background rounded text-center">
										<div class="item-media top_rounded overflow_hidden">
											<img src="assets/images/gallery/thumb/<?php echo $gl->thumb_img; ?>" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="assets/images/gallery/original/<?php echo $gl->original_img; ?>"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<p class="content-3lines-ellipsis"><?php echo $gl->description; ?></p>
										</div>
									</article>
								</div>

							<?php }} ?>

							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="latest-album" class="ds ms page_latest_album parallax section_padding_top_150 section_padding_bottom_100 columns_margin_bottom_30 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_line">Latest Album</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="vertical-item slide-media opened-media">
								<div class="item-media-wrap"> <img src="assets/images/albums/02.jpg" alt="">
									<div class="item-media back-media"> <img src="assets/images/albums/cd.png" alt=""> </div>
									<div class="item-media with_frame_image"> <img src="assets/images/albums/02.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <span>
										<i class="fa fa-play highlight" aria-hidden="true"></i>
									</span> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_35">
									<h3 class="entry-title">
										<a href="assets/single-album.html">Download link and CallerTune</a>
									</h3>

									<select class="form-control" name="" id="music_change" style="margin-bottom: 20px;">
										<option value="0">Select Song</option>
										<?php
											if($music!=null){
											foreach($music as $ms){
										?>
										<option value="<?php echo $ms->id; ?>"><?php echo $ms->music_title; ?></option>
										<?php }}?>
									</select>
									<div class="col-md-12" id="call_download_div" style="display:none;">
										<hr style="margin-bottom:5px;">
										<p style="margin:0px;">
											<span class="grey">Set Your Callertune as " <span style="font-weight:bold;letter-spacing: 2px;color: #dd4377;"><?php echo $ms->music_title; ?></span> " Codes are available below:</span>
										</p>
										<hr style="margin-top:5px;">
										<p>
											<table>
												<tbody id="down_tbl_list1">

												</tbody>
											</table>
										</p>
										<hr style="margin-bottom:5px;">
										<p style="margin:0px;">
											<span class="grey">Download link are available below :</span>
										</p>
										<hr style="margin-top:5px;">
										<div class="big-icons topmargin_25" id="down_link_website">


										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<article>
								<div class="entry-content">
									<div class="cue-playlist-container">
										<div class="cue-playlist cue-theme-default">
											<ol class="cue-tracks"></ol>
										</div>
										<script type="application/json" class="cue-playlist-data">
											{
												"embed_link": "",
												"permalink": "",
												"skin": "",
												"thumbnail": "assets/images/albums/01.jpg",

												"tracks":
													<?php

														$arr=[];
														foreach($music as $ms){
														$arr[]=[
															"artist"=>$ms->artist_name,
															"artworkId"=>0,
															"artworkUrl"=>'#0',
															"audioId"=>1,
															"audioUrl"=>"assets/music/".$ms->mp3_file,
															"format"=> "mp3",
															"length"=> "",
															"title"=>$ms->music_title,
															//"id"=>$ms->id,

															"mp3"=> "assets/music/".$ms->mp3_file,
															"meta"=>[
																["artist"=> $ms->artist_name]
															],
															"src"=>"assets/music/".$ms->mp3_file,
															"thumb"=>[
																["src"=>"assets/images/albums/01.jpg"]
															]
														];
														}
														echo json_encode($arr);

													?>
													}
										</script>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>

			<section id="video" class="ds ms section_padding_top_150 section_padding_bottom_130">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_line">Video</h2>
						</div>
					</div>
					<div class="row">

						<?php if($video!=null){
							foreach($video as $vd)
							{  ?>

						<div class="col-md-6">
							<article class="vertical-item content-padding big-padding with_background rounded overflow_hidden post">
								<iframe width="100%" height="340" src="<?php echo $vd->video_link; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<!-- <span></span> -->
								<div class="item-content entry-content">
									<header class="entry-header">
										<div class="entry-meta small-text no-spacing content-justify"> <span class="greylinks">
										<a href="blog-single-right.html">
											<time datetime="2017-10-03T08:50:40+00:00">
												<?php echo $vd->video_date; ?>
											</time>
										</a>
									</span> <span class="highlightlinks">
										<a href="blog-right.html">
											<?php echo $vd->video_type; ?>
										</a>
									</span> </div>
										<h4 class="entry-title" style="font-size:20px;">
											<a href="blog-single-video-full.html" rel="bookmark"><?php echo $vd->video_title; ?></a>
										</h4>
									</header>
									<!-- .entry-header -->
									<div class="entry-content">
										<p style="line-height: 20px;"> <?php echo $vd->description; ?></p>
									</div>
								</div>
								<!-- .item-content.entry-content -->
							</article>
						</div>

					<?php }} ?>

					 </div>
				</div>
			</section>

			<section id="contact" class="ds ms background_cover page_contact section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6 text-center">
							<h2 class="section_header with_line">Get In Touch</h2>
							<!-- <p>For booking and press inquiries please contact my manager by filling the form or calling the number: 1-888-652-2588</p> -->
							<form class="columns_padding_10" method="post" action="<?php echo base_url(); ?>Main_con/send_mail1" enctype="multipart/form-data" id="contact_info">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group margin_0">
											<label for="name">Full Name <span class="required">*</span></label>
											<input type="text" aria-required="true" size="30" value="" name="full_name" id="full_name" class="form-control" placeholder="Full Name*">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group margin_0">
											<label for="email">Email address<span class="required">*</span></label>
											<input type="email" aria-required="true" size="30" value="" name="email_id" id="email_id" class="form-control" placeholder="Your Email Address*">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group margin_0">
											<label for="name">Phone <span class="required">*</span></label>
											<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone*">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group margin_0">
											<label for="message">Your question</label>
											<textarea aria-required="true" rows="5" cols="45" name="query" id="message" class="form-control" placeholder="Your Message*"></textarea>
										</div>
									</div>
								</div>
								<div class="row topmargin_20">
									<div class="col-sm-12">
										<div class="contact-form-submit text-center">
											<button type="button" id="sub_contact" name="" class="theme_button color1" style="width:100%;">Submit now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>


			<footer class="page_footer ds columns_padding_25" style="background:url(assets/images/map.png);">
				<div class="container">
					<div class="row">
						<div class="col-md-4 text-center col-md-offset-2">
							<div class="widget widget_text">
								<h4 class="widget-title with_line">Address </h4>
								<div>
									<div class="media small-media inline-block">
										<div class="media-left"> <i class="fa fa-map-marker highlight" aria-hidden="true"></i> </div>
										<div class="media-body"> Boston, Massachusetts, USA </div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-4 col-sm-6 text-center">
							<div class="widget widget_mailchimp">
								<h4 class="widget-title with_line">For Booking </h4>
								<div>
									<div class="media small-media inline-block">
										<div class="media-left"> <i class="fa fa-phone highlight" aria-hidden="true"></i> </div>
										<div class="media-body"> 1-888-652-2588 </div>
									</div>
								</div>
							</div>
						</div> -->
						<div class="col-md-4 col-sm-6 text-center">
							<div class="widget widget_recent_entries">
								<h4 class="widget-title with_line">Email </h4>
								<div>
									<div class="media small-media inline-block">
										<div class="media-left"> <i class="fa fa-envelope highlight" aria-hidden="true"></i> </div>
										<div class="media-body"> nsuparna@yahoo.com </div>
									</div>
								</div>
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
							<div>
								<?php if($social_link!=null){
									foreach($social_link as $sl)
									{  ?>
								<a class="social-icon round-icon" href="<?php echo $sl->title2; ?>" target="_blank" title="<?php echo $sl->title1; ?>" style="width:48px;height:48px;">
									<img src="assets/images/social_icon/<?php echo $sl->link1_img; ?>" alt="" style="background:#fff;border-radius: 50%;">
								</a>
								<?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="assets/js/compressed.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/mediaelement-and-player.min.js"></script>
	<script src="assets/js/mediaelement-migrate.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		/* <![CDATA[ */
		var _cueSettings = {
			"l10n":
			{
				"nextTrack": "Next Track",
				"previousTrack": "Previous Track",
				"togglePlayer": "Toggle Player",
				"togglePlaylist": "Toggle Playlist"
			}
		};
		/* ]]> */
	</script>
	<script src="assets/js/cue.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			function scrollToSection(event) {
				event.preventDefault();
				var $section = $($(this).attr('href'));
				$('html, body').animate({
					scrollTop: $section.offset().top
				}, 500);
		}


	//	$('#music_change').change(function(){
			  $(document).on('change','#music_change',function(){
			var abc=$('#music_change').val();
			// valert(abc);
			$('#loader').addClass('save_wait_anim');
			$.ajax({
							type: 'POST',
							url:"<?php echo base_url();?>Main_con/down_link_music",
							data:{id:abc},
							dataType:"json",
							success: function(res) {
								//console.log(res);
								$('#loader').removeClass('save_wait_anim');
								  $('#down_tbl_list1').empty();
									$('#down_link_website').empty();
									$('#call_download_div').show();

									res.a1.forEach(function(data){
                  $('#down_tbl_list1').append("<tr><td style='width: 48%;padding: 4px 10px;border: none;'>"+data.name+"</td><td style='width: 4%;padding: 4px 10px;border: none;'>:</td><td style='width: 48%;padding: 4px 10px;border: none;'>"+data.caller_code+"</td></tr>");
                               })
															 res.a2.forEach(function(data){
							                   $('#down_link_website').append("<a href='"+data.app_link+"' target='_blank' class='social-icon border-icon rounded-icon socicon-itunes' data-toggle='tooltip' title='"+data.app_name+"'></a>");
																 $('[data-toggle="tooltip"]').tooltip();
							                                })
															 	// <a href="<?php echo $dwn->app_link; ?>"  class="social-icon border-icon rounded-icon socicon-deezer" data-toggle="tooltip" title="<?php echo $dwn->app_name; ?>"></a>
								//alert(data);
								 // swal(
									//  'Deleted!',
									//  'Your file has been deleted.',
									//  'success'
								 // )
							}
					});
		})


		$('[data-scroll]').on('click', scrollToSection);



//Email Section Code Here//
	$('#sub_contact').click(function(){
		var name=$('#full_name').val();
		var email=$('#email_id').val();
		var phone=$('#phone').val();
		var message=$('#message').val();
		if(name=='')
		{
			//alert('name empty');
			swal('Name field must not empty !')
			$('#full_name').focus();
		}else if(email=='')
		{
			swal('Email field must not empty !')
			$('#email_id').focus();
		}else if(phone=='')
		{
			swal('Phone field must not empty !')
			$('#phone').focus();
		}else if(message=='')
		{
			swal('Message field must not empty !')
			$('#message').focus();
		}else{
			$('#loader').addClass('save_wait_anim');
			$.ajax({
							type: 'POST',
							url:"<?php echo base_url();?>Main_con/send_mail1",
							data: $('#contact_info').serialize(),
							success: function(data) {
								//alert('hii');
								$('#loader').removeClass('save_wait_anim');
								if(data!='0'){
									swal(
	 								 'Sent!',
	 								 'Your Mail has been Send.',
	 								 'success'
	 							 )
								$('#full_name').val('');
						 		$('#email_id').val('');
						 		$('#phone').val('');
						 		$('#message').val('');
							 }else{
								 swal(
									'Failed!',
									'Mail sent failure !',
									'error'
								)
							 }

							}
					});
		}


	});


		});


	</script>
</body>
</html>
