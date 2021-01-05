jQuery(document).ready(function ($) {

/*-------------------------------------------------------------*/
/*Slider*/
/*-------------------------------------------------------------*/
  var slider = new IdealImageSlider.Slider({
  	selector: '#slider',
    height:400,
  	interval: 7000,
    onStop: function(){
      slider.start();
    }
  });
  slider.start();

/*-------------------------------------------------------------*/
/*Menu responsive*/
/*-------------------------------------------------------------*/

  var menuPrincipal = $('#menuPrincipal');
  var iconoCerrarMenu = $('#iconoCerrarMenu');
  var iconoAbrirMenu = $('#iconoAbrirMenu');

  iconoAbrirMenu.on('click', function () {
    menuPrincipal.css('left', 0);
  });

  iconoCerrarMenu.on('click', function () {
    menuPrincipal.css('left', '-100%');
  });

/*-------------------------------------------------------------*/
/*Efecto scroll suave desde botón en inicio a seccion blurbs*/
/*-------------------------------------------------------------*/

  $('a[href="#blurbs"]').click(function(e){
  e.preventDefault();
  $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
  });

/*-------------------------------------------------------------*/
/*Aparecer y desaparecer submenu dropdown*/
/*-------------------------------------------------------------*/
    $('li.menu-item-has-children').on('mouseover', function () {
      if ($(window).width() > 963) {
        $('li.menu-item-has-children').children('.sub-menu').stop().slideDown('fast');
      }
    });
    $('li.menu-item-has-children').on('mouseout', function () {
      if ($(window).width() > 963) {
        $('li.menu-item-has-children').children('.sub-menu').stop().slideUp('fast');
      }
    });
    $(window).resize(function () {
      if ($(window).width() <= 963) {
        $('li.menu-item-has-children').children('.sub-menu').css('display', 'block');
        $('li.menu-item-has-children').children('.sub-menu').css('height', 'auto');
      }
      if ($(window).width() > 963) {
        $('li.menu-item-has-children').children('.sub-menu').css('display', 'none');
        $('li.menu-item-has-children').children('.sub-menu').css('height', 'auto');
      }
    });


});
