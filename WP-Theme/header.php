<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/woo.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<meta name="viewport" content="width=device-width">
	<meta name="google-site-verification" content="3w3knsLhD5J4NNS1VndpRrPLFRi6HyzBAsWae7ePGMg" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php wp_head(); ?>
	<?php include_once("analytics-tracking.php") ?>
</head>
<body>
	<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '673933229382412',
			xfbml      : true,
			version    : 'v2.2'
		});
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="fb-root" class=" fb_reset"></div>
	<header class="header">
		<div class="logo">
			<a href="<?php echo get_site_url(); ?>/" title="Home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
		</div>
		<nav>
			<span class="main-nav"><?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?></span>
			<div class="product-search">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
			<div class="social-media">
				<a href="http://www.facebook.com/sangiepalmbeach" target="_blank"><i class="fa fa-facebook-square"></i></a>
				<a href="http://twitter.com/sangiepb" target="_blank"><i class="fa fa-twitter-square"></i></a>
				<a href="http://instagram.com/sangie.palmbeach" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="http://www.pinterest.com/sangiepalmbeach" target="_blank"><i class="fa fa-pinterest-square"></i></a>
			</div>
			<?php get_template_part('subnav'); ?>
		</nav>
		<div class="site-credits">
			<a href="http://helpmy.boutique" title="ecommerce web design" target="_blank"><p><img src="<?php echo get_template_directory_uri(); ?>/images/inspyre.png" class="credit"></p></a>
		</div>
	</header>
	<div class="resp-menu">
		<div class="resp-menu-top-bar">
			<div class="mobile-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mlogo.png" />
			</div>
			<div class="mobile-bars talignright">
				<i class="fa fa-bars"></i>
			</div>
		</div>
		<div class="resp-sub-menu col-wrap">
			<div class="column-nopad half">
				<?php wp_nav_menu(array('theme_location' => 'Resp_Menu',)); ?>
			</div>
		</div>
	</div>