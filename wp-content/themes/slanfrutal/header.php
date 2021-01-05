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

  wp_enqueue_script ('comment-reply')
}

?>
<!--Fin Agregar formualrio para comentarios-->

    <?php wp_head(); ?>
  
  </head>
  <body>

    <!-- Header -->
    <header>

      <div class="top-header">

        <div class="top-text">
          <p>Preparando los mejores batidos</p>
        </div>

        <div class="search-container">
          <form class="" action="index.html" method="post">
            <input type="text" name="buscar" placeholder="Buscar">
            <button type="submit" name="enviar">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>

        <div class="top-redes">
          <a href="#">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>

      </div> <!-- /Top header -->

      <div class="menu-bar">
        <a href="#" class="logo-container">
          <img src="img/logotipo.png" alt="Frutería">

          <div class="titulo-web">
            <h1>Sabor frutal</h1>
            <h2>Bebidas con verdadera naturaleza</h2>
          </div>
        </a>

        <nav id="menuPrincipal" class="menu-principal">
          <div class="top-text">
            <p>Preparando los mejores batidos</p>
            <i id="iconoCerrarMenu" class="fa fa-arrow-left" aria-hidden="true"></i>
          </div>
          <div class="top-redes">
            <a href="#">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="#">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="#">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Nosotros</a></li>
            <li class="page-active"><a href="#">Blog</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </nav>

        <div class="icono-menu-responsive">
          <i id="iconoAbrirMenu" class="fa fa-bars" aria-hidden="true"></i>
        </div>
      </div> <!-- /menu-bar -->

    </header> <!-- /Header -->

    <section class="main">