<?php
/**
 *  Funciones y definiciones
 * 
 *
 *  
 * @package Slan
 * @subpackage Slan frutal
 * @since 1.0
 */

/* Definir constante para url de la ruta*/

define('RUTATEMA', get_stylesheet_directory_uri() );
define('IMAGENES', RUTATEMA . '/img');



/* 
Definiendo caracteristicas del tema.

*/


// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1200;



// Register Theme Features
function slan_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'f1f4f6',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'editor-style.css' );

	// Add theme support for Translation
    load_theme_textdomain( 'slan', get_template_directory() . '/languages' );
    
    //Añadir un tamaño de imagen personalizado
    add_image_size('blog-size-image', 820, 615, true);
}
add_action( 'after_setup_theme', 'slan_custom_theme_features' );

/*

*Cargando estilos y scripts

*/

require_once('includes/scripts-styles.php');



