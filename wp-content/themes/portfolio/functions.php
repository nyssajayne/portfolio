<?php
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_styles' );

/**
 * Register style sheet.
 */
function register_styles() {
	wp_register_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	wp_register_style( 'main', get_stylesheet_directory_uri() . '/main.css' );
	wp_register_style( 'makesit', get_stylesheet_directory_uri() . '/makesit.css' );
	wp_register_style( 'playfair', 'http://fonts.googleapis.com/css?family=Playfair+Display' );
	wp_register_style( 'muli', 'http://fonts.googleapis.com/css?family=Muli' );
	wp_register_style( 'apple', 'http://fonts.googleapis.com/css?family=Homemade+Apple' );
	wp_register_style( 'lato', 'http://fonts.googleapis.com/css?family=Lato:400,400italic,900,700' );
	wp_register_style( 'dancing', 'http://fonts.googleapis.com/css?family=Dancing+Script' );

	wp_enqueue_style( 'style' );


	if(!is_page('887')) {
		wp_enqueue_style( 'main' );
		wp_enqueue_style( 'playfair' );
		wp_enqueue_style( 'muli' );
		wp_enqueue_style( 'apple' );
	}
	else {
		wp_enqueue_style( 'makesit' );
		wp_enqueue_style( 'lato' );
		wp_enqueue_style( 'dancing' );
	}
}

add_action( 'wp_enqueue_scripts', 'register_scripts' );

function register_scripts() {
	wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/scripts/scripts.js' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts' );
}

add_action( 'after_setup_theme', 'register_menu' );

function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

function print_menu() {
	$defaults = array(
		'theme_location'  => '',
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => 'nav-desktop',
		'container_id'    => '',
		'menu_class'      => 'vertical-text',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	$defaults_mob = array(
		'theme_location'  => '',
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => 'nav-mob',
		'container_id'    => '',
		'menu_class'      => 'vertical-text',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s"><li id="nav-menu-mob">Menu</li>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	wp_nav_menu( $defaults );
	//wp_nav_menu( $defaults_mob );
}

add_theme_support( 'post-thumbnails' ); 