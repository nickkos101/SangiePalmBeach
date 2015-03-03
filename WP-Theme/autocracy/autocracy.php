<?php

// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/cpost.php';
include get_template_directory() . '/autocracy/functions.php';

/* Start Modifying Stuff to suite you here */

require_once ( get_template_directory() . '/autocracy/theme-manager.php' );

add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');

function theme_options_init() {
	register_setting('main_options', 'main_theme_options', 'main_theme_options_validate');
}

function theme_options_add_page() {
	add_menu_page(__('Theme Manager', 'sampletheme'), __('Theme Options', 'sampletheme'), 'edit_theme_options', 'main_theme_options', 'main_theme_options_do_page', get_template_directory_uri().'/images/favicon.png');
}
?>