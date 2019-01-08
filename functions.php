
<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
/**************************
* THEME SUPORT
***************************/
function add_suport_theme(){
	add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');

/**************************
* Registro Menu Personalizado
***************************/
add_theme_support('menus');

/***************************
* Scripts / CSS
****************************/
function daviwp_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/assets/css/foundation.min.css' );
 
  wp_enqueue_style( 'style', get_stylesheet_uri() . '/css/style.css');


}
add_action( 'wp_enqueue_scripts', 'daviwp_scripts' );


/*********** REGISTRO UM MENU ************************/
register_nav_menus(
  array(
    'meu_menu' => __( 'Menu Principal','meu-text-domain' )
  )
);

