<?php if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( $_SERVER['SCRIPT_FILENAME']) == 'comments.php'):
    
   die(); 
    
endif; ?>
<?php if (post_password_required() ):?>
<p><?php _e('Se necesit contraseña para visualizar este contenido', 'possumus')?></p>
<?php return;?>

<?php endif;?>


<div id="comments">
      					
                    <?php if(get_comments_number() ): ?>
                        <h3 class="comments-title"><?php comments_number(__('Escribe el primer comentario', 'possumus'), __('Hay 1 comentario', 'possumus'), __('Hay % comentarios', 'possumus'));?></a></h3>
      					<ol id="comments-list">
      						<?php wp_list_comments(); ?>
      					</ol><!-- /#comments-list -->

                    <?php endif; ?>

                    <?php if (get_comment_pages_count() > 1 && get_option('page_comments') ): ?>

                    <div class="navegacion-comentarios">
                        <div class="anterior">
                        <?php previous_comments_link(__('Anterior', 'possumus') ); ?>
                        </div>
                        <div class="siguiente">
                        <?php next_comments_link(__('Siguiente', 'possumus') ); ?>
                        </div>
                    </div>

                    <?php endif; ?>	

                          
                          <?php comment_form();?>
      				</div><!-- /#comments -->