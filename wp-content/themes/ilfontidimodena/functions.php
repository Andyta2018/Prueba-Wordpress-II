<?php

function register_enqueue_style() {
	$theme_data = wp_get_theme();

 	/* Registrando estilos */
 	 wp_register_style('miestilo', get_theme_file_uri('/assets/css/miestilo.css'), null, $theme_data->get('Version'), 'screen'); 
	 wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Francois+One|Open+Sans:300i,400,700');
	 wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	 wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css'); 
	 

	 /* Estilos en cola */
	 wp_enqueue_style('miestilo');
	 wp_enqueue_style('googlefonts');
	 wp_enqueue_style('bootstrap');
	 wp_enqueue_style('fontawesome');
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

function register_enqueue_scripts() {
	$theme_data = wp_get_theme();

	 /* Registrando Scripts */
	 wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.js');
	 wp_register_script('script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
	 wp_register_script('jquery.min', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	 wp_register_script('bootstrap.min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');

	 /* Enqueue Scripts */
	 wp_enqueue_script('jquery');
	 wp_enqueue_script('script');
	 wp_enqueue_script('jquery.min');
	 wp_enqueue_script('bootstrap.min');
	 
  }

  add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

//Logo personalizado
function config_custom_logo(){
	 add_theme_support('custom-logo', array(
	 	'height'		=> 600,
	 	'width'			=> 200,
	 	'flex-height'	=> true,
	 	'header-text'	=> array( 'site-title', 'site-description'),
	 ));
}

//tamaños personalizados imagenes
add_action( 'after_setup_theme', 'config_custom_logo');

function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );

    return array_merge( $sizes, $add_sizes );

  }

  if ( function_exists( 'add_theme_support' ) ) {

    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );

  }

  add_action( 'after_setup_theme', 'thumbnails_setup' );

?>

