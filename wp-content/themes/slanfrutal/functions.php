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
    load_theme_textdomain( 'possumus', get_template_directory() . '/languages' );
    
    //Añadir un tamaño de imagen personalizado
    add_image_size('blog-size-image', 820, 615, true);
}
add_action( 'after_setup_theme', 'slan_custom_theme_features' );

/*

*Cargando estilos y scripts

*/

require_once('includes/scripts-styles.php');

/*

*Añadiendo zoonas de Menues

*/

require_once('includes/menus.php');

/*

*Registrando Sidebars

*/

require_once('includes/sidebars.php');

/*

*Limitando the_excerpt

*/


//function possumus_the_excerpt ($length) {
//	return 20;
//}

//add_filter('excerpt_length', 'possumus_the_excerpt');


function possumus_the_excerpt($limite) {

	$extracto = explode(' ', get_the_excerpt(), $limite);//Toma una cadena de texto y la convierte en array

	if (count( $extracto) >= $limite) {

		array_pop($extracto);
		$extracto = implode(' ', $extracto) . '...';

	} else {

		$extracto = implode(' ', $extracto);

	}

	
	return $extracto;

}

remove_action ('shutdown', 'wp_on_end_flush_all', 1);

/*
*Campos personalizados
*/

require_once ('includes/campos-personalizados.php');

/*
*Añadir nuevas opciones al personalizador
*/

require_once ('includes/personalizador-tema.php');




if ( ! function_exists('possumus_slides_custom_post_type') ) {

	// Register Slides
	function possumus_slides_custom_post_type() {
	
		$labels = array(
			'name'                  => _x( 'Sliders', 'Post Type General Name', 'possumus' ),
			'singular_name'         => _x( 'slide', 'Post Type Singular Name', 'possumus' ),
			'menu_name'             => __( 'Sliders', 'possumus' ),
			'parent_item_colon'     => __( 'Slide Superior', 'possumus' ),
			'all_items'             => __( 'Todos los slides', 'possumus' ),
			'add_new_item'          => __( 'Añadir Slides', 'possumus' ),
			'add_new'               => __( 'Agregar Nuevo', 'possumus' ),
			'new_item'              => __( 'Nuevo slide', 'possumus' ),
			'edit_item'             => __( 'Editar Slide', 'possumus' ),
			'update_item'           => __( 'Actualizar slide', 'possumus' ),
			'view_item'             => __( 'Ver Slide', 'possumus' ),
			'search_items'          => __( 'Buscar slide', 'possumus' ),
			'not_found'             => __( 'No se encontraron sliders', 'possumus' ),
			'not_found_in_trash'    => __( 'No hay slide en la papelera', 'possumus' ),
		);
		$args = array(
			'label'                 => __( 'slide', 'possumus' ),
			'description'           => __( 'Slides para inicio', 'possumus' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'revisions' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-slides',
			'show_in_admin_bar'     => false,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'rewrite'               => false,
			'capability_type'       => 'page',
		);
		register_post_type( 'slides', $args );
	
	}
	add_action( 'init', 'possumus_slides_custom_post_type', 0 );
	
	}


	