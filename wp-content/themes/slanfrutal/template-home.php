<?php
/**
 * Template Name: Pagina de Inicio
 * 
 * 
 * Plantilla para el home
 * 
 */


?>


<?php get_header(); ?>
<?php 
        //Rescato los cp y los vuelco a una variable
        $titulo_destacado = get_post_meta( $post->ID, 'titulo_destacado', true );
        $subtitulo_destacado = get_post_meta( $post->ID, 'subtitulo_destacado', true );
        $texto_boton = get_post_meta( $post->ID, 'texto_boton', true );
        $link_boton = get_post_meta( $post->ID, 'link_boton', true );
        $imagen_slider_1 = get_post_meta( $post->ID, 'imagen_1', true );
        $imagen_slider_2 = get_post_meta( $post->ID, 'imagen_2', true );
        $imagen_slider_3 = get_post_meta( $post->ID, 'imagen_3', true );


        //En caso de que este vacio
        if ( empty($titulo_destacado) ) {
          $titulo_destacado = get_bloginfo('name');
        } 
        
        ?>
      <!-- Slider -->
      <section class="slider-principal">
        <div class="slider" id="slider">

        <?php $slides= new WP_Query(array(
              'post_type' => 'slides',
              'order' => 'ASC'
              
          )); ?>

              <?php if ( $slides->have_posts() && $slides->post_count > 1) : while ($slides->have_posts() ) : $slides->the_post(); ?>
                <?php if(has_post_thumbnail()): ?>
                  <?php  the_post_thumbnail('full')?>
                  <?php endif; ?>  
                  <?php endwhile; else:?>
                  <img src="<?php echo $imagen_slider_1 ?>" alt="">
                  <img src="<?php echo $imagen_slider_2 ?>" alt="">
                  <img src="<?php echo $imagen_slider_1 ?>" alt="">
                  <img src="<?php echo $imagen_slider_2 ?>" alt="">
              <?php endif; ?>


          
        </div>
        <div class="overlay-slider"></div>
        <div class="texto-slider">
        
          <h3><?php echo $titulo_destacado ?></h3>
          <p><?php echo $subtitulo_destacado ?></p>
          <?php if ( !empty($link_boton)): ?>
            <a href="<?php echo esc_url($link_boton); ?>"><?php echo $texto_boton ?></a>
          <?php endif; ?>
          
          
        </div>
      </section> <!-- Slider -->

      <?php 
      
      $options = get_theme_mod('possumus_setings');
      /************************
       * Seccion de anuncions o Blubrs
       */


      if (isset($options ['show_page_blurbs'])) {
        $show_page_blurbs = $options ['show_page_blurbs'];
      } 
      
      else {
        $show_page_blurbs = false;
      }

      if (!empty($options['title_blurbs'])) {
        $title_blurbs = $options['title_blurbs'];
      } 

      if (!empty($options['subtitle_blurbs'])) {
        $subtitle_blurbs = $options['subtitle_blurbs'];
      } 

      //Primer anuncio
      if ( !empty($options['first_blurb_img'])) {
          $first_blurb_img = $options['first_blurb_img'];
        } else {
          $first_blurb_img = IMAGENES . '/blurb-cosechando.jpg';
        }

        if (!empty($options['first_blurb_title'])) {
          $first_blurb_title = $options['first_blurb_title'];
        }
        else {
          $first_blurb_title = __('Primer titulo', 'possumus');
        }
        
        if (!empty($options['first_blurb_text'])) {
          $first_blurb_text = $options['first_blurb_text'];
        } else {
          $first_blurb_text = __('Aca iria el texto de esta opcion', 'possumus');
        }


        //Segundo anuncio
      if ( !empty($options['second_blurb_img'])) {
        $second_blurb_img = $options['second_blurb_img'];
      } else {
        $second_blurb_img = IMAGENES . '/blurb-cosechando.jpg';
      }

      if (!empty($options['second_blurb_title'])) {
        $second_blurb_title = $options['second_blurb_title'];
      }
      else {
        $second_blurb_title = __('Segundo titulo', 'possumus');
      }
      
      if (!empty($options['second_blurb_text'])) {
        $second_blurb_text = $options['second_blurb_text'];
      } else {
        $second_blurb_text = __('Aca iria el texto de esta 2da opcion', 'possumus');
      }


      //Tercer anuncio
      if ( !empty($options['third_blurb_img'])) {
        $third_blurb_img = $options['third_blurb_img'];
      } else {
        $third_blurb_img = IMAGENES . '/blurb-cosechando.jpg';
      }

      if (!empty($options['third_blurb_title'])) {
        $third_blurb_title = $options['third_blurb_title'];
      }
      else {
        $third_blurb_title = __('Segundo titulo', 'possumus');
      }
      
      if (!empty($options['third_blurb_text'])) {
        $third_blurb_text = $options['third_blurb_text'];
      } else {
        $third_blurb_text = __('Aca iria el texto de esta 2da opcion', 'possumus');
      }

      //Articulos mas recientes

      if (isset($options ['show_page_last_articles'])) {
        $show_page_last_articles = $options ['show_page_last_articles'];
      } 
      
      else {
        $show_page_last_articles = false;
      }

      if (!empty($options['title_posts'])) {
        $title_posts = $options['title_posts'];
      } 

      if (!empty($options['subtitle_posts'])) {
        $subtitle_posts = $options['subtitle_posts'];
      } 

  
      
      ?>

       <?php if ($show_page_blurbs == true): ?>
        <section class="blurbs" id="blurbs">
        <div class="contenedor">

          <div class="titulo-seccion">
          <?php if (isset($title_blurbs)): ?>
               <h3><?php echo $title_blurbs; ?></h3>
               <?php endif; ?>
               <?php if (isset($subtitle_blurbs)): ?>
               <p><?php echo $subtitle_blurbs; ?></p>
               <?php endif; ?>
          </div>

          <div class="contenido-seccion">

            <article class="blurb">
              <div class="imagen">
                <img src="<?php echo $first_blurb_img; ?>" alt="">
              </div>
              <div class="texto">

              <?php if (isset($first_blurb_title)): ?>
               <h4><?php echo $first_blurb_title; ?></h4>
               <?php endif; ?>
               <?php if (isset($first_blurb_text)): ?>
               <p><?php echo $first_blurb_text; ?></p>
               <?php endif; ?>
              </div>
            </article>

            <article class="blurb">
              <div class="imagen">
                <img src="<?php echo $second_blurb_img; ?>" alt="">
              </div>
              <div class="texto">

              <?php if (isset($second_blurb_title)): ?>
               <h4><?php echo $second_blurb_title; ?></h4>
               <?php endif; ?>
               <?php if (isset($second_blurb_text)): ?>
               <p><?php echo $second_blurb_text; ?></p>
               <?php endif; ?>
              </div>
            </article>

            <article class="blurb">
              <div class="imagen">
                <img src="<?php echo $third_blurb_img; ?>" alt="">
              </div>
              <div class="texto">

              <?php if (isset($third_blurb_title)): ?>
               <h4><?php echo $third_blurb_title; ?></h4>
               <?php endif; ?>
               <?php if (isset($third_blurb_text)): ?>
               <p><?php echo $third_blurb_text; ?></p>
               <?php endif; ?>
              </div>
            </article>

          </div>  <!-- /Contenido sección -->
        </div>
      </section> <!-- /Blurbs -->
       <?php endif;?> 

      
       <?php if ($show_page_last_articles == true): ?>
      <section class="ultimos-articulos">
        <div class="contenedor">

          <div class="titulo-seccion">
          <?php if (isset($title_posts)): ?>
               <h3><?php echo $title_posts; ?></h3>
               <?php endif; ?>
               <?php if (isset($subtitle_posts)): ?>
               <p><?php echo $subtitle_posts; ?></p>
               <?php endif; ?>
          </div>

          <div class="contenedor-articulos">

          <?php $post_home = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => 3
          )); ?>

            <?php if ( $post_home->have_posts() ) : while ($post_home->have_posts() ) : $post_home->the_post(); ?>
            <article class="article">

            <?php if (has_post_thumbnail() ): ?>

                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('blog-size-image') ?>
                </a>
            <?php endif; ?>  

<div class="article-content">
  <div class="article-header">
                  <h2><a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_title();?></a></h2>
    <p class="article-date"><?php the_time( get_option('date_format') );?></p>
              </div><!-- /.blog-entry-header -->

              <?php echo possumus_the_excerpt(20);?>

              <p class="read-more-container"><a href="<?php the_permalink();?>" class="read-more-link"><?php _e('Leer Más', 'possumus'); ?></a></p>
</div> <!-- /.article-content -->

        </article>	<!-- /.article -->

            <?php endwhile; else: ?>
            <?php endif; ?>


            

           

            

          </div>

        </div>
      </section> <!-- /.ultimos-articulos -->

      <?php endif; ?>

      <?php get_footer(); ?>