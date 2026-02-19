<?php

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}



function ms_styles_and_scripts() {
  // Enqueue Styles
  wp_enqueue_style( 'ms-main-styles', get_theme_file_uri('/build/index.css' ), array(), '1.0.0' );

  // Enqueue Scripts
  wp_enqueue_script('ms-main-js', get_theme_file_uri('/build/index.js'), array(), '1.0.0', true);

    // for site search
  wp_localize_script( 'ms-main-js', 'ms_data', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest'),
  ));
}

add_action( 'wp_enqueue_scripts', 'ms_styles_and_scripts' );