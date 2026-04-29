<?php 
/** 
 * theme setup for association 

 */

if (! defined('ABSPATH')) {
	exit; 
}

add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus([
		'primary' => ' Menu principal', 
		,
		'footer' => ' Menu de pied de page', 
		]);
});

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('association-maquette-style', 
	get_stylesheet_uri(),
	[],
	wp_get_theme()->get('Version')
	);
});

?>

