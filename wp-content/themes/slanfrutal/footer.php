</section> <!-- /Main -->

<?php
  $options = get_theme_mod('possumus_setings');
      
  if ( !empty($options['cta_text'])) {
    $cta_text = $options['cta_text'];
  } 

  if ( !empty($options['cta_btn_text'])) {
    $cta_btn_text = $options['cta_btn_text'];
  }
  
  if ( !empty($options['cta_btn_link'])) {
    $cta_btn_link = $options['cta_btn_link'];
  } 

  if ( !empty($options['bottom_footer_text'])) {
    $bottom_footer_text = $options['bottom_footer_text'];
  } 

?>


<!-- Footer -->
<footer>

  <section class="llamada-accion">
    <div class="contenedor">

      <div class="texto">
        
          <?php if (isset($cta_text)): ?>
            <p><?php echo $cta_text; ?></p>
          <?php endif;  ?>  
      </div>
      <div class="boton">
        <a href="/<?php echo esc_url($cta_btn_link); ?>">
        <?php if (isset($cta_btn_text)): ?>
          <?php echo $cta_btn_text; ?></a>
          <?php endif;  ?>    
      </div>

    </div>

  </section> <!-- /.llamada-accion -->

  <section class="footer-widgets">
    <div class="contenedor">

      <div class="contenedor-widget">
      <?php 
      if (is_active_sidebar('footer-widget-izq') ) {
 
    dynamic_sidebar('footer-widget-izq');

}
?>
      </div>

      <div class="contenedor-widget">
      <?php 
      if (is_active_sidebar('footer-widget-centro') ) {
 
    dynamic_sidebar('footer-widget-centro');

}
?>
      </div>

      <div class="contenedor-widget">
      <?php 
      if (is_active_sidebar('footer-widget-der') ) {
 
    dynamic_sidebar('footer-widget-der');

}
?>
      </div>

    </div>
  </section> <!-- /.footer-widgets -->

  <section class="bottom-footer">
    <div class="contenedor">
    <?php if (isset($bottom_footer_text)): ?>
            <p><?php echo $bottom_footer_text; ?></p>
          <?php endif;  ?> 
    </div>
  </section> <!-- /.bottom-footer -->

</footer> <!-- /Footer -->


<?php wp_footer(); ?>

</body>
</html>