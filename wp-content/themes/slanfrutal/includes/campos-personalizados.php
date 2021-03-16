<?php
/**

*Crear campos personalizados


 */

 function possumus_new_metabox() {
    add_meta_box('datos_home', __('Datos en la pagina de inicio', 'possumus'), 'possumus_metabox_home', 'page', 'normal', 'high');
 }

 add_action('add_meta_boxes', 'possumus_new_metabox');

 $possumus_custom_field_home = array (

    array(
        'label' => __('Titulo destacado', 'possumus'),
        'description' => __('Ingresa el titulo destacado del sitio', 'possumus'),
        'id' => 'titulo_destacado',
        'type' => 'text'

    ),

    array(
        'label' => __('SubTitulo destacado', 'possumus'),
        'description' => __('Ingresa el subtitulo destacado del sitio', 'possumus'),
        'id' => 'subtitulo_destacado',
        'type' => 'text'

    ),

    array(
        'label' => __('Texto del boton', 'possumus'),
        'description' => __('Ingresa el texto de boton', 'possumus'),
        'id' => 'texto_boton',
        'type' => 'text'

    ),

    array(
        'label' => __('Texto del boton', 'possumus'),
        'description' => __('Ingresa el enlace del  boton', 'possumus'),
        'id' => 'link_boton',
        'type' => 'text'

    ),

    array(
      'label' => __('Imagen 1', 'possumus'),
      'description' => __('Ingresa la url de la imagen 1 del slider', 'possumus'),
      'id' => 'imagen_1',
      'type' => 'text'

  ),

  array(
    'label' => __('Imagen 2', 'possumus'),
    'description' => __('Ingresa la url de la imagen 2 del slider', 'possumus'),
    'id' => 'imagen_2',
    'type' => 'text'

),

array(
  'label' => __('Imagen 3', 'possumus'),
  'description' => __('Ingresa la url de la imagen 2 del slider', 'possumus'),
  'id' => 'imagen_3',
  'type' => 'text'

),

 );


 function possumus_metabox_home () {
     global  $possumus_custom_field_home, $post;

     wp_nonce_field('possumus_metabox_home', 'meta_box_nonce'); //validacion de seguridad

    foreach($possumus_custom_field_home as $campo) {

        $meta = get_post_meta($post->ID, $campo['id'], true);

        ?>
        <p>
        <label for="<?php echo $campo['id']; ?>" ><?php echo $campo['label']; ?></label></br>
        <input class="widefat" id="<?php echo $campo['id'] ?>" type="text" name="<?php echo $campo['id'] ?>" value="<?php echo $meta ?>">
        <span class="howto"><?php echo $campo['description'] ?></span>
        </p>

        <?php

    }
 }

 function save_possumus_metabox_home ($post_id) {

    global $possumus_custom_field_home; 

     // Verificamos envío del nonce
  if ( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'possumus_metabox_home' ) ) {
    return;
  }

  // Verificamos que se hace un autoguardado y le indicamos que no haga nada en ese caso
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return;
  }

  // Verificamos que lo guardado sea una página y que el usuario tenga permisos de edición
  if ( $_POST['post_type'] == 'page' ) {

    if ( !current_user_can('edit_page', $post_id) ) {
      return;
    }

  }

  //Hacemos un recorrido por los campos

  foreach($possumus_custom_field_home as $campo){

    //Obtenemos el valor anterior del campo
    $antiguo = get_post_meta($post_id, $campo['id'], true);

    $nuevo = $_POST[$campo['id']];

    if ( $nuevo && $nuevo != $antiguo ) {
      update_post_meta($post_id, $campo['id'], $nuevo);
    } elseif ( $nuevo == '' && $antiguo ) {
      delete_post_meta($post_id, $campo['id'], $antiguo);
    }

  }

}
    
add_action ('save_post', 'save_possumus_metabox_home');


/*Mostrar solamente en una pagina

function show_hide_possumus_metabox_home() {
?>

<style media="screen">

  #datos_home{
    display:none
  }

</style>

<script>

jQuery(document).ready(function () {

  function showhide_datos() {

    if ( jQuery('#inspector-select-control-1').attr('value') == 'template-home.php') {
      jQuery('#datos_home').slideDown();

  }
    else {
      jQuery('#datos_home').slideUp();
    }
  } 
    showhide_datos(); 

    jQuery('#inspector-select-control-1').on('change', function () {
      showhide_datos();
    });

});

</script>


<?php 
}
add_action('admin_head', 'show_hide_possumus_metabox_home');
*/