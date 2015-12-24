<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= THEME_PATH; ?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= THEME_PATH; ?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= THEME_PATH; ?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= THEME_PATH; ?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= THEME_PATH; ?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= THEME_PATH; ?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= THEME_PATH; ?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= THEME_PATH; ?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= THEME_PATH; ?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= THEME_PATH; ?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= THEME_PATH; ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= THEME_PATH; ?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= THEME_PATH; ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= THEME_PATH; ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#e74c3c">
    <meta name="msapplication-TileImage" content="<?= THEME_PATH; ?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#e74c3c">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="<?= THEME_PATH; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= THEME_PATH; ?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= THEME_PATH; ?>css/magnific-popup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= THEME_PATH; ?>vendors/bootstrap-select/css/bootstrap-select.min.css" media="screen">
    
    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
    <!--Theme Styles-->
    <link rel="stylesheet" href="<?= THEME_PATH; ?>css/default/style.css">
    <link rel="stylesheet" href="<?= THEME_PATH; ?>css/responsive/responsive.css">
    
    <!--[if lt IE 9]>
      <script src="<?= THEME_PATH; ?>js/html5shiv.min.js"></script>
      <script src="<?= THEME_PATH; ?>js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body class="home">
   
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">

<!-- ============ menu_middle ============  -->
@section("menu_middle")
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/index.html"><img src="<?= THEME_PATH; ?>images/logo.png" alt=""></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#middle-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="middle-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="home_variation_icon"></span>Home variations
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= THEME_PATH; ?>index.html">Home Page Version 1</a></li>
                            <li><a href="<?= THEME_PATH; ?>index2.html">Home Page Version 2</a></li>
                            <li><a href="<?= THEME_PATH; ?>index3.html">Home Page Version 3</a></li>
                            <li><a href="<?= THEME_PATH; ?>index4.html">Home Page Version 4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown mega-drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="video_menu_icon"></span>Video Menu
                        </a>
                        <ul class="dropdown-menu mega-menu">
                            <li class="row_title">Staf Picked</li>
                            <li class="videos">
                                <div class="container">
                                    <div class="col-sm-3">
                                        <div class="row inner m0">
                                            <div class="preview_img">
                                                <img src="<?= THEME_PATH; ?>images/menu/1.jpg" alt="" class="preview">
                                                <a href="<?= THEME_PATH; ?>single-video.html" class="play-btn"></a>
                                            </div>
                                            <div class="title_row row m0"><a href="<?= THEME_PATH; ?>single-video.html">Duis aute irure dolor in adipsicing elit</a></div>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row inner m0">
                                            <div class="preview_img">
                                                <img src="<?= THEME_PATH; ?>images/menu/2.jpg" alt="" class="preview">
                                                <a href="<?= THEME_PATH; ?>single-video.html" class="play-btn"></a>
                                            </div>
                                            <div class="title_row row m0"><a href="<?= THEME_PATH; ?>single-video.html">Duis aute irure dolor in adipsicing elit</a></div>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row inner m0">
                                            <div class="preview_img">
                                                <img src="<?= THEME_PATH; ?>images/menu/3.jpg" alt="" class="preview">
                                                <a href="<?= THEME_PATH; ?>single-video.html" class="play-btn"></a>
                                            </div>
                                            <div class="title_row row m0"><a href="<?= THEME_PATH; ?>single-video.html">Duis aute irure dolor in adipsicing elit</a></div>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row inner m0">
                                            <div class="preview_img">
                                                <img src="<?= THEME_PATH; ?>images/menu/4.jpg" alt="" class="preview">
                                                <a href="<?= THEME_PATH; ?>single-video.html" class="play-btn"></a>
                                            </div>
                                            <div class="title_row row m0"><a href="<?= THEME_PATH; ?>single-video.html">Duis aute irure dolor in adipsicing elit</a></div>
                                        </div>                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="extra_pages_icon"></span>Extra pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= THEME_PATH; ?>login.html">Login</a></li>
                            <li><a href="<?= THEME_PATH; ?>signup-popup.html">Sign Up</a></li>
                            <li><a href="<?= THEME_PATH; ?>single-video.html">Single Video</a></li>
                            <li><a href="<?= THEME_PATH; ?>page-author.html">Auther Profile</a></li>
                            <li><a href="<?= THEME_PATH; ?>category.html">Category Page</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->


            <ul class="nav navbar-nav navbar-right login_drop">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="login_icon"></span> My Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= THEME_PATH; ?>login.html">Login</a></li>
                        <li><a href="<?= THEME_PATH; ?>signup-popup.html">Sign Up</a></li>
                        <li><a href="<?= THEME_PATH; ?>page-author.html">Auther Profile</a></li>
                    </ul>
                </li>
            </ul>
@show
<!-- ============ menu_middle ============  -->


        </div><!-- /.container-fluid -->
    </nav> <!--Navigation-->
    
	{{-- @yield("slide_upload") --}}
    
    <section class="row">
        <ul class="nav nav-justified ribbon">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </section> <!--Ribbon-->
    
    <section class="row search_filter">
        <div class="container">
            <div class="row m0">
                <!--Category Filter-->
                <div class="btn-group category_filter fleft">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="filter-option pull-left">All Category</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="filter_text">All Categories</span><span class="badge"></span></a></li>
                        <li><a href="#"><span class="filter_text">Art</span><span class="badge">1200</span></a></li>
                        <li><a href="#"><span class="filter_text">astrology</span><span class="badge">650</span></a></li>
                        <li><a href="#"><span class="filter_text">biography</span><span class="badge">1200</span></a></li>
                        <li><a href="#"><span class="filter_text">comedy</span><span class="badge">650</span></a></li>
                        <li><a href="#"><span class="filter_text">entertainment</span><span class="badge">1200</span></a></li>
                        <li><a href="#"><span class="filter_text">photoshop</span><span class="badge">650</span></a></li>
                        <li><a href="#"><span class="filter_text">philosophy</span><span class="badge">1200</span></a></li>
                        <li><a href="#"><span class="filter_text">nano tube</span><span class="badge">650</span></a></li>
                    </ul>
                </div>
                <!--Post Type Filter-->
                <div class="btn-group postTypeFilter fleft" data-toggle="buttons">
                    <label class="btn btn-primary postType1 active">
                        <input type="radio" name="postType" id="postType1" checked> All
                    </label>
                    <label class="btn btn-primary postType2">
                        <input type="radio" name="postType" id="postType2" > Videos
                    </label>
                    <label class="btn btn-primary postType3">
                        <input type="radio" name="postType" id="postType3" > Images
                    </label>
                    <label class="btn btn-primary postType4">
                        <input type="radio" name="postType" id="postType4" > Audios
                    </label>
                </div>
                <!--Search Form-->
                <form action="#" role="search" class="search_form fright">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here" >
                        <span class="input-group-addon"><button type="submit"><img src="<?= THEME_PATH; ?>images/icons/search.png" alt=""></button></span>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
		@section("content_page")
		@show

		@section("content_list_video")
		@show

		@section("detail_page")
		@show

		@section("slide1")
		@show
    
    <section class="row">
        <ul class="nav nav-justified ribbon">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </section> <!--Ribbon-->
    
    <footer class="row">
        <div class="container">
            <div class="row sidebar sidebar_footer">
                <div class="col-sm-3 widget widget1 w_in_footer widget_about">
                    <h5 class="widget_title">About Video Cafe</h5>
                    <div class="row m0 inner">
                        <a href="index.html"><img src="<?= THEME_PATH; ?>images/footer-logo.png" alt=""></a><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                    </div>
                </div>
                <div class="col-sm-3 widget widget2 w_in_footer widget_subscribe">
                    <h5 class="widget_title">subscribe to our newsletter</h5>
                    <div class="row m0 inner">
                        <form action="#" class="row m0" method="post">
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <input type="submit" value="Submit Now" class="form-control btn btn-default">
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 widget widget3 w_in_footer widget_tags">
                    <h5 class="widget_title">popular tags</h5>
                    <div class="row m0 inner">
                        <a href="#" class="tag">business</a>
                        <a href="#" class="tag">osx</a>
                        <a href="#" class="tag">windows 10</a>
                        <a href="#" class="tag">osx yosemite</a>
                        <a href="#" class="tag">photoshop</a>
                        <a href="#" class="tag">css</a>
                        <a href="#" class="tag">business</a>
                        <a href="#" class="tag">osx</a>
                        <a href="#" class="tag">windows 10</a>
                        <a href="#" class="tag">osx yosemite</a>
                        <a href="#" class="tag">photoshop</a>
                        <a href="#" class="tag">css</a>
                    </div>
                </div>
                <div class="col-sm-3 widget widget4 w_in_footer widget_twitter">
                    <h5 class="widget_title">twitter feed</h5>
                    <div class="row m0 inner">
                        <div class="row m0 tweet"><a href="#">@masum_rana:</a>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</div>
                        <div class="row m0 tweet"><a href="#">@masum_rana:</a>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</div>
                        <div class="row m0 tweet"><a href="#">@masum_rana:</a>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
    
    <!--jQuery, Bootstrap and other vendor JS-->
    
    <!--jQuery-->
    <script src="<?= THEME_PATH; ?>js/jquery-2.1.4.min.js"></script>
    
    <!--Bootstrap JS-->
    <script src="<?= THEME_PATH; ?>js/bootstrap.min.js"></script>
    
    <!--Dropzone-->
    <script src="<?= THEME_PATH; ?>js/dropzone.js"></script>
    
    <!--jScroll-->
    <script src="<?= THEME_PATH; ?>js/jquery.jscroll.min.js"></script>
    
    <!--Magnific Popup-->
    <script src="<?= THEME_PATH; ?>js/jquery.magnific-popup.min.js"></script>
    
    <!--Bootstrap Select-->
    <script src="<?= THEME_PATH; ?>vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    
    <!--Theme JS-->
    <script src="<?= THEME_PATH; ?>js/theme.js"></script>
</body>
</html>
