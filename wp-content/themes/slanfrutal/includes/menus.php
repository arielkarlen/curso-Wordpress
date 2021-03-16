<?php 

/**
 * Registrando area de menus
 * 
 */

 function theme_menus() {

    register_nav_menus(array(

        'main-menu'=> __('Menu principal cabecera','possumus')

    ));
 }
 add_action('init', 'theme_menus');