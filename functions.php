<?php
function twentytwenty_child_register_scripts() {

  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

	wp_enqueue_style( 'twentytwenty-child', get_stylesheet_directory_uri() . '/style.css');

  wp_enqueue_script( 'splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), true  );
  wp_enqueue_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css' );


  wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', array(), true  );
  wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css' );





}

add_action( 'wp_enqueue_scripts', 'twentytwenty_child_register_scripts' );

require_once("partials/fontawsome-array.php");
require_once("partials/blocks.php");
