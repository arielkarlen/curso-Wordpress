<?php get_header(); ?>

      <!-- Slider -->
      <section class="banner-principal">
        <div class="banner" style="background-image: url('<?php echo IMAGENES; ?>/slide1.jpg');"></div>
        <div class="overlay-banner"></div>
        <div class="texto-banner">
          <h3>Blog</h3>
        </div>
      </section> <!-- Slider -->

      <section class="blog">
        <div class="contenedor">

          <div class="listado-articulos">

            <article class="article">

              <div class="article-header">
                <p class="article-date">1 de enero 2017</p>
                <h2><a href="#">Artículo de prueba 1</a></h2>
                <p class="article-category"><a href="#">Recetas</a></p>
              </div><!-- /article-header -->

              <a href="#">
              <img src="img/articulo1.jpg" alt="">
              </a>

              <div class="article-content">

    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt voluptatum, libero excepturi accusamus illo debitis ab tempora!</p>

    						<p class="read-more-container"><a href="#" class="read-more-link">Leer más</a></p>
              </div> <!-- /.article-content -->

  					</article>	<!-- /.article -->

            <article class="article">

              <div class="article-header">
                <p class="article-date">1 de enero 2017</p>
                <h2><a href="#">Artículo de prueba 2</a></h2>
                <p class="article-category"><a href="#">Recetas</a></p>
              </div><!-- /article-header -->

              <a href="#">
              <img src="img/articulo2.jpg" alt="">
              </a>

              <div class="article-content">

    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt voluptatum, libero excepturi accusamus illo debitis ab tempora!</p>

    						<p class="read-more-container"><a href="#" class="read-more-link">Leer más</a></p>
              </div> <!-- /.article-content -->

  					</article>	<!-- /.article -->

            <article class="article">

              <div class="article-header">
                <p class="article-date">1 de enero 2017</p>
                <h2><a href="#">Artículo de prueba 3</a></h2>
                <p class="article-category"><a href="#">Recetas</a></p>
              </div><!-- /article-header -->

              <a href="#">
              <img src="img/articulo3.jpg" alt="">
              </a>

              <div class="article-content">

    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt voluptatum, libero excepturi accusamus illo debitis ab tempora!</p>

    						<p class="read-more-container"><a href="#" class="read-more-link">Leer más</a></p>
              </div> <!-- /.article-content -->

  					</article>	<!-- /.article -->

            <div class="navegacion-articulos">
  						<nav>
  							<div class="anterior">
  								<a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i> Artículos antiguos</a>
  							</div>
  							<div class="siguiente">
  								<a href="#">Artículos recientes <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
  							</div>
  						</nav>
  					</div> <!-- /.navegacion-articulos -->

          </div>  <!-- /listado-articulos -->

          <?php get_sidebar(); ?>
        </div>
      </section> <!-- /Blog -->

<?php get_footer(); ?>
