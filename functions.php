<?php

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
if ( ! function_exists( 'child_theme_enqueue_styles' ) ) :
  function child_theme_enqueue_styles() {

      // Enqueue parent theme's main stylesheet
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

  }
endif;
