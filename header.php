
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title><?php get_bloginfo('name')?></title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();  ?>/images//favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();  ?>/images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();  ?>/images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();  ?>/images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys
	<link href="https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
 
	 RS5.0 Layers and Navigation Styles -->
	<!-- <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css"> -->
	
	<!-- Library - Bootstrap v3.3.5 -->
    <!-- <link rel="stylesheet" type="text/css" href="libraries/lib.css"> -->
	
	<!-- Custom - Common CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="css/plugins.css">			
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
	<link rel="stylesheet" type="text/css" href="css/shortcode.css">
	<link rel="stylesheet" type="text/css" href="style.css"> -->
	 <!-- --> 
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
	<![endif]-->
	<?php wp_head();?>
	
</head>

<body <?php body_class();?> data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->

		<!-- Header -->
		<header class="header-section container-fluid no-padding">
			<!-- Top Header -->
			<div class="top-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="col-md-7 col-sm-7 col-xs-7 dropdown-bar">
						<h5>Welcome To Max Shop</h5>
						<div class="language-dropdown dropdown">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="languages" id="language" type="button" class="btn dropdown-toggle">English <span class="caret"></span></button>
							<ul class="dropdown-menu no-padding">
								<li><a title="Danish" href="#">Danish</a></li>
								<li><a title="German" href="#">German</a></li>
								<li><a title="French" href="#">French</a></li>
							</ul>
						</div>
						<div class="language-dropdown dropdown">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="currency" id="currency" type="button" class="btn dropdown-toggle">US Dollar<span class="caret"></span></button>
							<ul class="dropdown-menu no-padding">
								<li><a title="Danish" href="#">Usd</a></li>
								<li><a title="German" href="#">Ora</a></li>
								<li><a title="French" href="#">Riyal</a></li>
							</ul>
						</div>
					</div>
					<!-- Social -->
					<div class="col-md-5 col-sm-5 col-xs-5 header-social"> 
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
							<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
						</ul>
					</div><!-- Social /- -->
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
			<!-- Menu Block -->
			<div class="container-fluid no-padding menu-block">
				<!-- Container -->
				<div class="container">
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index.html" class="navbar-brand">Max <span>shop</span></a>
						</div>
						<!-- Menu Icon -->
						<div class="menu-icon">
							<div class="search">	
								<a href="#" id="search" title="Search"><i class="icon icon-Search"></i></a>
							</div>
							<ul class="cart">
								<li>
									<a aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="cart" class="btn dropdown-toggle" title="Add To Cart" href="#"><i class="icon icon-ShoppingCart"></i></a>
									<ul class="dropdown-menu no-padding">
										<li class="mini_cart_item">
											<a title="Remove this item" class="remove" href="#">&#215;</a>
											<a href="#" class="shop-thumbnail">
												<img alt="poster_2_up" class="attachment-shop_thumbnail" src="<?php echo get_template_directory_uri();  ?>/images/product-wishlist-1.jpg">Flying Ninja
											</a>
											<span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
										</li>
										<li class="mini_cart_item">
											<a title="Remove this item" class="remove" href="#">&#215;</a>
											<a href="#" class="shop-thumbnail">
												<img alt="poster_2_up" class="attachment-shop_thumbnail" src="<?php echo get_template_directory_uri();  ?>/images/product-wishlist-2.jpg">Flying Ninja
											</a>
											<span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
										</li>
										<li class="button">
											<a href="#" title="View Cart">View Cart</a>
											<a href="#" title="Check Out">Check out</a>
										</li>
									</ul>
								</li>
								<li><a href="#" title="Like"><i class="icon icon-Heart"></i></a></li>
								<li><a href="#" title="User"><i class="icon icon-User"></i></a></li>
							</ul>
						</div><!-- Menu Icon /- -->
						<div class="navbar-collapse collapse navbar-right" id="navbar">
							<ul class="nav navbar-nav">
								<li class="active dropdown">
									<a href="#" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="index.html" title="home 1">home 1</a></li>
										<li><a href="index2.html" title="home 2">home 2</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Categories </a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="cart.html" title="Cart">Cart</a></li>
										<li><a href="checkout.html" title="Checkout">Checkout</a></li>
										<li><a href="404.html" title="404">404</a></li>
									</ul>
								</li>
								<li><a href="#product-section" title="Products">Products</a></li>
								<li class="dropdown">
									<a href="shop.html" title="Shop" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="shop-single.html" title="Shop Single">Shop Single</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="blog-post.html" title="Blog Post">Blog Post</a></li>
									</ul>
								</li>
								<li><a href="about.html" title="About Us">About Us</a></li>
								<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
							</ul>
						</div><!--/.nav-collapse -->
					</nav><!-- nav /- -->
					<!-- Search Box -->
					<div class="search-box">
						<span><i class="icon_close"></i></span>
						<form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
					</div><!-- Search Box /- -->
				</div><!-- Container /- -->
			</div><!-- Menu Block /- -->
		</header><!-- Header /- -->