<?php get_header(); ?>

<?php 
        $options = get_theme_mod('possumus_setings');

        if (!empty($options['banner'])) {
          $banner = $options['banner'];
        } else {
          $banner = IMAGENES . 'slide1.jpg';
        }
        
      
      ?>

      <!-- Slider -->
      <section class="banner-principal">
        <div class="banner" style="background-image: url('<?php echo $banner; ?>');"></div>
        <div class="overlay-banner"></div>
        <div class="texto-banner">
          
          <!--Titulos dinamicos segun donde me encuentre -->

          <?php if ( is_category() ): ?>
            <h3><?php _e('Categoria:', 'possumus')?> <?php single_cat_title ()?></h3>
          

          <?php elseif ( is_tag() ): ?>
            <h3><?php _e('Etiqueta:', 'possumus')?> <?php single_tag_title ()?></h3>

            <?php elseif ( is_search() ): ?>
            <h3><?php _e('Resultados de busqueda para:', 'possumus')?> <?php the_search_query ()?></h3>

            <?php elseif ( is_date() ): ?>
            <h3><?php _e('Archivo:', 'possumus')?> <?php the_time( get_option('date_format') );?></h3>

            <?php elseif ( is_month() ): ?>
            <h3><?php _e('Archivo:', 'possumus'); ?> <?php the_time('F Y') ;?></h3>

            <?php elseif ( is_year() ): ?>
            <h3><?php _e('Archivo:', 'possumus'); ?> <?php the_time('Y') ;?></h3>

            <?php elseif ( is_author() ): ?>
            <h3>
              <?php _e('Articulos de:', 'possumus'); ?> 
              <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?>
              <?php echo $curauth->display_name; ?>
            </h3>
              <?php elseif ( is_404() ): ?>
            <h3><?php _e('No se encontro la pagina', 'possumus'); ?></h3> 

            <?php elseif ( is_home() ): ?>
             <?php if (is_front_page() ): ?>   
              <h3><?php _e('Blog', 'possumus'); ?></h3>

              <?php else: ?>
                <h3><?php wp_title(' ', true, 'right' ); ?></h3>  
                <?php endif; ?>  

                 <?php else: ?>
                  <h3><?php wp_title(' ', true, 'right' ); ?></h3>
          <?php endif; ?>


          <!--Titulos dinamicos segun donde me encuentre -->

        </div>
      </section> <!-- Slider -->

      <section class="blog">
        <div class="contenedor">

          <div class="listado-articulos">

          
<!--Loop de articulos dinamicos-->
          <?php if ( have_posts() ): while(  have_posts() ): the_post();?>

            <article <?php post_class('article')?> id="post-<?php the_ID()?>">
          
            <div class="article-header">
              <p class="article-date"><?php the_time( get_option('date_format') );?></p>
              <h2><a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_title();?></a></h2>
              <p class="article-category"><?php the_category(', ');?></p>
            </div><!-- /article-header -->
          
            <?php if ( ! has_post_format('video') && ! has_post_format ('audio') ) : ?>

                    <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('blog-size-image');?>
                    </a>

                    <?php endif ?>

            <?php endif ?>
            <div class="article-content">

            <?php the_excerpt();?>

              <p class="read-more-container"><a href="<?php the_permalink();?>" class="read-more-link"><?php _e('Leer Más', 'possumus'); ?></a></p>
            </div> <!-- /.article-content -->

            </article>	<!-- /.article -->
          
          <?php endwhile; ?>


         

            <?php if ( get_next_posts_link() || get_previous_posts_link()) : ?>

              <div class="navegacion-articulos">
  						<nav>
  							<div class="anterior">
                <?php previous_posts_link(__('Siguiente', 'possumus') ); ?>
  								 
                  
  							</div>
  							<div class="siguiente">
  								<?php next_posts_link(__('Anterior', 'possumus') ); ?>
                  
  							</div>
  						</nav>
  				  </div> <!-- /.navegacion-articulos -->

            <?php endif ?>


          

          <?php else: ?>
            <?php get_template_part('template-parts/content', 'nopost') ?>
          <?php endif; ?>

<!--Fin Loop de Articulos dinamicos-->
 

            

          </div>  <!-- /listado-articulos -->

          <?php get_sidebar(); ?>
        </div>
      </section> <!-- /Blog -->

<?php get_footer(); ?>
