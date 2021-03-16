<?php get_header(); ?>


<?php 
        $options = get_theme_mod('possumus_setings');

        if (!empty($options['banner'])) {
          $banner = $options['banner'];
        } else {
          $banner = IMAGENES . 'slide1.jpg';
        }
        
      
      ?>
      <?php if (have_posts() ): while ( have_posts() ): the_post(); ?> 

      <!-- Banner -->
      <section class="banner-principal">
      <?php if ( has_post_thumbnail() ): ?>

      <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <div class="banner" style="background-image: url('<?php echo $banner_article[0]; ?>');"></div>
        <div class="overlay-banner"></div>

        <?php else: ?>

            <div class="banner" style="background-image: url('<?php echo $banner; ?>');"></div>
        <?php endif; ?>

        <div class="texto-banner">
          <h3><?php the_title();?></h3>
        </div>
      </section> <!-- Banner -->

      <section class="blog">
        <div class="contenedor">

          <div class="listado-articulos">

		  <article <?php post_class('article single')?> id="post-<?php the_ID()?>">

             

              <div class="article-content">

                <?php the_content();?>
              </div> <!-- /.article-content -->

                      </article>	<!-- /.article -->
                      <?php endwhile; ?>

					  <?php if ( get_next_post_link() || get_previous_post_link()) : ?>

						<div class="navegacion-articulos">
									<nav>
										<div class="anterior">
						<?php previous_post_link('%link', __('Siguiente', 'possumus') ); ?>
											
							
										</div>
										<div class="siguiente">
											<?php next_post_link('%link', __('Anterior', 'possumus') ); ?>
							
										</div>
									</nav>
							</div> <!-- /.navegacion-articulos -->

						<?php endif ?>
                      
                      <?php endif; ?>


        <?php if ( comments_open() || get_comments_number() ): ?>


            <div class="comments-container">

              <?php comments_template('', 'true');?>
            </div>
        <?php endif; ?>

          </div>  <!-- /listado-articulos -->

         <?php get_sidebar(); ?>

        </div>
      </section> <!-- /Blog -->

      <?php get_footer(); ?>