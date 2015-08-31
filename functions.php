<?php
/* add stylesheets and scrits to the head */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
	// remember to add the newest CDN
	wp_enqueue_style( 'Bootstrap CSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' ); 
	wp_register_script('Bootstrap JS','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js');
	wp_enqueue_style( 'SASS Screen', get_stylesheet_directory_uri() . '/stylesheets/screen.css' );
	wp_enqueue_style( 'SASS Print Styles', get_stylesheet_directory_uri() . '/stylesheets/print.css' ); 
}

// NB: Jquery is enabled in the head section via wp_enqueue_script("jquery");

/* menus */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' ); // for the menu see index.php


/* sidebar widget areas */ 

/*
As below you can add more widget areas to your theme.
The sample is used in sidebar.php - but you can add 
a widget area wherevever you want it in your theme.
*/

// source: 	http://codex.wordpress.org/Widgetizing_Themes
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div id="theSidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// no whitespace in the last line pls.
?>
