<?php
/**
 * Archivos de estilos y scripts.
 * 
 *
 *  
 * @package Slan
 * @subpackage Slan frutal
 * @since 1.0
 */


 /*Registrar y cargar hojas de estilos*/

 function slan_theme_styles() {

/*Registrar Hoja de estilo
Nombre - Ruta - dependiente de - Version - Dispositivos
*/
wp_register_style('font-awesome', RUTATEMA . '/css/font-awesome.min.css', '', '4.7.0', 'all');
wp_register_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,700', '', '', 'all');
wp_register_style('ideal-image-slider', RUTATEMA . '/css/ideal-image-slider.css', '', '1.5.1', 'all');
wp_register_style('slan-styles', get_stylesheet_uri(), array('font-awesome','poppins-font','ideal-image-slider'), '1.5.1', 'all');


/*Cargar hojas de estilos*/
wp_enqueue_style ('slan-styles');

 }

 add_action('wp_enqueue_scripts', 'slan_theme_styles');

  /*Registrar y cargar scripts*/

  function slan_theme_scripts() {
    wp_register_script('slider', RUTATEMA . '/js/ideal-image-slider.min.js', array('jquery'), '1.5.1','true');
    wp_register_script('slan-scripts', RUTATEMA . '/js/functions.js', array('jquery', 'slider'), '1.0','true');

    wp_enqueue_script('slan-scripts');

  }

  add_action('wp_enqueue_scripts', 'slan_theme_scripts');