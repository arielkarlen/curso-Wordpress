<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title><?php wp_title('|', 'true', 'rigth'); ?><?php bloginfo('name');?></title>

<!--Para achicar la barra de Admin -->

    <?php if (is_admin_bar_showing() ) : ?>
    <style media="screen">
    
    @media all and (max-width:980px) {
      header .menu-bar .menu-principal {
        top:32px!important
      }
    }

    @media all and (max-width:782px) {
      header .menu-bar .menu-principal {
        top:46px!important
      }
    }
    
    </style>

      <?php endif; ?>
<!--Fin Para achicar la barra de Admin -->

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


<!--Agregar formualrio para comentarios-->
<?php 

if (is_single() && comments_open()) {

  wp_enqueue_script ('comment-reply');
}

?>
<!--Fin Agregar formualrio para comentarios-->

    <?php wp_head(); ?>
  
  </head>
  <body <?php body_class(); ?>>

    <?php 
    
      $options = get_theme_mod('possumus_setings');
      
      if ( !empty($options['top_header_text'])) {
        $top_header_text = $options['top_header_text'];
      } 

      if ( !empty($options['facebook_link'])) {
        $facebook_link = $options['facebook_link'];
      } 

      if ( !empty($options['twitter_link'])) {
        $twitter_link = $options['twitter_link'];
      }

      if ( !empty($options['instagram_link'])) {
        $instagram_link = $options['instagram_link'];
      }

      if ( !empty($options['logo'])) {
        $logo = $options['logo'];
      }
      else {
        $logo = IMAGENES . '/logotipo.png';
      }


      if ( isset($options['show_page_title'])) {
        $show_page_title = $options['show_page_title'];
      }
      else {
        $show_page_title = false;
      }
      
      
      

      
    
    ?>


    <!-- Header -->
    <header>

      <div class="top-header">

        <div class="top-text">

          <?php if (isset($top_header_text)): ?>
          <p><?php echo $top_header_text; ?></p>
          <?php endif;  ?>

        </div>

        <div class="search-container">
          <?php get_search_form();?>
        </div>

        <div class="top-redes">

        <?php if (isset($facebook_link)): ?>
          <a href="<?php echo esc_url($facebook_link); ?>">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        <?php endif;  ?>

        <?php if (isset($twitter_link)): ?>
          <a href="<?php echo esc_url($twitter_link); ?>">  
          <a href="#">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        <?php endif;  ?>  

        <?php if (isset($instagram_link)): ?>
          <a href="<?php echo esc_url($instagram_link); ?>">    
          <a href="#">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <?php endif;  ?>  

        </div>

      </div> <!-- /Top header -->

      <div class="menu-bar">
        <a href="<?php echo home_url(); ?>" class="logo-container">
          
          <img src="<?php echo $logo ?>" alt="<?php bloginfo('name')?>">


           <?php if ($show_page_title == true): ?> 
          <div class="titulo-web">
            <h1><?php bloginfo('name'); ?></h1>
            <h2><?php bloginfo('description'); ?></h2>
          </div>
          <?php endif; ?>
        </a>

        <nav id="menuPrincipal" class="menu-principal">
          <div class="top-text">
          <?php if (isset($top_header_text)): ?>
          <p><?php echo $top_header_text; ?></p>
          <?php endif;  ?>
            <i id="iconoCerrarMenu" class="fa fa-arrow-left" aria-hidden="true"></i>
          </div>
          <div class="top-redes">

        <?php if (isset($facebook_link)): ?>
          <a href="<?php echo esc_url($facebook_link); ?>">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        <?php endif;  ?>

        <?php if (isset($twitter_link)): ?>
          <a href="<?php echo esc_url($twitter_link); ?>">  
          <a href="#">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        <?php endif;  ?>  

        <?php if (isset($instagram_link)): ?>
          <a href="<?php echo esc_url($instagram_link); ?>">    
          <a href="#">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <?php endif;  ?>  
           
        </div>
          
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'main-menu'
          ));
        
        ?>

        </nav>

        <div class="icono-menu-responsive">
          <i id="iconoAbrirMenu" class="fa fa-bars" aria-hidden="true"></i>
        </div>
      </div> <!-- /menu-bar -->

    </header> <!-- /Header -->

    <section class="main">