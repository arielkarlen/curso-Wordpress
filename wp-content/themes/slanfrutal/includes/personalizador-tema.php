<?php 

/**
 * Archivo que me permite agregar nuevas opciones al personalziador
 * 
 */

 function possumus_customize_register($wp_customize) {

    /*-----------------------------------
    Panel encabezado - Panel
    ----------------------------------*/

    $wp_customize->add_panel('possumus_header_panel', array(
      'title' => __('Encabezado', 'possumus'),
      'description' => __('Opciones del encabezado', 'possumus'),
      'priority' =>  35, //POr defecto vienen las prioridades de 20 en 20
    ));

    /*-----------------------------------
    Encabezado Superior - Seccion
    ----------------------------------*/
    
    $wp_customize->add_section('possumus_header_top', array(
        'title' => __('Encabezado superior', 'possumus'),
        'description' => __('Opciones del encabezado superior', 'possumus'),
        'priority' =>  10, //POr defecto vienen las prioridades de 20 en 20
        'panel' => 'possumus_header_panel'
      ));

    //Texto en top header  
    $wp_customize -> add_setting('possumus_setings[top_header_text]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

      
    $wp_customize -> add_control('top_header_text', array(
        'label' => __('Texto en top header', 'possumus'),
        'description' => __('Texto que se muestra en la barra superior', 'possumus'),
        'section' => 'possumus_header_top',
        'settings' => 'possumus_setings[top_header_text]'

    ));

    //Enlace Facebook  
    $wp_customize -> add_setting('possumus_setings[facebook_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('facebook_link', array(
        'label' => __('Enlace a pagina de Facebook', 'possumus'),
        'description' => __('Url de Facebook', 'possumus'),
        'section' => 'possumus_header_top',
        'settings' => 'possumus_setings[facebook_link]'

    ));

    //Enlace Twitter  
    $wp_customize -> add_setting('possumus_setings[twitter_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('twitter_link', array(
        'label' => __('Enlace a pagina de Twitter', 'possumus'),
        'description' => __('Url de Twitter', 'possumus'),
        'section' => 'possumus_header_top',
        'settings' => 'possumus_setings[twitter_link]'

    ));

    //Enlace Instagram  
    $wp_customize -> add_setting('possumus_setings[instagram_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('instagram_link', array(
        'label' => __('Enlace a pagina de Instagram', 'possumus'),
        'description' => __('Url de Instagram', 'possumus'),
        'section' => 'possumus_header_top',
        'settings' => 'possumus_setings[instagram_link]'

    ));

    /*-----------------------------------
    Encabezado Normal - Seccion
    ----------------------------------*/
    
    $wp_customize->add_section('possumus_header', array(
        'title' => __('Encabezado ', 'possumus'),
        'description' => __('Opciones del encabezado ', 'possumus'),
        'priority' =>  11, //POr defecto vienen las prioridades de 20 en 20
        'panel' => 'possumus_header_panel'
      ));

      //Logo
    $wp_customize -> add_setting('possumus_setings[logo]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(

        'label' => __('Subir Logo', 'possumus'),
        'section' => 'possumus_header',
        'settings' => 'possumus_setings[logo]'

    )));

       //Checkbox Mostrar titulo y descripcion en Encabezado
       $wp_customize -> add_setting('possumus_setings[show_page_title]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('show_page_title', array(
        'label' => __('Mostrar titulo y descripcion', 'possumus'),
        'section' => 'possumus_header',
        'settings' => 'possumus_setings[show_page_title]',
        'type' => 'checkbox'

    ));


     /*-----------------------------------
    Panel Pie de pagina - Panel
    ----------------------------------*/

    $wp_customize->add_panel('possumus_footer_panel', array(
        'title' => __('Pie de pagina', 'possumus'),
        'description' => __('Opciones del footer', 'possumus'),
        'priority' =>  125, //POr defecto vienen las prioridades de 20 en 20
      ));

    /*-----------------------------------
    Llamada a la accion
    ----------------------------------*/
    
    $wp_customize->add_section('possumus_cta', array(
        'title' => __('Llamada a la accion ', 'possumus'),
        'priority' =>  10, //POr defecto vienen las prioridades de 20 en 20
        'panel' => 'possumus_footer_panel'
      ));

      //Texto CTA
      $wp_customize -> add_setting('possumus_setings[cta_text]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('cta_text', array(
        'label' => __('Texto CTA', 'possumus'),
        'section' => 'possumus_cta',
        'settings' => 'possumus_setings[cta_text]',
        

    ));

    //Texto Boton CTA
    $wp_customize -> add_setting('possumus_setings[cta_btn_text]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('cta_btn_text', array(
        'label' => __('Texto del boton', 'possumus'),
        'section' => 'possumus_cta',
        'settings' => 'possumus_setings[cta_btn_text]',
        

    ));

    //Texto Boton CTA
    $wp_customize -> add_setting('possumus_setings[cta_btn_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('cta_btn_link', array(
        'label' => __('Url de destino del boton', 'possumus'),
        'section' => 'possumus_cta',
        'settings' => 'possumus_setings[cta_btn_link]',
        

    ));

    /*-----------------------------------
    Pie inferior
    ----------------------------------*/
    
    $wp_customize->add_section('possumus_bottom_footer', array(
        'title' => __('Pie de pagina inferior', 'possumus'),
        'priority' =>  11, //POr defecto vienen las prioridades de 20 en 20
        'panel' => 'possumus_footer_panel'
      ));

      //Texto CTA
      $wp_customize -> add_setting('possumus_setings[bottom_footer_text]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('bottom_footer_text', array(
        'label' => __('Texto del footer', 'possumus'),
        'section' => 'possumus_bottom_footer',
        'settings' => 'possumus_setings[bottom_footer_text]',
        

    ));

    /*-----------------------------------
    Banner - Seccion
    ----------------------------------*/
    
    $wp_customize->add_section('possumus_banner', array(
        'title' => __('Banner Principal', 'possumus'),
        'priority' =>  36 //POr defecto vienen las prioridades de 20 en 20
        
      ));


       //Logo
    $wp_customize -> add_setting('possumus_setings[banner]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'banner', array(

        'label' => __('Subir Imagen de fondo para el banner', 'possumus'),
        'section' => 'possumus_banner',
        'settings' => 'possumus_setings[banner]'

    )));


    /*-----------------------------------
    Opciones Home - Panel
    ----------------------------------*/

    $wp_customize->add_panel('possumus_home_page_panel', array(
        'title' => __('Home Page', 'possumus'),
        'description' => __('Opciones de la plantilla de pagina de Inicio', 'possumus'),
        'priority' =>  36, //POr defecto vienen las prioridades de 20 en 20
      ));

    /*-----------------------------------
    Anuncios
    ----------------------------------*/
    
    $wp_customize->add_section('possumus_blurbs_section', array(
        'title' => __('Seccion de anuncios', 'possumus'),
        'priority' =>  10, //POr defecto vienen las prioridades de 20 en 20
        'panel' => 'possumus_home_page_panel'
      ));

       //Checkbox Mostrar seccion
       $wp_customize -> add_setting('possumus_setings[show_page_blurbs]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('show_page_blurbs', array(
        'label' => __('Mostrar seccion de anuncios', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[show_page_blurbs]',
        'type' => 'checkbox'

    ));

    //Titulo seccion
    $wp_customize -> add_setting('possumus_setings[title_blurbs]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('title_blurbs', array(
        'label' => __('Titulo de la seccion', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[title_blurbs]',
        

    ));

    //Subtitulo seccion
    $wp_customize -> add_setting('possumus_setings[subtitle_blurbs]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('subtitle_blurbs', array(
        'label' => __('Subtitulo de la seccion', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[subtitle_blurbs]',
        

    ));


      //Imagen Primer anuncio
      $wp_customize -> add_setting('possumus_setings[first_blurb_img]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'first_blurb_img', array(

        'label' => __('Subir Imagen de Primer anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[first_blurb_img]'

    )));

    //Titulo primer anuncio
    $wp_customize -> add_setting('possumus_setings[first_blurb_title]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('first_blurb_title', array(
        'label' => __('Titulo del primer anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[first_blurb_title]',
        

    ));

    //Texto primer anuncio
    $wp_customize -> add_setting('possumus_setings[first_blurb_text]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('first_blurb_text', array(
        'label' => __('Texto del primer anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[first_blurb_text]',
        'type'  => 'textarea'
        

    ));

    /*--------------------------------------------------------------*/

    //Imagen Segundo anuncio
    $wp_customize -> add_setting('possumus_setings[second_blurb_img]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'second_blurb_img', array(

        'label' => __('Subir Imagen de Segundo anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[second_blurb_img]'

    )));

    //Titulo Segundo anuncio
    $wp_customize -> add_setting('possumus_setings[second_blurb_title]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('second_blurb_title', array(
        'label' => __('Titulo del segundo anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[second_blurb_title]',
        

    ));

    //Texto segundo anuncio
    $wp_customize -> add_setting('possumus_setings[second_blurb_text]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('second_blurb_text', array(
        'label' => __('Texto del segundo anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[second_blurb_text]',
        'type'  => 'textarea'
        

    ));

/*--------------------------------------------------------------*/

     //Imagen tercer anuncio
     $wp_customize -> add_setting('possumus_setings[third_blurb_img]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'third_blurb_img', array(

        'label' => __('Subir Imagen de tercer anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[third_blurb_img]'

    )));

    //Titulo Segundo anuncio
    $wp_customize -> add_setting('possumus_setings[third_blurb_title]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('third_blurb_title', array(
        'label' => __('Titulo del tercer anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[third_blurb_title]',
        

    ));

    //Texto segundo anuncio
    $wp_customize -> add_setting('possumus_setings[third_blurb_text]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    //
    $wp_customize -> add_control('third_blurb_text', array(
        'label' => __('Texto del tercer anuncio', 'possumus'),
        'section' => 'possumus_blurbs_section',
        'settings' => 'possumus_setings[third_blurb_text]',
        'type'  => 'textarea'
        

    ));


    /*-----------------------------------
    Articulos mas recientes - Seccion
    ----------------------------------*/
    
    $wp_customize->add_section('possumus_last_post_section', array(
        'title' => __('Seccion de ultimos articulos ', 'possumus'),
    
        'priority' =>  11, //POr defecto vienen las prioridades de 20 en 20
        'panel' => 'possumus_home_page_panel'
      ));


     //Checkbox Mostrar seccion
     $wp_customize -> add_setting('possumus_setings[show_page_last_articles]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    
    $wp_customize -> add_control('show_page_last_articles', array(
        'label' => __('Mostrar seccion de ultimos articulos', 'possumus'),
        'section' => 'possumus_last_post_section',
        'settings' => 'possumus_setings[show_page_last_articles]',
        'type' => 'checkbox'

    ));

    //Titulo seccion
    $wp_customize -> add_setting('possumus_setings[title_posts]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    
    $wp_customize -> add_control('title_posts', array(
        'label' => __('Titulo de la seccion', 'possumus'),
        'section' => 'possumus_last_post_section',
        'settings' => 'possumus_setings[title_posts]',
        

    ));

    //Titulo seccion
    $wp_customize -> add_setting('possumus_setings[subtitle_posts]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    
    $wp_customize -> add_control('subtitle_posts', array(
        'label' => __('Subtitulo de la seccion', 'possumus'),
        'section' => 'possumus_last_post_section',
        'settings' => 'possumus_setings[subtitle_posts]',
        

    ));

   


    

    




 }

 add_action('customize_register', 'possumus_customize_register');
