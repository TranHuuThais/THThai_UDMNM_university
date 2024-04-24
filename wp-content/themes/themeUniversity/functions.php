<?php


function theme_style()
{

	// get_stylesheet_directory_uri

	wp_enqueue_style('index_university_font_google', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
	wp_enqueue_style('index_university_bootstrap', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
	wp_enqueue_style('index_university', get_theme_file_uri('build/index.css'));
	wp_enqueue_style('index_university_extra', get_theme_file_uri('build/style-index.css'));
	wp_enqueue_script('index_university_script', get_theme_file_uri('build/index.js'), array('jquery'), '1.0', true);
	// 	wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_style');

// register_nav_menus();

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Menu chinh', 'themeUniversity' ),
	    	'footer_menu_1'  => __( 'Menu Footer_1', 'themeUniversity' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}