<?php

include 'autocracy/autocracy.php';

function sangie_scripts() {
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'zoom', get_template_directory_uri() . '/jquery.elevatezoom.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'imagesLoaded', get_stylesheet_directory_uri() . '/imagesLoaded.js', array( 'jquery' ) );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/function.js', array('jquery', 'jquery-ui-tabs', 'slick', 'jquery-masonry','zoom', 'imagesLoaded'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'sangie_scripts' );


function sangie_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | ' .get_bloginfo( 'sitetitle' ). ' | '. get_bloginfo( 'description' );
	}
	return $title;
}

add_filter( 'wp_title', 'sangie_title' );

add_theme_support( 'menus' );
//Menu Registration
register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	'Resp_Menu' => 'Responsive Navigation Area',
	'Shop_Collections_Nav' => 'Shop Collections Nav',
	'Shop_Categories_Nav' => 'Shop Categories Nav',
	'WhatsNew_Nav' => 'Whats New Nav',
	'LookBooks_Nav' => 'Look Books Nav',
	'Blog_Nav' => 'Blog Nav',
	'Accounts_Nav' => 'Accounts Nav',
	) );

add_theme_support( 'widgets' );

//Sidebar Registration
register_sidebar( array(
	'name' => __( 'Product Search', 'wpb' ),
	'id' => 'sidebar-1',
	'description' => __( 'This search appears in the main menu', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4 style="display: none;">',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 1', 'wpb' ),
	'id' => 'sidebar-2',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 2', 'wpb' ),
	'id' => 'sidebar-3',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 3', 'wpb' ),
	'id' => 'sidebar-4',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 4', 'wpb' ),
	'id' => 'sidebar-5',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);


//Custom Post Types
function sangie_create_post_type() {
	register_post_type('megamenu', array(
		'labels' => array(
			'name' => __('Mega Menu'),
			'singular_name' => __('Menu')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'megamenu'),
		'supports' => array('title','editor')
		)
	);
	register_post_type('slider', array(
		'labels' => array(
			'name' => __('Slider'),
			'singular_name' => __('Slider')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'slides'),
		'supports' => array('title', 'thumbnail')
		)
	);
	register_post_type('slider-2', array(
		'labels' => array(
			'name' => __('Slider 2'),
			'singular_name' => __('Slider 2')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'slides-2'),
		'supports' => array('title', 'thumbnail')
		)
	);
	register_post_type('retailers', array(
		'labels' => array(
			'name' => __('Retailers'),
			'singular_name' => __('Retailer')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'retailers'),
		'supports' => array('title', 'thumbnail')
		)
	);
	register_post_type('lookbooks', array(
		'labels' => array(
			'name' => __('Lookbooks'),
			'singular_name' => __('Lookbook')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'lookbooks'),
		'supports' => array('title', 'thumbnail')
		)
	);
	register_post_type('videos', array(
		'labels' => array(
			'name' => __('Videos'),
			'singular_name' => __('Video')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'videos'),
		'supports' => array('title', 'editor')
		)
	);
}
add_action('init', 'sangie_create_post_type');

add_theme_support( 'woocommerce' );

// Unhook Woocommerce
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'woocommerce_wrapper_end', 10);

// Remove Product Tabs 

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Add Full Description in summary area

function woocommerce_template_product_description() {
	woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

function woocommerce_wrapper_start() {
	echo '<main><div class="white-wrap col-wrap"><div class="mini-container">';
}

function woocommerce_wrapper_end() {
	echo '</div></div></main>';
}

function get_featured_url() {
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
	return $thumb_url;
}

// Unhook Woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

//Modify Woocommerce Store Notice
/**
 * Add an icon in the store notice.
 */
function wc_custom_store_notice_freeship( $text ) {
	return str_replace( '<p class="demo_store">', '<p class="demo_store"><i class="fa fa-bookmark"></i>', $text );
}
add_filter( 'woocommerce_demo_store', 'wc_custom_store_notice_freeship' );

// Instagram Feed

function instaGramFeed($userID, $accessToken){
	$url = "https://api.instagram.com/v1/users/".$userID."/media/recent/?access_token=".$accessToken;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	$result = curl_exec($ch);
	curl_close($ch); 
	$result = json_decode($result);
	$i = 0;
	foreach ($result->data as $post) if ($i < 10) {
		echo '<div><a target="_blank" href="'.$post->link.'"><img src="'.$post->images->standard_resolution->url.'"></a></div>';
		$i++;
	} 
}

// change number of related posts in Woocommerce
function woo_related_products_limit() {
	global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
function jk_related_products_args( $args ) {

	$args['posts_per_page'] = 4; // 10 related products
	return $args;
}

// Remove sorting drop down in Woocommerce 
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//unhook thumbnails


remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_thumbnails', 25 );

// add category description on archive pages
add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
	if ( is_product_category() ){
		global $wp_query;
		$cat = $wp_query->get_queried_object();
		$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
		$image = wp_get_attachment_url( $thumbnail_id );
		if ( $image ) {
			echo '<div class="cat-image-div" style="background-image: url(' . $image . ');"></div>';
		}
	}
}

function display_cart() {
	global $woocommerce;
	echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);
}

?>