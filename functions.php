<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // este é o style.css do tema pai
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
function wpgood_nav_search($items, $args) {
    // verifica se é o menu "primary"
    if( !($args->theme_location == 'primary') ) 
    return $items;
    // se for, adiciona o campo de epsquisa
    return $items . '<li>' . get_search_form(false) . '</li>';
}
add_filter('wp_nav_menu_items', 'wpgood_nav_search', 10, 2);
// Add support for featured content.
/* 
add_theme_support(
    'featured-content', array(
        'featured_content_filter' => 'get_featured_posts',
        'max_posts'               => 3,
    )
);
*/
// Load up the Text domain.
load_theme_textdomain('devdmbootstrap4', get_template_directory() . '/languages');

$defaults = array(
	'default-image'          => '',
	'width'                  => 1500,
	'height'                 => 200,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
?>
