<?php define("THEME_PATH",'/assets/template/template_oklerthems/') ?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>@yield("title")</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= THEME_PATH; ?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= THEME_PATH; ?>css/theme.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>css/theme-elements.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>css/theme-blog.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>css/theme-shop.css">
		<link rel="stylesheet" href="<?= THEME_PATH; ?>css/theme-animate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= THEME_PATH; ?>css/skins/default.css">		<script src="<?= THEME_PATH; ?>master/style-switcher/style.switcher.localstorage.js"></script>

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= THEME_PATH; ?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?= THEME_PATH; ?>vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body data-spy="scroll" data-target="#sidebar" data-offset="120">

		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?= THEME_PATH; ?>img/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
											</li>
											<li class="hidden-xs">
												<a href="<?= THEME_PATH; ?>contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											{{-- @include("_includes/theme_nav") --}}
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="" href="index.html">
															Trang chủ
														</a>
													</li>
													<li class="dropdown">
														<a class="" href="/showcat.html">
															Giới thiệu
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Sticky Sidebar</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-3">
							<aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options='{"minWidth": 991, "containerSelector": ".container", "padding": {"top": 110}}'>
								<h4 class="heading-primary">Danh mục</h4>
								<ul class="nav nav-list mb-xl show-bg-active">
									<li class=""><a data-hash data-hash-offset="85" href="/">First</a></li>
									<li><a data-hash data-hash-offset="85" href="/">Third</a></li>
								</ul>

								<h4 class="heading-primary">Categories</h4>
								<ul class="nav nav-list mb-xl show-bg-active">
									<li class="active"><a data-hash data-hash-offset="85" href="#first">First</a></li>
									<li>
										<a data-hash data-hash-offset="85" href="#second">Second</a>
										<ul>
											<li><a data-hash data-hash-offset="85" href="#sub-second-1">Sub Second 1</a></li>
											<li><a data-hash data-hash-offset="85" href="#sub-second-2">Sub Second 2</a></li>
										</ul>
									</li>
									<li><a data-hash data-hash-offset="85" href="#third">Third</a></li>
								</ul>


							</aside>
						</div>
						<div class="col-md-9">
							@section("body")
							@show
							@yield("content")
						</div>

					</div>

				</div>

			</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "oklerthemes", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="<?= THEME_PATH; ?>img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2015. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="<?= THEME_PATH; ?>contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?= THEME_PATH; ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?= THEME_PATH; ?>master/style-switcher/style.switcher.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/common/common.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= THEME_PATH; ?>vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= THEME_PATH; ?>js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= THEME_PATH; ?>js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= THEME_PATH; ?>js/theme.init.js"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-42715764-5', 'auto');
			ga('send', 'pageview');
		</script>
		<script src="<?= THEME_PATH; ?>master/analytics/analytics.js"></script>

	</body>
</html>
