<?php 
/**
 * Archivo para registrar zonas de widgets
 * 
 */

 function slan_sidebars() {

    register_sidebar(array(

    'name'          => __( 'Barra lateral', 'possumus' ),
	'id'            => 'main-sidebar',
	'description'   => __( 'Zona principal', 'possumus' ),
    'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>' 
    ));

    register_sidebar(array(

        'name'          => __( 'Pie de pagina zona izquierda', 'possumus' ),
        'id'            => 'footer-widget-izq',
        'description'   => __( 'Footer izquierdo', 'possumus' ),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>' 
        ));
    register_sidebar(array(

            'name'          => __( 'Pie de pagina zona central', 'possumus' ),
            'id'            => 'footer-widget-centro',
            'description'   => __( 'Footer central', 'possumus' ),
            'class'         => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>' 
            ));
     register_sidebar(array(

                'name'          => __( 'Pie de pagina zona derecha', 'possumus' ),
                'id'            => 'footer-widget-der',
                'description'   => __( 'Footer derecho', 'possumus' ),
                'class'         => '',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>' 
                ));
 }

 add_action('widgets_init', 'slan_sidebars');