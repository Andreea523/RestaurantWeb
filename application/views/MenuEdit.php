<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css');?>"> 
	<!-- Themify Icons-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css');?>">
	<!-- Bootstrap  --> 
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">

	<!-- Magnific Popup -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>">

	<!-- Owl Carousel  -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css');?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js');?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="<?php echo site_url('MainController/index');?>">Savory <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="<?php echo site_url('MenuController/index');?>">Menu</a></li
						<li><a href="<?php echo site_url('ContactController/index');?>">Contact</a></li>
                                                <li><a href="<?php echo site_url('LoginController/index');?>">Admin</a></li>
						<li class="btn-cta"><a href="<?php echo site_url('');?>"><span>Reservation</span></a>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(assets/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span>
							<h1 class="cursive-font">Taste all our menu!</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
<section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Edit Menu</h2>
              <span class="back-text">Menu Form</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-6">
            <?php echo form_open_multipart('AdminController/updateProduct/' . $mancare[0]->id1); ?>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <?php $data= array(
                            'name' => 'den',
                            'id' => 'den',
                            'placeholder' => 'Denumire',
                            'class' => 'form-control',
                            'type' =>'text',
                            'value' => $mancare[0]->den
                        ); ?>
                        <?php echo form_input($data); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <?php $data= array(
                            'name' => 'pret',
                            'id' => 'pret',
                            'placeholder' => 'Pret',
                            'class' => 'form-control',
                            'type' =>'text',
                            'value' => $mancare[0]->pret
                        ); ?>
                        <?php echo form_input($data); ?>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-12 form-group">
                        <?php $data= array(
                            'name' => 'des',
                            'id' => 'des',
                            'placeholder' => 'Descriere',
                            'class' => 'form-control',
                            'type' =>'text',
                            'value' => $mancare[0]->des
                        ); ?>
                        <?php echo form_input($data); ?>
                    </div>
                </div>  
               
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($mancare[0]->image).'" class="img-fluid" alt="" />';?>
                <br><br><br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="file" name="userfile" size="20" />
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </section> 

	<div class="gtco-cover gtco-cover-sm" style="background-image: url(assets/images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
					<p>&mdash; John Doe, CEO of XYZ Co.</p>
				</div>	
			</div>
		</div>
	</div>

	

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(assets/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/js/jquery.waypoints.min.js');?>"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script>
	<!-- countTo -->
	<script src="<?php echo base_url('assets/js/jquery.countTo.js');?>"></script>

	<!-- Stellar Parallax -->
	<script src="<?php echo base_url('assets/js/jquery.stellar.min.js');?>"></script>

	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/magnific-popup-options.js');?>"></script>
	
	<script src="<?php echo base_url('assets/js/moment.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>


	<!-- Main -->
	<script src="<?php echo base_url('assets/js/main.js');?>"></script>

	</body>
</html>

